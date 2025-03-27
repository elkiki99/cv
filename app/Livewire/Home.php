<?php

namespace App\Livewire;

use Livewire\Component;

class Home extends Component
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
                    'heading' => 'Bruno Rossani',
                    'subheading' => 'I love creating stuff! I\'m a devoted full-stack web developer, cooking enthusiast, music lover and a lifelong learner. <br class="hidden md:flex">You\'ll find me somewhere in between those lines. I find my passion in the creation of new things, <br class="hidden md:flex">it\'s the driving force that keeps me going. If you\'d like, you can',
                    'mail' => 'send me an email.'
                ],
                'stack' => [
                    'heading' => 'My stack',
                    'subheading' => 'Technologies I use on a daily basis.',
                    'technologies' => [
                        [
                            'name' => 'Laravel',
                            'info' => 'Laravel is the backbone of my web development work. Its expressive syntax, powerful features, and built-in tools allow me to build secure, scalable applications with ease.',
                            'logo' => '<flux:icon.laravel class="size-6 no-print" />',
                        ],
                        [
                            'name' => 'Tailwind',
                            'info' => 'I choose Tailwind CSS because it allows me to build clean, modern designs quickly without writing extensive custom styles. Its utility-first approach keeps my codebase scalable and maintainable.',
                            'logo' => '<flux:icon.tailwind class="size-6 no-print" />',
                        ],
                        [
                            'name' => 'Alpine.js',
                            'info' => 'Alpine.js is my go-to for adding interactivity to projects without the complexity of larger frameworks. It\'s lightweight, easy to use, and integrates seamlessly with my Laravel + Livewire stack.',
                            'logo' => '<flux:icon.alpine class="size-6 no-print" />',
                        ],
                        [
                            'name' => 'Livewire',
                            'info' => 'Livewire enables me to build dynamic, real-time applications in Laravel without writing a single line of JavaScript. It\'s perfect for keeping development streamlined while delivering great UX.',
                            'logo' => '<flux:icon.livewire class="size-6 no-print" />',
                        ],
                        [
                            'name' => 'SQLite',
                            'info' => 'I prefer SQLite for lightweight projects and local development because it\'s simple, efficient, and requires no server setup. It\'s ideal for prototyping and small applications.',
                            'logo' => '<flux:icon.sqlite class="size-6 no-print" />',
                        ],
                        [
                            'name' => 'Fly.io',
                            'info' => 'I use Fly.io because it makes deploying full-stack applications effortless. Its speed, global distribution, and seamless integration with Laravel make it a great choice for scalable deployments.',
                            'logo' => '<flux:icon.fly class="size-6 no-print" />',
                        ]
                    ]
                ],
                'projects' => [
                    'heading' => 'Latest projects',
                    'subheading' => 'Some of the projects I\'m proud of.',
                    'cards' => [
                        // [
                        //     'name' => 'Wevelopers',
                        //     'description' => 'Wevelopers is a web development learning platform designed for Spanish speakers. It offers a new way to learn interactively through dynamic courses and active community participation.',
                        //     'link' => 'https://github.com/elkiki99/wevelopers'
                        // ],
                        [
                            'name' => 'Practizly',
                            'description' => 'An application that helps users plan their entire academic year, including subjects, deadlines, assignments, and practice sessions. It uses the OpenAI API to generate mock exams and quizzes for more efficient exam preparation.',
                            'link' => '#'
                        ],
                        [
                            'name' => 'Flux UI Starter Kit',
                            'description' => 'A powerful starter kit for building web applications with Laravel, requires a Flux UI
                            subscription. It includes pre-built user and admin dashboard, and dynamic real-time content powered by Livewire Volt.',
                            'link' => 'https://flux-volt-starter-kit.fly.dev/'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Photography portfolio for Balo Loba - independent photographer brand. It features an intuitive interface and a robust admin panel, making it ideal for managing projects, interacting with users, working with photoshoots and streamlining workflows.',
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ]
                    ]
                ]
            ],
            'es' => [
                'header' => [
                    'heading' => 'Bruno Rossani',
                    'subheading' => 'Apasionado por la innovación y la creación. Soy desarrollador full-stack, cocinero amateur, amante de la música y <br class="hidden md:flex">siempre en busca de nuevos retos. Me motiva el desafío de construir soluciones 
                    eficientes y creativas, <br class="hidden md:flex">es la pasión que me impulsa a seguir desarrollando. Si querés, podes',
                    'mail' => 'enviarme un correo.'
                ],
                'stack' => [
                    'heading' => 'Mi stack',
                    'subheading' => 'Tecnologías que utilizo a diario.',
                    'technologies' => [
                        [
                            'name' => 'Laravel',
                            'info' => 'Laravel es la columna vertebral de mi trabajo en desarrollo web. Su sintaxis expresiva, características poderosas y herramientas integradas me permiten crear aplicaciones seguras y escalables con facilidad.',
                            'logo' => '<flux:icon.laravel class="size-10 no-print" />',
                        ],
                        [
                            'name' => 'Tailwind',
                            'info' => 'Elijo Tailwind CSS porque me permite crear diseños limpios y modernos rápidamente sin escribir estilos personalizados extensos. Su enfoque de utilidad primero mantiene mi base de código escalable y mantenible.',
                            'logo' => '<flux:icon.tailwind class="size-10 no-print" />',
                        ],
                        [
                            'name' => 'Alpine.js',
                            'info' => 'Alpine.js es mi opción para agregar interactividad a los proyectos sin la complejidad de marcos más grandes. Es liviano, fácil de usar e integra perfectamente con mi stack de Laravel + Livewire.',
                            'logo' => '<flux:icon.alpine class="size-10 no-print" />',
                        ],
                        [
                            'name' => 'Livewire',
                            'info' => 'Livewire me permite construir aplicaciones dinámicas y en tiempo real en Laravel sin escribir una sola línea de JavaScript. Es perfecto para mantener el desarrollo simplificado mientras se ofrece una gran experiencia de usuario.',
                            'logo' => '<flux:icon.livewire class="size-10 no-print" />',
                        ],
                        [
                            'name' => 'SQLite',
                            'info' => 'Prefiero SQLite para proyectos ligeros y desarrollo local porque es simple, eficiente y no requiere configuración de servidor. Es ideal para prototipos y aplicaciones pequeñas.',
                            'logo' => '<flux:icon.sqlite class="size-10 no-print" />',
                        ],
                        [
                            'name' => 'Fly.io',
                            'info' => 'Uso Fly.io porque hace que desplegar aplicaciones full-stack sea muy fácil. Su velocidad, distribución global e integración perfecta con Laravel lo convierten en una excelente opción para despliegues escalables.',
                            'logo' => '<flux:icon.fly class="size-10 no-print" />',
                        ]
                    ]
                ],
                'projects' => [
                    'heading' => 'Últimos proyectos',
                    'subheading' => 'Algunos de los proyectos que me enorgullecen.',
                    'cards' => [
                        // [
                        //     'name' => 'Wevelopers',
                        //     'description' => 'Wevelopers es una plataforma de aprendizaje de desarrollo web diseñada para hispanohablantes. Ofrece una nueva manera de aprender de forma interactiva a través de cursos dinámicos y participación activa de la comunidad.',
                        //     'link' => 'https://github.com/elkiki99/wevelopers'
                        // ],
                        [
                            'name' => 'Practizly',
                            'description' => 'Una aplicación que ayuda a los usuarios a planificar todo su año académico, incluyendo materias, plazos, tareas y prácticas. Utiliza openai API para crear exámenes de práctica y cuestionarios para una preparación más eficiente.',
                            'link' => '#'
                        ],
                        [
                            'name' => 'Flux UI Starter Kit',
                            'description' => 'Un potente kit de inicio para construir aplicaciones web con Laravel, que requiere una suscripción a Flux UI. Incluye paneles preconstruidos para usuarios y administradores, y contenido dinámico en tiempo real impulsado por Livewire Volt.',
                            'link' => 'https://flux-volt-starter-kit.fly.dev/'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Portafolio fotográfico para Balo Loba - marca de fotógrafo independiente. Cuenta con una interfaz intuitiva y un panel de administración robusto, lo que lo hace ideal para gestionar proyectos, interactuar con usuarios, trabajar con sesiones de fotos y optimizar flujos de trabajo.',
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ]
                    ]
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.home');
    }
}
