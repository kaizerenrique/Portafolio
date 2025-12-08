<?php

namespace App\Livewire;

use Livewire\Component;

class ExperienceTimeline extends Component
{
    public $experiences = [];

    public function mount()
    {
        $this->experiences = [
            [
                'period' => 'Oct 2025 - Presente',
                'title' => 'Gremio Linhir',
                'position' => 'Desarrollador Backend',
                'achievements' => [
                    'Desarrollo aplicación web para el gremio Linhir',
                    'Consumo de APIs para estadísticas del juego',
                    'API RESTful para servidor de discord',
                    'Bot de Discord'
                ],
                'icon' => '🎯',
                'color' => 'primary',
                'technologies' => ['PHP', 'Laravel', 'APIs', 'Discord API']
            ],
            [
                'period' => 'Feb 2022 - Oct 2025',
                'title' => 'QSLAB SISTEMAS',
                'position' => 'Desarrollador Web',
                'achievements' => [
                    'Desarrollo de una aplicación web para integrar mas de 50 laboratorios clínicos con el sistema central',
                    'Creación de una API RESTful que procesaba mas de 5.000 solicitudes mensuales',
                    'Implementación de portal de resultados para pacientes',
                    'Despliegues y mantenimiento en servidores Linux'
                ],
                'icon' => '💼',
                'color' => 'secondary',
                'technologies' => ['PHP', 'Laravel', 'Linux', 'MySQL', 'APIs']
            ],
            [
                'period' => 'May 2024 - Sep 2024',
                'title' => 'ODOS Soluciones',
                'position' => 'Backend Developer',
                'achievements' => [
                    'Configurar los Servidores y desplegar ODOS para producción',
                    'Configuración de dominios y despliegue de la aplicación',
                    'Optimización para el despliegue rápido y soporte'
                ],
                'icon' => '🚀',
                'color' => 'accent',
                'technologies' => ['Linux', 'Servidores', 'Despliegue', 'Optimización']
            ],
            [
                'period' => 'Feb 2016 - Nov 2019',
                'title' => 'Retail Pos Systems Tec, C.A',
                'position' => 'Técnico de Sistemas',
                'achievements' => [
                    'Soporte y asistencia técnica',
                    'Mantenimiento de las aplicaciones de facturación que provee la empresa',
                    'Entrenamiento y adiestramiento'
                ],
                'icon' => '🔧',
                'color' => 'info',
                'technologies' => ['Soporte Técnico', 'Mantenimiento', 'Sistemas']
            ]
        ];
    }
    
    public function render()
    {
        return view('livewire.experience-timeline');
    }
}
