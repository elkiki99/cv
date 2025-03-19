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
                    'bio' => 'Full-stack developer with 2+ years of experience, specializing in PHP, Laravel and back-end solutions. Passionate about building robust web applications that deliver great user experiences.'
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
                                'Engineered high-performance, scalable web solutions, optimizing operational workflows and user engagement.',
                                'Developed and integrated secure financial transaction systems, ensuring compliance with industry standards and best practices.',
                                'Optimized application architecture through advanced performance strategies, enhancing speed, scalability, and overall system efficiency.'
                            ]
                        ],
                        [
                            'position' => 'Manager - eDrinks',
                            'years' => '2024 - Present',
                            'skills' => ['E-commerce', 'Retail', 'Operations'],
                            'responsibilities' => [
                                'Supervise and optimize daily store operations, ensuring smooth workflow, accurate inventory control, and streamlined sales processes to maximize efficiency and profitability.',
                                'Lead customer service improvements, focusing on user experience and satisfaction by refining support protocols and response strategies to maintain high retention rates.',
                                'Coordinate with suppliers, logistics teams, and vendors to optimize procurement processes, ensuring timely deliveries and cost-effective supply chain management.'
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Education',
                    'careers' => [
                        // [
                        //     'degree' => 'UTEC IT Technologist',
                        //     'years' => '2025 - Present',
                        //     'description' => 'Currently pursuing a degree in IT at UTEC, focusing on software development, system architecture, and database management.'
                        // ],
                        [
                            'degree' => 'Laravel & PHP Developer',
                            'years' => '2023 - Present',
                            'description' => 'Specialized training in backend development with Laravel and PHP, including software architecture, best practices, and web application optimization.'
                        ],
                        [
                            'degree' => 'Fine Arts Faculty of Udelar',
                            'years' => '2019 - 2023',
                            'description' => 'Studied applied musical analysis and instrumental performance, developed advanced technical skills and problem-solving abilities.'
                        ]
                    ]
                ],
                'side_projects' => [
                    'title' => 'Last projects',
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
                            'link' => 'https://github.com/elkiki99/practizly'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Photography portfolio for an independent photographer brand.',
                            'technologies' => ['Freelance job', 'Laravel', 'Admin panel', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Event management site with PayPal, virtual tickets, and email verification.',
                            'technologies' => ['Side project', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp'
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Skills',
                    'name' => ['Laravel', 'Livewire', 'Tailwind CSS', 'PHP', 'MySQL', 'UX/UI Design', 'Git', 'SEO', 'Javascript/Alpine.js', 'React', 'SQLite', 'AWS', 'Fly.io', 'Github']
                ]
            ],
            'es' => [
                'header' => [
                    'bio' => 'Desarrollador full-stack con más de 2 años de experiencia, especializado en PHP, Laravel y soluciones back-end. Apasionado por construir aplicaciones web robustas que brinden excelentes experiencias de usuario.'
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
                                'Diseñé e implementé soluciones web escalables y de alto rendimiento, optimizando flujos operativos y la interacción con los usuarios.',
                                'Desarrollé e integré sistemas de transacciones financieras seguras, garantizando el cumplimiento de los estándares de la industria.',
                                'Optimicé la arquitectura de aplicaciones mediante estrategias avanzadas de rendimiento, mejorando la velocidad, escalabilidad y eficiencia del sistema.'
                            ]
                        ],
                        [
                            'position' => 'Gerente - eDrinks',
                            'years' => '2024 - Presente',
                            'skills' => ['E-commerce', 'Minorista', 'Operaciones'],
                            'responsibilities' => [
                                'Supervisión y optimización de las operaciones diarias de la tienda, asegurando un flujo de trabajo eficiente, control de inventario preciso y procesos de ventas optimizados.',
                                'Mejora del servicio al cliente, enfocándose en la experiencia del usuario y la satisfacción mediante estrategias de respuesta para mantener altas tasas de retención.',
                                'Coordinación con proveedores, equipos logísticos y vendedores para optimizar los procesos de adquisición, asegurando entregas puntuales y una gestión de cadena de suministro rentable.'
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Educación',
                    'careers' => [
                        // [
                        //     'degree' => 'Carrera de Tecnólogo Informático - UTEC',
                        //     'years' => '2025 - Presente',
                        //     'description' => 'Actualmente cursando una carrera informática en UTEC, con enfoque en desarrollo de software, arquitectura de sistemas y gestión de bases de datos.'
                        // ],
                        [
                            'degree' => 'Desarrollador Laravel & PHP',
                            'years' => '2023 - Presente',
                            'description' => 'Formación especializada en desarrollo backend con Laravel y PHP, incluyendo arquitectura de software, buenas prácticas y optimización de aplicaciones web.'
                        ],
                        [
                            'degree' => 'Facultad de Bellas Artes - Udelar',
                            'years' => '2019 - 2023',
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
                            'link' => 'https://github.com/elkiki99/practizly'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Portafolio fotográfico para una marca de fotógrafo independiente.',
                            'technologies' => ['Trabajo freelance', 'Laravel', 'Admin panel', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Sitio de gestión de eventos con PayPal, boletos virtuales y verificación por correo electrónico.',
                            'technologies' => ['Proyecto personal', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp'
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Habilidades',
                    'name' => ['Laravel', 'Livewire', 'Tailwind CSS', 'PHP', 'MySQL', 'UX/UI Design', 'Git', 'SEO', 'Javascript/Alpine.js', 'React', 'SQLite', 'AWS', 'Fly.io', 'Github']
                ]
            ],
        ];
    }

    public function render()
    {
        return view('livewire.resume');
    }
}
