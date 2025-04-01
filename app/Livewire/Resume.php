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
                    'bio' => 'Full Stack Developer with 2+ years of experience, specializing in PHP, Laravel and Backend solutions. Passionate about building robust web applications that deliver great user experiences. Currently pursuing a Computer Science Degree at UTEC.'
                ],
                'about' => [
                    'title' => 'About',
                    'text' => "I'm a highly motivated Full Stack developer, focused on Backend development with PHP, Laravel, JavaScript, and Livewire. I design and build sophisticated web applications that deliver seamless user experiences. I'm committed to staying up to date with the latest technologies."
                ],
                'work' => [
                    'title' => 'Work experience',
                    'jobs' => [
                        [
                            'position' => 'Full Stack Developer - Freelance',
                            'years' => ' Sep 2023 - Present',
                            'skills' => ['PHP', 'Laravel', 'Web Development'],
                            'responsibilities' => [
                                'Optimized code structure and database queries, which improved system efficiency and reduced load times using caching strategies.',
                                'Enhanced application security, integrating authentication systems, access control, and secure data handling to comply with best practices.',
                                'Analyzed client needs, developing tailored web solutions that automate processes, improve user experience, and boost efficiency.'
                            ]
                        ],
                        [
                            'position' => 'Sales & Operations Lead - eDrinks',
                            'years' => 'Mar 2023 - Present',
                            'skills' => ['Sales', 'Operations', 'Customer Service'],
                            'responsibilities' => [
                                'Enhanced sales and customer service operations by optimizing processes and personalizing the shopping experience, thereby increasing satisfaction.',
                                'Managed supplier relationships and inventory logistics, ensuring efficient restocking, minimizing shortages, and optimizing stock levels.',
                                'Coordinated team efforts to ensure smooth daily operations, driving operational efficiency and improving overall team performance.'
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Education',
                    'careers' => [
                        [
                            'degree' => 'Computer Science Degree - UTEC',
                            'years' => 'Mar 2025 - Present',
                            'description' => 'Currently pursuing a Computer Science degree at UTEC, focusing on software development, system architecture, and database management.'
                        ],
                        [
                            'degree' => 'Musical Performance - Universidad de la República',
                            'years' => 'Mar 2019 - Nov 2024',
                            'description' => 'Studied applied musical analysis and instrumental performance, developed advanced technical skills and problem-solving abilities.'
                        ]
                    ]
                ],
                'side_projects' => [
                    'title' => 'Latest projects',
                    'projects' => [
                        [
                            'name' => 'Practizly',
                            'description' => 'An app that helps students plan their academic year and uses AI for exam preparation.',
                            'technologies' => ['Side project', 'OpenAI', 'Planning', 'Studies'],
                            'link' => 'https://practizly-main-hewydj.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Photography portfolio for an independent photographer brand.',
                            'technologies' => ['Freelance project', 'Laravel', 'Admin panel', 'MercadoPago'],
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
                    'name' => [
                        'Problem-solving',
                        'Team collaboration',
                        'Adaptability',
                        'Communication',
                        'Laravel',
                        'PHP',
                        'JavaScript',
                        'Tailwind',
                        'MySQL',
                        'SQLite',
                        'Github',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'English B2',
                        'Native spanish'
                    ]
                ]
            ],
            'es' => [
                'header' => [
                    'bio' => 'Desarrollador Full Stack con 2+ años de experiencia en PHP, Laravel y Backend. Apasionado por crear aplicaciones web robustas, con un gran enfoque en la experiencia del usuario. Estudiante de Tecnólogo Superior en Ciencias de la Computación en UTEC.',
                ],
                'about' => [
                    'title' => 'Sobre mi',
                    'text' => "Soy un desarrollador Full Stack altamente motivado, enfocado en el desarrollo Backend con PHP, Laravel, JavaScript y Livewire. Diseño y construyo aplicaciones web sofisticadas que ofrecen experiencias de usuario fluidas. Estoy comprometido con mantenerme actualizado con las últimas tecnologías."
                ],
                'work' => [
                    'title' => 'Experiencia laboral',
                    'jobs' => [
                        [
                            'position' => 'Desarrollador Full Stack - Freelance',
                            'years' => 'Sep 2023 - Presente',
                            'skills' => ['PHP', 'Laravel', 'Desarrollo Web'],
                            'responsibilities' => [
                                'Optimización de código y bases de datos, mejorando la eficiencia y reduciendo tiempos de carga mediante estrategias de almacenamiento en caché.',
                                'Fortalecimiento de la seguridad, integrando sistemas de autenticación, control de acceso y manejo seguro de datos para cumplir con las mejores prácticas.',
                                'Análisis de necesidades del cliente, desarrollando soluciones personalizadas que automatizan procesos, mejoran la experiencia y aumentan la eficiencia.'
                            ]
                        ],
                        [
                            'position' => 'Líder de Ventas y Operaciones - eDrinks',
                            'years' => 'Mar 2023 - Presente',
                            'skills' => ['Ventas', 'Atención al Cliente', 'Operaciones'],
                            'responsibilities' => [
                                'Mejoras en ventas y atención al cliente, optimizando procesos y personalizando la experiencia de compra para aumentar la satisfacción.',
                                'Gestión eficaz de proveedores e inventario, asegurando un reabastecimiento eficiente, minimizando faltantes y optimizando niveles de stock.',
                                'Coordiné los esfuerzos del equipo para garantizar el buen funcionamiento de las operaciones diarias, mejorando la eficiencia y el rendimiento general.'
                            ]
                        ]
                    ]
                ],
                'education' => [
                    'title' => 'Educación',
                    'careers' => [
                        [
                            'degree' => 'Tecnólogo Superior en Ciencias de la Computación - UTEC',
                            'years' => 'Mar 2025 - Presente',
                            'description' => 'Actualmente cursando la carrera de Tecnólogo Informático en UTEC, con enfoque en desarrollo de software, arquitectura de sistemas y gestión de bases de datos.'
                        ],
                        [
                            'degree' => 'Interpretación Musical - Universidad de la República',
                            'years' => 'Mar 2019 - 2024',
                            'description' => 'Estudios en análisis musical aplicado y ejecución instrumental, desarrollando habilidades técnicas avanzadas y capacidad de resolución de problemas.'
                        ]
                    ]
                ],
                'side_projects' => [
                    'title' => 'Últimos proyectos',
                    'projects' => [
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
                    'name' => [
                        'Resolución de problemas',
                        'Colaboración en equipo',
                        'Adaptabilidad',
                        'Comunicación',
                        'Laravel',
                        'PHP',
                        'JavaScript',
                        'Tailwind',
                        'MySQL',
                        'SQLite',
                        'Github',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'Inglés B2',
                        'Español nativo'
                    ]
                ]
            ],
        ];
    }

    public function render()
    {
        return view('livewire.resume');
    }
}
