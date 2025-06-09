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
                'meta_description' => 'My resume, showcasing my skills and experience as a software engineer.',
                'header' => [
                    'name' => 'Bruno Rossani',
                    'title' => 'Full Stack Software Engineer',
                    'bio' => 'Full Stack Software Engineer with over 2 years of experience, primarily focused on backend development. Specializing in PHP, Laravel, and creating reliable server-side solutions. I develop web applications that prioritize performance, security, and maintainability. Currently pursuing a Computer Science degree at UTEC.',
                    'mail' => 'brossani23@gmail.com',
                    'phone' => '+59891845585',
                    'linkedin' => 'https://www.linkedin.com/in/brunorossani/',
                    'github' => 'https://github.com/elkiki99',
                    'website' => 'https://bruno-rossani.fly.dev/',
                    'location' => 'Isla de Flores, Montevideo, Uruguay',
                    'location_link' => 'https://www.google.com/maps/place/Palermo,+11200+Montevideo,+Montevideo+Department/data=!4m2!3m1!1s0x959f81b7db8c0371:0xe22fe40f04c80b07?sa=X&ved=1t:242&ictx=111'
                ],
                'education' => [
                    'title' => 'Education',
                    'careers' => [
                        [
                            'degree' => 'Computer Science Degree - UTEC',
                            'years' => 'Mar 2025 - Present',
                            'description' => 'Studying Software Engineering with a focus on architecture, efficient algorithms, and robust databases to build scalable, high-impact solutions to real-world problems.',
                        ],
                        // [
                        //     'degree' => 'Musical Performance - UdelaR',
                        //     'years' => 'Mar 2019 - Nov 2024',
                        //     'description' => 'Trained in musical analysis, technique, and ensemble work—enhancing discipline and creative thinking.'
                        // ]
                    ]
                ],
                'work' => [
                    'title' => 'Experience',
                    'jobs' => [
                        [
                            'position' => 'Full Stack Software Engineer - Freelance',
                            'years' => 'Sep 2023 - Present',
                            'skills' => ['PHP', 'Laravel', 'Web Development'],
                            'responsibilities' => [
                                'Developed and maintained 4+ web applications with PHP and JavaScript, improving page load performance by up to 30% through optimized code structure and caching.',
                                'Designed and implemented reusable components, resulting in a 30% reduction in development time for new features and a more consistent user experience.',
                                'Strengthened application security by implementing role-based authentication and secure data practices, reducing reported vulnerabilities by 80%.',
                                'Conducted performance audits and deployed CI/CD pipelines, decreasing deployment times by 50% and reducing error rates.',
                                'Created tailored solutions for 3 clients, boosting internal process efficiency by 40% and automating repetitive tasks.'
                            ]
                        ],
                        [
                            'position' => 'Sales and Operations - eDrinks',
                            'years' => 'Mar 2023 - Present',
                            'skills' => ['Sales', 'Operations', 'Customer Service'],
                            'responsibilities' => [
                                'Played a key role in a 5-person team, supporting the coordination and execution of workflows that enhance cross-department collaboration and service speed.',
                                'Streamlined internal workflows and reporting procedures across teams, improving collaboration and leading to a 20% increase in efficiency.',
                                'Improved overall customer satisfaction and loyalty, growing monthly sales by 25% through tailored customer engagement strategies.',
                                'Optimized supplier logistics and inventory forecasting, leading to a 35% reduction in stockouts and a 20% decrease in storage costs.',
                                'Managed daily store operations, reducing order processing time by 35% and increasing delivery accuracy.'
                            ]
                        ],
                    ]   
                ],
                'side_projects' => [
                    'title' => 'Latest projects',
                    'projects' => [
                        [
                            'name' => 'Practizly',
                            'description' => 'AI-powered academic planning tool for students and teachers.',
                            'technologies' => ['Side project', 'OpenAI', 'Planning', 'Studies'],
                            'link' => 'https://practizly-main-hewydj.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Photography portfolio with admin panel and MercadoPago integration.',
                            'technologies' => ['Freelance project', 'Laravel', 'Admin panel', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba',
                            'is_active' => false
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Event management platform with ticketing, PayPal, and email verification.',
                            'technologies' => ['Side project', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp',
                            'is_active' => false
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Skills',
                    'name' => [
                        'Communication',
                        'Sales',
                        'Laravel',
                        'PHP',
                        'C/C++',
                        'JavaScript',
                        'HTML',
                        'CSS',
                        'Tailwind',
                        'Alpine.js',
                        'MySQL',
                        'SQLite',
                        'Docker',
                        'GitHub',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'LLMs',
                        'WebSockets',
                        'Redis',
                        'SCRUM / Kanban',
                        'Trello',
                        'AI',
                        'Backend',
                        'Advanced English',
                        'Native Spanish',
                    ]
                ]
            ],
            'es' => [
                'title' => 'Currículum • Bruno Rossani',
                'meta_description' => 'Mi currículum, mostrando mis habilidades y experiencia como ingeniero de software.',
                'header' => [
                    'name' => 'Bruno Rossani',
                    'title' => 'Ingeniero de Software Full Stack',
                    'bio' => 'Ingeniero de Software Full Stack con más de 2 años de experiencia, principalmente enfocado en desarrollo backend. Especializado en PHP, Laravel y creación de soluciones fiables del lado del servidor. Desarrollo aplicaciones web priorizando rendimiento, seguridad y mantenibilidad. Actualmente cursando la carrera de Ciencias de la Computación en UTEC.',
                    'mail' => 'brossani23@gmail.com',
                    'phone' => '+59891845585',
                    'linkedin' => 'https://www.linkedin.com/in/brunorossani/',
                    'github' => 'https://github.com/elkiki99',
                    'website' => 'https://bruno-rossani.fly.dev/',
                    'location' => 'Isla de Flores, Montevideo, Uruguay',
                    'location_link' => 'https://www.google.com/maps/place/Palermo,+11200+Montevideo,+Montevideo+Department/data=!4m2!3m1!1s0x959f81b7db8c0371:0xe22fe40f04c80b07?sa=X&ved=1t:242&ictx=111'
                ],
                'education' => [
                    'title' => 'Educación',
                    'careers' => [
                        [
                            'degree' => 'Licenciatura en Ciencias de la Computación - UTEC',
                            'years' => 'Mar 2025 - Presente',
                            'description' => 'Estudio Ingeniería de Software enfocándome en arquitectura, algoritmos eficientes y bases de datos robustas, para crear soluciones escalables y de alto impacto a problemas reales.',
                        ],
                        // [
                        //     'degree' => 'Interpretación Musical - UdelaR',
                        //     'years' => 'Mar 2019 - Nov 2024',
                        //     'description' => 'Formación en análisis musical, técnica instrumental y trabajo en conjunto, fortaleciendo disciplina y pensamiento creativo.'
                        // ]
                    ]
                ],
                'work' => [
                    'title' => 'Experiencia',
                    'jobs' => [
                        [
                            'position' => 'Ingeniero de Software Full Stack - Freelance',
                            'years' => 'Sep 2023 - Presente',
                            'skills' => ['PHP', 'Laravel', 'Desarrollo Web'],
                            'responsibilities' => [
                                'Fortalecí la seguridad de la aplicación implementando autenticación basada en roles y prácticas seguras de manejo de datos, reduciendo vulnerabilidades en un 80%.',
                                'Implementé un sistema de componentes reutilizables que optimizó el desarrollo, reduciendo en un 30% los tiempos de entrega e impulsando la coherencia visual.',
                                'Desarrollé y mantuve más de 4 aplicaciones web con PHP y JavaScript, mejorando el rendimiento de carga hasta un 30% mediante optimización y caché.',
                                'Realicé auditorías de rendimiento y desplegué pipelines CI/CD, disminuyendo los tiempos de despliegue en un 50% y reduciendo errores.',
                                'Creé soluciones a medida para 3 clientes, aumentando la eficiencia interna en un 40% y automatizando tareas repetitivas.'
                            ]
                        ],
                        [
                            'position' => 'Ventas y Operaciones - eDrinks',
                            'years' => 'Mar 2023 - Presente',
                            'skills' => ['Ventas', 'Operaciones', 'Atención al Cliente'],
                            'responsibilities' => [
                                'Formé parte clave de un equipo de 5 personas, apoyando la coordinación y ejecución de flujos de trabajo para mejorar la colaboración y velocidad del servicio.',
                                'Estandaricé los flujos de trabajo internos y los procedimientos de reporte entre los equipos, logrando un incremento del 20% en la entrega de proyectos.',
                                'Optimicé la logística de proveedores y pronóstico de inventarios, logrando una reducción del 35% en faltantes y un 20% en costos de almacenamiento.',
                                'Mejoré la satisfacción y fidelización de clientes, aumentando las ventas mensuales en un 25% mediante estrategias personalizadas de engagement.',
                                'Gestioné operaciones diarias de tienda, reduciendo el tiempo de procesamiento de pedidos en un 35% y aumentando la precisión en las entregas.'
                            ]
                        ],
                    ]
                ],
                'side_projects' => [
                    'title' => 'Proyectos recientes',
                    'projects' => [
                        [
                            'name' => 'Practizly',
                            'description' => 'Herramienta de planificación académica con IA para estudiantes y docentes.',
                            'technologies' => ['Proyecto personal', 'OpenAI', 'Planificación', 'Estudios'],
                            'link' => 'https://practizly-main-hewydj.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'Portafolio fotográfico con panel de administración e integración con MercadoPago.',
                            'technologies' => ['Proyecto freelance', 'Laravel', 'Panel de administración', 'MercadoPago'],
                            'link' => 'https://github.com/elkiki99/baloloba',
                            'is_active' => false
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Plataforma para gestión de eventos con venta de entradas, PayPal y verificación por email.',
                            'technologies' => ['Proyecto personal', 'Laravel', 'JavaScript', 'Webinar'],
                            'link' => 'https://github.com/elkiki99/devwebcamp',
                            'is_active' => false
                        ]
                    ]
                ],
                'skills' => [
                    'title' => 'Habilidades',
                    'name' => [
                        'Comunicación',
                        'Ventas',
                        'Laravel',
                        'PHP',
                        'C/C++',
                        'JavaScript',
                        'HTML',
                        'CSS',
                        'Tailwind',
                        'Alpine.js',
                        'MySQL',
                        'SQLite',
                        'Docker',
                        'GitHub',
                        'Git',
                        'React',
                        'SEO',
                        'AWS',
                        'LLMs',
                        'WebSockets',
                        'Redis',
                        'SCRUM / Kanban',
                        'Trello',
                        'IA',
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
