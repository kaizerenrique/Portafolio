<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsShowcase extends Component
{
    public $projects = [];

    public function mount()
    {
        $this->projects = [
            [
                'title' => 'Linhir Asistente Bot',
                'period' => 'Noviembre 16, 2025 - Noviembre 23, 2025',
                'description' => 'Bot de Discord que conecta el servidor del gremio Linhir con su página web.',
                'long_description' => 'Desarrollo de un bot de Discord que actúa como puente entre el servidor de Discord del gremio Linhir y su aplicación web. Proporciona integración en tiempo real y funcionalidades automatizadas para la comunidad del gremio.',
                'technologies' => ['Laracord', 'PHP', 'Discord API', 'Web Integration'],
                'category' => 'Discord Bot',
                'status' => 'completed',
                'image' => asset('imagenes/baner_bot_dicord.png'),
                'features' => [
                    'Conexión entre Discord y aplicación web',
                    'Integración en tiempo real',
                    'Automatización de procesos',
                    'Comunicación bidireccional'
                ],
                'links' => [
                    'github' => 'https://github.com/kaizerenrique/Linhir_Asistente_Bot'
                ]
            ],
            [
                'title' => 'Sistema Gremio Linhir',
                'period' => 'Julio 26, 2025 - Noviembre 6, 2025',
                'description' => 'Aplicación web del gremio Linhir - www.linhir.online',
                'long_description' => 'Desarrollo completo de la aplicación web oficial del gremio Linhir. Plataforma web moderna con autenticación, gestión de usuarios y diversas funcionalidades para la comunidad del gremio.',
                'technologies' => ['Laravel 12', 'Jetstream', 'Livewire', 'Tailwind CSS', 'MySQL'],
                'category' => 'Web Application',
                'status' => 'completed',
                'image' => asset('imagenes/web_linhir.png'),
                'features' => [
                    'Sistema de autenticación completo',
                    'Interfaz moderna con Tailwind CSS',
                    'Componentes Livewire interactivos',
                    'Despliegue en producción'
                ],
                'links' => [
                    'github' => 'https://github.com/kaizerenrique/SistemaGremioLinhir',
                    'demo' => 'https://linhir.online'
                ]
            ],
            [
                'title' => 'SQSystemca V2',
                'period' => 'Agosto 10, 2025 - Noviembre 1, 2025',
                'description' => 'API para sistema de laboratorios que comparte el valor del BCV y otras funciones.',
                'long_description' => 'Aplicación backend que proporciona una API RESTful para sistemas de laboratorios. Incluye funcionalidades como obtención del valor del dólar BCV, gestión de datos y servicios compartidos para múltiples aplicaciones.',
                'technologies' => ['Laravel 12', 'Jetstream', 'Livewire', 'Tailwind CSS', 'API REST', 'MySQL'],
                'category' => 'API Service',
                'status' => 'completed',
                'image' => asset('imagenes/qslabsistemas.png'),
                'features' => [
                    'API RESTful completa',
                    'Valor del dólar BCV en tiempo real',
                    'Sistema de autenticación API',
                    'Documentación de endpoints'
                ],
                'links' => [
                    'github' => 'https://github.com/kaizerenrique/SQSystemcaV2'
                ]
            ],
            [
                'title' => 'Consulta BCV',
                'period' => 'Julio 23, 2022 - Septiembre 26, 2023',
                'description' => 'Paquete PHP/Laravel para obtener el valor del dólar según el BCV mediante web scraping.',
                'long_description' => 'Desarrollo de un paquete de Composer reusable que permite a aplicaciones PHP y Laravel obtener el valor oficial del dólar según el Banco Central de Venezuela. Utiliza técnicas de web scraping para extraer la información directamente de la fuente oficial.',
                'technologies' => ['PHP', 'Composer Package', 'Web Scraping', 'Laravel Package'],
                'category' => 'PHP Package',
                'status' => 'completed',
                'image' => asset('imagenes/paquete.png'),
                'features' => [
                    'Paquete instalable via Composer',
                    'Web scraping del BCV oficial',
                    'Fácil integración en Laravel',
                    'Múltiples formatos de retorno'
                ],
                'links' => [
                    'github' => 'https://github.com/kaizerenrique/Consultabcv'
                ]
            ],
            [
                'title' => 'Cédula Venezuela',
                'period' => 'Julio 22, 2022 - Noviembre 9, 2022',
                'description' => 'Paquete PHP para obtener datos de ciudadanos venezolanos mediante cédula y fecha de nacimiento.',
                'long_description' => 'Paquete de Composer que permite consultar información de ciudadanos venezolanos mediante su número de cédula y fecha de nacimiento. Verifica si la persona cotiza en el seguro social o es pensionado, proporcionando una herramienta útil para validaciones.',
                'technologies' => ['PHP', 'Composer Package', 'Web Scraping', 'Laravel Package'],
                'category' => 'PHP Package',
                'status' => 'completed',
                'image' => asset('imagenes/paquete.png'),
                'features' => [
                    'Validación de cédulas venezolanas',
                    'Consulta de estado seguro social',
                    'Verificación de pensionados',
                    'Fácil implementación'
                ],
                'links' => [
                    'github' => 'https://github.com/kaizerenrique/cedulavenezuela'
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.projects-showcase');
    }
}
