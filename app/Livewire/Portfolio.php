<?php

namespace App\Livewire;

use Livewire\Component;

class Portfolio extends Component
{
    protected $listeners = ['toggleLanguage'];

    public $lang = 'en';

    public $translations = [];

    public function toggleLanguage()
    {
        $this->lang = $this->lang === 'en' ? 'es' : 'en';
        session(['lang' => $this->lang]);
    }

    public function mount()
    {
        $this->lang = session('lang', 'en');

        $this->translations = [
            'en' => [
                'header' => [
                    'heading' => 'Things I\'ve made trying to leave a mark <br class="hidden md:flex">in the digital world',
                    'subheading' => 'A list of projects I\'ve worked on and I\'m working on.'
                ],
                'projects' => [
                    // [
                    //     'title' => 'Wevelopers',
                    //     'description' => 'Interactive web development learning platform for Spanish speakers.',
                    //     'tags' => ['Side Project', 'PHP', 'JavaScript', 'Learning Platform'],
                    //     'logo' => '<flux:icon.wevelopers class="size-10 no-print" />',
                    //     'link_name' => 'github.com/elkiki99/wevelopers',
                    //     'link' => 'https://github.com/elkiki99/wevelopers',
                    //     'status' => 'In progress'
                    // ],
                    [
                        'title' => 'Practizly',
                        'description' => 'Struggling to study? Instantly turn any text into a concise summary and quiz for smarter exam prep.',
                        'tags' => ['Side project', 'OpenAI', 'Academic planning', 'Exam preparation'],
                        'logo' => '<flux:icon.academic-cap class="size-8 no-print" />',
                        'link_name' => 'github.com/elkiki99/practizly',
                        'link' => 'https://github.com/elkiki99/practizly',
                        'status' => 'In progress'
                    ],
                    [
                        'title' => 'Digizen',
                        'description' => 'Digital agency template using FluxUI Livewire Components.',
                        'tags' => ['Side project', 'Blade', 'PHP', 'Digital agency'],
                        'logo' => '<flux:icon.digizen class="size-10 no-print" />',
                        'link_name' => 'digizen.fly.dev',
                        'link' => 'https://digizen.fly.dev/',
                        'status' => ''
                    ],
                    [
                        'title' => 'Flux UI Starter Kit',
                        'description' => 'Laravel starter kit with admin/user dashboards and Livewire.',
                        'tags' => ['Side project', 'Flux UI', 'Livewire components', 'Starter kit'],
                        'logo' => '<flux:icon.flux class="size-10 no-print" />',
                        'link_name' => 'flux-volt-starter-kit.fly.dev',
                        'link' => 'https://flux-volt-starter-kit.fly.dev/',
                        'status' => ''
                    ],
                    [
                        'title' => 'Balo Loba',
                        'description' => 'Photography portfolio for an independent photographer brand.',
                        'tags' => ['Freelance job', 'Laravel', 'Admin panel', 'Mercadopago'],
                        'logo' => '<flux:icon.baloloba class="size-8 no-print" />',
                        'link_name' => 'github.com/elkiki99/baloloba',
                        'link' => 'https://github.com/elkiki99/baloloba',
                        'status' => ''
                    ],
                    [
                        'title' => 'Laraflix',
                        'description' => 'Netflix-inspired movie portal using TALL Stack and TMDB API.',
                        'tags' => ['Side project', 'Laravel', 'APIs', 'TALL Stack'],
                        'logo' => '<flux:icon.laraflix class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/laraflix',
                        'link' => 'https://github.com/elkiki99/laraflix',
                        'status' => ''
                    ],
                    [
                        'title' => 'Chat App',
                        'description' => 'Web-inspired chat app built with Laravel and Reverb.',
                        'tags' => ['Side project', 'Alpine.js', 'Websockets', 'Chat application'],
                        'logo' => '<flux:icon.chat-app class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/chat',
                        'link' => 'https://github.com/elkiki99/Chat',
                        'status' => ''
                    ],
                    [
                        'title' => 'Jobs',
                        'description' => 'Job portal with CV management, job posts, and company profiles.',
                        'tags' => ['Side project', 'Laravel', 'Livewire', 'Job board'],
                        'logo' => '<flux:icon.jobs class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/jobs',
                        'link' => 'https://github.com/elkiki99/jobs',
                        'status' => ''
                    ],
                    [
                        'title' => 'The Edifice Gazette',
                        'description' => 'Laravel blog template with content management and user roles.',
                        'tags' => ['Side project', 'TailwindCSS', 'Stripe integration', 'CMS'],
                        'logo' => '<flux:icon.the-edifice-gazette class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/The-Edifice-Gazette',
                        'link' => 'https://github.com/elkiki99/The-Edifice-Gazette',
                        'status' => ''
                    ],
                    [
                        'title' => 'DevWebCamp',
                        'description' => 'Event management site with PayPal, virtual tickets, and email verification.',
                        'tags' => ['Side project', 'CSS', 'Javascript', 'Event website'],
                        'logo' => '<flux:icon.devwebcamp class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/devwebcamp',
                        'link' => 'https://github.com/elkiki99/devwebcamp',
                        'status' => ''
                    ]
                ]
            ],
            'es' => [
                'header' => [
                    'heading' => 'Cosas que he hecho intentando dejar una marca <br class="hidden md:flex">en el mundo digital',
                    'subheading' => 'Lista de proyectos en los que he trabajado y estoy trabajando.'
                ],
                'projects' => [
                    // [
                    //     'title' => 'Wevelopers',
                    //     'description' => 'Plataforma interactiva de aprendizaje de desarrollo web para hispanohablantes.',
                    //     'tags' => ['Proyecto personal', 'PHP', 'JavaScript', 'Plataforma de aprendizaje'],
                    //     'logo' => '<flux:icon.wevelopers class="size-10 no-print" />',
                    //     'link_name' => 'github.com/elkiki99/wevelopers',
                    //     'link' => 'https://github.com/elkiki99/wevelopers',
                    //     'status' => 'En progreso'
                    // ],
                    [
                        'title' => 'Practizly',
                        'description' => '¿Te está costando estudiar? Convierte cualquier texto en pruebas con IA para aprobar tu próximo examen.',
                        'tags' => ['Proyecto personal', 'OpenAI', 'Planificación académica', 'Preparación para exámenes'],
                        'logo' => '<flux:icon.academic-cap class="size-8 no-print" />',
                        'link_name' => 'github.com/elkiki99/practizly',
                        'link' => 'https://github.com/elkiki99/practizly',
                        'status' => 'En progreso'
                    ],
                    [
                        'title' => 'Digizen',
                        'description' => 'Plantilla de agencia digital usando Componentes FluxUI Livewire.',
                        'tags' => ['Proyecto personal', 'Blade', 'PHP', 'Agencia digital'],
                        'logo' => '<flux:icon.digizen class="size-10 no-print" />',
                        'link_name' => 'digizen.fly.dev',
                        'link' => 'https://digizen.fly.dev/',
                        'status' => ''
                    ],
                    [
                        'title' => 'Flux UI Starter Kit',
                        'description' => 'Kit de inicio Laravel con paneles de administración/usuarios y Livewire.',
                        'tags' => ['Proyecto personal', 'Flux UI', 'Componentes Livewire', 'Kit de inicio'],
                        'logo' => '<flux:icon.flux class="size-10 no-print" />',
                        'link_name' => 'flux-volt-starter-kit.fly.dev',
                        'link' => 'https://flux-volt-starter-kit.fly.dev/',
                        'status' => ''
                    ],
                    [
                        'title' => 'Balo Loba',
                        'description' => 'Portafolio de fotografía para una marca de fotógrafo independiente.',
                        'tags' => ['Trabajo freelance', 'Laravel', 'Panel de administración', 'Mercadopago'],
                        'logo' => '<flux:icon.baloloba class="size-8 no-print" />',
                        'link_name' => 'github.com/elkiki99/baloloba',
                        'link' => 'https://github.com/elkiki99/baloloba',
                        'status' => ''
                    ],
                    [
                        'title' => 'Laraflix',
                        'description' => 'Portal de películas inspirado en Netflix usando TALL Stack y TMDB API.',
                        'tags' => ['Proyecto personal', 'Laravel', 'APIs', 'TALL Stack'],
                        'logo' => '<flux:icon.laraflix class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/laraflix',
                        'link' => 'https://github.com/elkiki99/laraflix',
                        'status' => ''
                    ],
                    [
                        'title' => 'Chat App',
                        'description' => 'Aplicación de chat inspirada en la web construida con Laravel y Reverb.',
                        'tags' => ['Proyecto personal', 'Alpine.js', 'Websockets', 'Aplicación de chat'],
                        'logo' => '<flux:icon.chat-app class="size-10 no-print" />',
                        'link_name' => 'github.com/elkiki99/chat',
                        'link' => 'https://github.com/elkiki99/Chat',
                        'status' => ''
                    ],
                    [
                        'title' => 'Jobs',
                        'description' => 'Portal de empleo con gestión de CV, ofertas de trabajo y perfiles de empresas.',
                        'tags' => ['Proyecto personal', 'Laravel', 'Livewire', 'Bolsa de trabajo'],
                        'link_name' => 'github.com/elkiki99/jobs',
                        'link' => 'https://github.com/elkiki99/jobs',
                        'logo' => '<flux:icon.jobs class="size-10 no-print" />',
                        'status' => ''
                    ],
                    [
                        'title' => 'The Edifice Gazette',
                        'description' => 'Plantilla de blog en Laravel con gestión de contenido y roles de usuario.',
                        'tags' => ['Proyecto personal', 'TailwindCSS', 'Integración con Stripe', 'CMS'],
                        'link_name' => 'github.com/elkiki99/The-Edifice-Gazette',
                        'link' => 'https://github.com/elkiki99/The-Edifice-Gazette',
                        'logo' => '<flux:icon.the-edifice-gazette class="size-10 no-print" />',
                        'status' => ''
                    ],
                    [
                        'title' => 'DevWebCamp',
                        'description' => 'Sitio de gestión de eventos con PayPal, boletos virtuales y verificación por correo.',
                        'tags' => ['Proyecto personal', 'CSS', 'Javascript', 'Sitio de eventos'],
                        'link_name' => 'github.com/elkiki99/devwebcamp',
                        'link' => 'https://github.com/elkiki99/devwebcamp',
                        'logo' => '<flux:icon.devwebcamp class="size-10 no-print" />',
                        'status' => ''
                    ]
                ]
            ],
        ];
    }

    public function render()
    {
        return view('livewire.portfolio');
    }
}
