<?php

namespace App\Livewire;

use Livewire\Component;

class Resume extends Component
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
                    'bio' => 'Software developer with 2+ years of experience, specializing in PHP, Laravel and back-end solutions. Passionate about building robust web applications that deliver great user experiences. Currently persuing a degree in IT Technologist at UTEC.'
                ],
                'about' => [
                    'title' => 'About',
                    'text'  => "I'm a highly motivated full-stack developer focused on back-end development with PHP, Laravel, JavaScript, and Livewire. I design and build sophisticated web applications that provide seamless user experiences. I'm committed to continuous learning and staying updated with the latest technologies."
                ],
                'work' => [
                    'title' => 'Work experience',
                    'jobs' => [
                        [
                            'position' => 'Freelance Developer',
                            'years' => '2023 - Present',
                            'skills' => ['PHP', 'Laravel', 'Web Development'],
                            'responsibilities' => [
                                'Developed and implemented custom websites and applications, including e-commerce stores, portfolios, and CRM systems.',
                                'Integrated secure payment gateways and user management systems to enhance experience and security on web platforms.',
                                'Optimized application performance and scalability through best practices in database management and code structure.',
                            ]
                        ],
                        [
                            'position' => 'Manager - eDrinks',
                            'years' => '2023 - Present',
                            'skills' => ['E-commerce', 'Retail', 'Operations'],
                            'responsibilities' => [
                                'Manage daily store operations, ensuring efficient workflows, accurate inventory control, and smooth sales processes.',
                                'Improve customer service by refining support protocols and response strategies to boost satisfaction and customer loyalty.',
                                'Collaborate with suppliers and logistics teams to streamline purchasing, ensuring timely deliveries and effective supply chain management.'
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Education',
                    'careers' => [
                        [
                            'degree' => 'UTEC IT Technologist',
                            'years' => '2025 - Present',
                            'description' => 'Currently pursuing an IT Technologist Degree at UTEC, focusing on software development, system architecture, and database management.'
                        ],
                        // [
                        //     'degree' => 'Laravel & PHP Developer',
                        //     'years' => '2023 - Present',
                        //     'description' => 'Specialized training in backend development with Laravel and PHP, including software architecture, best practices, and web application optimization.'
                        // ],
                        [
                            'degree' => 'Fine Arts Faculty of Udelar',
                            'years' => '2019 - 2024',
                            'description' => 'Studied applied musical analysis and instrumental performance, developed advanced technical skills and problem-solving abilities.'
                        ]
                    ]
                ],
                'side_projects' => [
                    'title' => 'Latest projects',
                    'projects' => [
                        // [
                        //     'name' => 'Wevelopers',
                        //     'description' => 'Interactive web development learning platform for Spanish speakers.',
                        //     'technologies' => ['Side project', 'PHP', 'JavaScript', 'Education'],
                        //     'link' => 'https://github.com/elkiki99/wevelopers'
                        // ],
                        [
                            'name' => 'Practizly',
                            'description' => 'App that helps students plan their academic year and uses AI for exam preparation.',
                            'technologies' => ['Side project', 'OpenAI', 'Planning', 'Studies'],
                            'link' => 'https://practizly-main-hewydj.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Photography portfolio for an independent photographer brand.',
                            'technologies' => ['Freelance job', 'Laravel', 'Admin panel', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba',
                            'is_active' => false
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Event management site with PayPal, virtual tickets, and email verification.',
                            'technologies' => ['Side project', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp',
                            'is_active' => false
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Skills',
                    'name' => ['Laravel', 'Livewire', 'Tailwind CSS', 'PHP', 'MySQL', 'UX/UI Design', 'Git', 'SEO', 'Javascript/Alpine.js', 'React', 'SQLite', 'AWS', 'Fly.io', 'Github', 'B2 English']
                ]
            ],
            'es' => [
                'header' => [
                    'bio' => 'Desarrollador de software con más de 2 años de experiencia, especializado en PHP, Laravel y soluciones back-end. Apasionado por construir aplicaciones web robustas que brinden excelentes experiencias de usuario. Actualmente cursando la carrera de Tecnólogo Informático en UTEC.'
                ],
                'about' => [
                    'title' => 'Sobre mi',
                    'text' => "Soy un desarrollador full-stack altamente motivado, enfocado en el desarrollo back-end con PHP, Laravel, JavaScript y Livewire. Diseño y construyo aplicaciones web sofisticadas que ofrecen experiencias de usuario fluidas. Estoy comprometido en mantenerme actualizado con las últimas tecnologías."
                ],
                'work' => [
                    'title' => 'Experiencia laboral',
                    'jobs' => [
                        [
                            'position' => 'Desarrollador Freelance',
                            'years' => '2023 - Presente',
                            'skills' => ['PHP', 'Laravel', 'Desarrollo Web'],
                            'responsibilities' => [
                                'Desarrollé e implementé sitios web y aplicaciones personalizadas, incluyendo tiendas e-commerce, portafolios y sistemas CRM.',
                                'Integré pasarelas de pago seguras y sistemas de gestión de usuarios para mejorar la experiencia y seguridad en plataformas web.',
                                'Optimicé el rendimiento y escalabilidad de aplicaciones mediante buenas prácticas en bases de datos y estructura del código.',
                            ]
                        ],
                        [
                            'position' => 'Gerente - eDrinks',
                            'years' => '2023 - Presente',
                            'skills' => ['E-commerce', 'Minorista', 'Operaciones'],
                            'responsibilities' => [
                                'Gestionar las operaciones diarias de la tienda, asegurando un flujo de trabajo eficiente, control de inventario y procesos de ventas claros.',
                                'Mejorar el servicio al cliente optimizando los procesos de soporte y respuesta para asegurar satisfacción y fidelidad.',
                                'Trabajar con proveedores y equipos logísticos para agilizar las compras y asegurar entregas puntuales y una buena gestión de la cadena de suministro.',
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Educación',
                    'careers' => [
                        [
                            'degree' => 'Carrera de Tecnólogo Informático - UTEC',
                            'years' => '2025 - Presente',
                            'description' => 'Actualmente cursando la carrera de Tecnólogo Informático en UTEC, con enfoque en desarrollo de software, arquitectura de sistemas y gestión de bases de datos.'
                        ],
                        // [
                        //     'degree' => 'Desarrollador Laravel & PHP',
                        //     'years' => '2023 - Presente',
                        //     'description' => 'Formación especializada en desarrollo backend con Laravel y PHP, incluyendo arquitectura de software, buenas prácticas y optimización de aplicaciones web.'
                        // ],
                        [
                            'degree' => 'Facultad de Bellas Artes - Udelar',
                            'years' => '2019 - 2024',
                            'description' => 'Estudios en análisis musical aplicado y ejecución instrumental, desarrollando habilidades técnicas avanzadas y capacidad de resolución de problemas.'
                        ]
                    ]
                ],
                'side_projects' => [
                    'title' => 'Últimos proyectos',
                    'projects' => [
                        // [
                        //     'name' => 'Wevelopers',
                        //     'description' => 'Plataforma interactiva de aprendizaje de desarrollo web para hispanohablantes.',
                        //     'technologies' => ['Proyecto personal', 'PHP', 'JavaScript', 'Educación'],
                        //     'link' => 'https://github.com/elkiki99/wevelopers'
                        // ],
                        [
                            'name' => 'Practizly',
                            'description' => 'App que ayuda a estudiantes a planificar su año académico y IA para prepararse para exámenes.',
                            'technologies' => ['Proyecto personal', 'OpenAI', 'Planificación', 'Estudios'],
                            'link' => 'https://practizly-main-hewydj.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Portafolio fotográfico para una marca de fotógrafo independiente.',
                            'technologies' => ['Trabajo freelance', 'Laravel', 'Admin panel', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba',
                            'is_active' => false
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Sitio de gestión de eventos con PayPal, boletos virtuales y verificación por correo electrónico.',
                            'technologies' => ['Proyecto personal', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp',
                            'is_active' => false
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Habilidades',
                    'name' => ['Laravel', 'Livewire', 'Tailwind CSS', 'PHP', 'MySQL', 'UX/UI Design', 'Git', 'SEO', 'Javascript/Alpine.js', 'React', 'SQLite', 'AWS', 'Fly.io', 'Github', 'B2 English']
                ]
            ],
        ];
    }

    public function render()
    {
        return view('livewire.resume');
    }
}
