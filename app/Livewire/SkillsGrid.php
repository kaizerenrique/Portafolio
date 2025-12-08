<?php

namespace App\Livewire;

use Livewire\Component;

class SkillsGrid extends Component
{
    public $skills;

    public function mount()
    {
        $this->skills = [
            'backend' => [
                'title' => '🔧 BACKEND',
                'icon' => '💻',
                'color' => 'primary',
                'skills' => [
                    ['name' => 'PHP', 'level' => 5, 'percentage' => 100],
                    ['name' => 'Laravel', 'level' => 5, 'percentage' => 100],
                    ['name' => 'Java', 'level' => 3, 'percentage' => 60],
                    ['name' => 'APIs REST', 'level' => 5, 'percentage' => 100],
                ]
            ],
            'frontend' => [
                'title' => '🎨 FRONTEND',
                'icon' => '🎨',
                'color' => 'secondary',
                'skills' => [
                    ['name' => 'HTML5', 'level' => 4, 'percentage' => 80],
                    ['name' => 'Bootstrap', 'level' => 4, 'percentage' => 80],
                    ['name' => 'Tailwind CSS', 'level' => 3, 'percentage' => 60],
                ]
            ],
            'devops' => [
                'title' => '⚙️ DEVOPS & HERRAMIENTAS',
                'icon' => '🚀',
                'color' => 'accent',
                'skills' => [
                    ['name' => 'Linux', 'level' => 4, 'percentage' => 80],
                    ['name' => 'Apache/Nginx', 'level' => 4, 'percentage' => 80],
                    ['name' => 'Git', 'level' => 4, 'percentage' => 80],
                    ['name' => 'MySQL', 'level' => 4, 'percentage' => 80],
                ]
            ],
            'soft' => [
                'title' => '💪 HABILIDADES BLANDAS',
                'icon' => '🌟',
                'color' => 'info',
                'skills' => [
                    ['name' => 'Resolución problemas'],
                    ['name' => 'Gestión proyectos'],
                    ['name' => 'Aprendizaje rápido'],
                    ['name' => 'Trabajo en equipo'],
                ]
            ]
        ];
    }
    
    public function render()
    {
        return view('livewire.skills-grid');
    }
}
