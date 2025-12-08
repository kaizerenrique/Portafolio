<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contacto;
use Illuminate\Support\Facades\Log;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $subject;
    public $message;
    public $success = false;
    public $sending = false;

    protected $rules = [
        'name' => 'required|min:2|max:100',
        'email' => 'required|email',
        'subject' => 'required|min:5|max:200',
        'message' => 'required|min:10|max:1000',
    ];

    protected $messages = [
        'name.required' => 'El nombre es obligatorio.',
        'name.min' => 'El nombre debe tener al menos 2 caracteres.',
        'email.required' => 'El email es obligatorio.',
        'email.email' => 'Debe ser un email válido.',
        'subject.required' => 'El asunto es obligatorio.',
        'subject.min' => 'El asunto debe tener al menos 5 caracteres.',
        'message.required' => 'El mensaje es obligatorio.',
        'message.min' => 'El mensaje debe tener al menos 10 caracteres.',
    ];

    public function submit()
    {
        $this->validate();
        $this->sending = true;

        try {
            // Preparar los datos para el email
            $emailData = [
                'name' => $this->name,
                'email' => $this->email,
                'subject' => $this->subject,
                'message' => $this->message,
            ];

            Log::info('Enviando correo de contacto', $emailData);

            // CORRECCIÓN: Pasar un array en lugar de parámetros individuales
            Mail::to('kayserenrique@gmail.com')
                ->send(new Contacto($emailData));
            
            Log::info('Correo enviado exitosamente a kayserenrique@gmail.com');

            // Reiniciar el formulario
            $this->resetForm();
            $this->success = true;
            $this->sending = false;

            // Ocultar el mensaje de éxito después de 5 segundos
            $this->dispatch('contact-form-submitted');
            
        } catch (\Exception $e) {
            $this->sending = false;
            
            $errorMessage = 'Hubo un error al enviar el mensaje. Por favor, intenta nuevamente.';
            
            // Detectar tipo de error
            if (str_contains($e->getMessage(), 'Connection could not be established')) {
                $errorMessage = 'Error de conexión SMTP. Verifica la configuración de correo.';
            } elseif (str_contains($e->getMessage(), 'Authentication failed')) {
                $errorMessage = 'Error de autenticación. Verifica usuario y contraseña de correo.';
            }
            
            session()->flash('error', $errorMessage);
            
            Log::error('Error enviando email de contacto: ' . $e->getMessage(), [
                'exception' => $e,
                'trace' => $e->getTraceAsString(),
                'email_data' => $emailData ?? []
            ]);
        }
    }

    private function resetForm()
    {
        $this->reset(['name', 'email', 'subject', 'message']);
        $this->resetValidation();
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}