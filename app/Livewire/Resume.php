<?php

namespace App\Livewire;

use Livewire\Attributes\{Layout, Computed, On};
use Livewire\Component;

class Resume extends Component
{
    public $lang = 'en';
    public $translations = [];

    #[Computed]
    public function title()
    {
        return $this->translations[$this->lang]['title'] ?? '';
    }

    #[Computed]
    public function metaDescription()
    {
        return $this->translations[$this->lang]['meta_description'] ?? '';
    }

    #[On('toggleLanguage')]
    public function mount()
    {
        $this->lang = session('lang') ?? 'en';

        $this->translations = [
            'en' => [
                'title' => 'Resume • Bruno Rossani',
                'description' => 'My resume, showcasing my skills and experience as a software engineer.',
                'header' => [
                    'bio' => 'Full Stack Software Engineer with over 2 years of experience, primarily focused on backend development. Specializing in PHP, Laravel, and creating reliable server-side solutions. I develop web applications that prioritize performance, security, and maintainability. Currently pursuing a Computer Science degree at UTEC.'
                ],
                'work' => [
                    'title' => 'Work experience',
                    'jobs' => [
                        [
                            'position' => 'Full Stack Software Engineer - Freelance',
                            'years' => 'Sep 2023 - Present',
                            'skills' => ['PHP', 'Laravel', 'Web Development'],
                            'responsibilities' => [
                                'Built and maintained scalable web applications using PHP, Laravel, and JavaScript, ensuring long-term performance and maintainability while following best development practices.',
                                'Optimized code structure and database queries, reducing load times by 30% through efficient caching strategies, resulting in improved system performance and user experience.',
                                'Enhanced application security by integrating authentication systems and access control, ensuring compliance with data security best practices and minimizing vulnerabilities.',
                                'Developed customized web solutions for 3 key clients, enhancing internal process efficiency by 40%, which resulted in improved workflow automation and streamlined operations.'
                            ]
                        ],
                        [
                            'position' => 'Sales and Operations Lead - eDrinks',
                            'years' => 'Mar 2023 - Present',
                            'skills' => ['Sales', 'Operations', 'Customer Service'],
                            'responsibilities' => [
                                "Oversaw daily store operations, ensuring seamless workflow and high-quality customer service, leading to significant improvements in response times and overall efficiency.",
                                'Managed key supplier relationships and optimized inventory logistics, reducing stockouts by 35%, improving restocking efficiency, and maintaining optimal product levels.',
                                'Coordinated cross-functional team efforts to ensure smooth daily operations, implementing improvements that boosted operational efficiency and team performance.',
                                'Increased sales by 25% by optimizing sales processes and personalizing the shopping experience, leading to higher customer satisfaction and brand loyalty.'
                            ]
                        ],
                    ]
                ],
                'education' => [
                    'title' => 'Education',
                    'careers' => [
                        [
                            'degree' => 'Computer Science Degree - UTEC',
                            'years' => 'Mar 2025 - Present',
                            'description' => 'Currently studying IT Technician at Higher University of Tecnhology, focusing on software development, system architecture, and database management.'
                        ],
                        [
                            'degree' => 'Musical Performance - Universidad de la República',
                            'years' => 'Mar 2019 - Nov 2024',
                            'description' => 'Studied applied musical analysis and instrumental performance, developing advanced technical skills and a deep understanding of music theory.'
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
                        'Team collaboration',
                        'Communication',
                        'Detail-oriented',
                        'Laravel',
                        'PHP',
                        'JavaScript',
                        'HTML',
                        'CSS',
                        'Tailwind',
                        'Alpine.js',
                        'MySQL',
                        'SQLite',
                        'Docker',
                        'Github',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'LLMs',
                        'WebSockets',
                        'Redis',
                        'SCRUM / Kanban',
                        'AI',
                        'Backend',
                        'Advanced English',
                        'Native Spanish',
                    ]
                ]
            ],
            'es' => [
                'title' => 'CV • Bruno Rossani',
                'description' => 'Mi currículum, mostrando mis habilidades y experiencia como ingeniero de software.',
                'header' => [
                    'bio' => 'Ingeniero de Software Full Stack con más de 2 años de experiencia, enfocado en el desarrollo backend. Especializado en PHP, Laravel y soluciones seguras del lado del servidor. Creo aplicaciones web centradas en rendimiento, seguridad y mantenimiento. Actualmente estudio Ciencias de la Computación en UTEC.'
                ],
                'work' => [
                    'title' => 'Experiencia laboral',
                    'jobs' => [
                        [
                            'position' => 'Ingeniero de Software Full Stack - Freelance',
                            'years' => 'Sep 2023 - Presente',
                            'skills' => ['PHP', 'Laravel', 'Desarrollo Web'],
                            'responsibilities' => [
                                'Desarrollé soluciones web personalizadas para 3 clientes clave, mejorando la eficiencia de los procesos internos en un 40%, resultando en una mejor automatización y operaciones ágiles.',
                                'Optimicé la estructura del código y las consultas a la base de datos, reduciendo los tiempos de carga en un 30% mediante estrategias de caché, mejorando el rendimiento del sistema.',
                                'Desarrollé y mantuve aplicaciones web con PHP, Laravel y JavaScript, asegurando rendimiento a largo plazo y fácil mantenimiento, siguiendo mejores prácticas de desarrollo.',
                                'Mejoré la seguridad de la aplicación integrando sistemas de autenticación y control de acceso, garantizando el cumplimiento de las mejores prácticas de seguridad de datos.'
                            ]
                        ],
                        [
                            'position' => 'Líder de Ventas y Operaciones - eDrinks',
                            'years' => 'Mar 2023 - Presente',
                            'skills' => ['Ventas', 'Operaciones', 'Atención al Cliente'],
                            'responsibilities' => [
                                'Coordiné los esfuerzos de un equipo multifuncional para asegurar la operación diaria fluida, implementando mejoras que aumentaron la eficiencia operativa y el rendimiento del equipo.',
                                'Supervisé operaciones diarias de la tienda, asegurando flujo de trabajo continuo y servicio al cliente de alta calidad, mejorando tiempos de respuesta y aumentando la optimización.',
                                'Aumenté las ventas en un 25% optimizando procesos de ventas y personalizando la experiencia de compra, lo que incrementó la satisfacción del cliente y mejoró la lealtad a la marca.',
                                'Gestioné relaciones clave con proveedores y optimicé la logística de inventarios, reduciendo las faltas de stock en un 35%, mejorando la eficiencia del reabastecimiento.'
                            ]
                        ],
                    ]
                ],
                'education' => [
                    'title' => 'Educación',
                    'careers' => [
                        [
                            'degree' => 'Tecnólogo Superior en Ciencias de la Computación - UTEC',
                            'years' => 'Mar 2025 - Presente',
                            'description' => 'Actualmente estudiando Técnico en Informática en la Universidad Superior de Tecnología, con enfoque en desarrollo de software, arquitectura de sistemas y gestión de bases de datos.'
                        ],
                        [
                            'degree' => 'Interpretación Musical - Universidad de la República',
                            'years' => 'Mar 2019 - Nov 2024',
                            'description' => 'Estudios en análisis musical aplicado e interpretación instrumental, desarrollando habilidades técnicas avanzadas y un profundo conocimiento de la teoría musical.'
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
                            'description' => 'Página para evento con PayPal, entradas virtuales y verificación por correo.',
                            'technologies' => ['Proyecto personal', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp',
                            'is_active' => false
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Habilidades',
                    'name' => [
                        'Colaboración en equipo',
                        'Comunicación',
                        'Atención al detalle',
                        'Laravel',
                        'PHP',
                        'JavaScript',
                        'HTML',
                        'CSS',
                        'Tailwind',
                        'Alpine.js',
                        'MySQL',
                        'SQLite',
                        'Docker',
                        'Agile',
                        'Github',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'LLMs',
                        'WebSockets',
                        'Redis',
                        'SCRUM / Kanban',
                        'AI',
                        'Backend',
                        'Inglés avanzado',
                        'Español nativo',
                    ]
                ]
            ],
        ];
    }

    #[Layout('layouts.app')]
    public function render()
    {
        return view('livewire.resume');
    }
}
