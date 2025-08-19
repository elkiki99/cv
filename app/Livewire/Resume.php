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
                'meta_description' => 'My resume showcasing my skills and experience as a software developer.',
                'header' => [
                    'name' => 'Bruno Rossani',
                    'title' => 'Full Stack Software Developer',
                    'bio' => 'Full Stack Software Developer with over 2 years of experience, mainly focused on backend development. Specialized in PHP, Laravel, C/C++, SQL and building reliable server-side solutions. I develop web applications prioritizing performance, security, and maintainability. Currently studying Higher Technologist in Computer Science at UTEC.',
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
                            'degree' => 'Higher Technologist in Computer Science - UTEC',
                            'years' => 'Mar 2025 - Present',
                            'description' => 'Student of Higher Technologist in Computer Science with plans to continue as Systems Analyst at FING. Focused on software architecture, efficient algorithms, and databases, aiming to develop high-impact tech solutions for real-world problems.',
                        ],
                        // [
                        //     'degree' => 'Musical Interpretation - UdelaR',
                        //     'years' => 'Mar 2019 - Nov 2024',
                        //     'description' => 'Training in musical analysis, instrumental technique, and ensemble work, strengthening discipline and creative thinking.'
                        // ]
                    ]
                ],
                'work' => [
                    'title' => 'Experience',
                    'jobs' => [
                        [
                            'position' => 'Software Developer - Freelance',
                            'years' => 'Sep 2023 - Present',
                            'skills' => ['PHP', 'C/C++', 'SQL', 'JavaScript'],
                            'responsibilities' => [
                                'Developed and maintained dynamic web applications with PHP and JavaScript, optimizing load performance through caching and lazy loading techniques.',
                                'Designed and implemented a reusable component system that sped up development and improved visual consistency across product interfaces.',
                                'Strengthened web system security through role-based authentication and best practices in handling sensitive data, increasing security by 30%.',
                                'Analyzed application performance and improved the release process, achieving faster, more stable updates with no visible errors for users.',
                                'Implemented custom solutions for clients, automating key tasks and increasing operational efficiency by about 40%.',
                            ],
                        ],
                        [
                            'position' => 'Sales and Operations - eDrinks',
                            'years' => 'Mar 2023 - Present',
                            'skills' => ['Sales', 'Operations', 'Customer Service'],
                            'responsibilities' => [
                                'Improved customer experience through personalized strategies, boosting engagement and strengthening loyalty for greater retention and recommendations.',
                                'Key member of a five-person team, collaborating on coordination and execution of workflows to enhance communication and operational efficiency.',
                                'Managed daily store operations, speeding up order processing and increasing delivery accuracy to ensure consistent customer satisfaction.',
                                'Optimized supplier logistics and inventory forecasting, reducing stockouts by 35% and storage costs by 20%, directly impacting the budget.',
                                'Standardized internal processes and reporting between teams, improving communication and speeding up incident response by 20%.',
                            ],
                        ],
                    ]
                ],
                'side_projects' => [
                    'title' => 'Recent Projects',
                    'projects' => [
                        [
                            'name' => 'Tortuga',
                            'description' => 'E-commerce platform for Tortuga.uy — sustainable and circular fashion.',
                            'technologies' => ['E-commerce', 'CRM', 'Laravel', 'Livewire', 'Alpine.js'],
                            'link' => 'https://tortuga.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Practizly',
                            'description' => 'AI-powered academic planning tool for students and teachers.',
                            'technologies' => ['Personal Project', 'OpenAI', 'Planning', 'Studies'],
                            'link' => 'https://practizly.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'DevWebCamp',
                            'description' => 'Event management platform with ticket sales, PayPal integration, and email verification.',
                            'technologies' => ['Personal Project', 'Laravel', 'JavaScript', 'Webinar'],
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
                'meta_description' => 'Mi currículum, mostrando mis habilidades y experiencia como desarrollador de software.',
                'header' => [
                    'name' => 'Bruno Rossani',
                    'title' => 'Desarollador de Software Full Stack',
                    'bio' => 'Desarrollador de Software Full Stack con más de 2 años de experiencia, principalmente enfocado en desarrollo backend. Especializado en PHP, Laravel, C/C++, SQL y creación de soluciones fiables del lado del servidor. Desarrollo aplicaciones web priorizando rendimiento, seguridad y mantenibilidad. Actualmente cursando la carrera de Tecnólogo en Informática en UTEC.',
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
                            'degree' => 'Tecnólogo en Informática - UTEC',
                            'years' => 'Mar 2025 - Presente',
                            'description' => 'Estudiante de Tecnólogo en Informática con proyección a continuar Analista en Sistemas en FING. Enfocado en arquitectura de software, algoritmos eficientes y bases de datos, con el objetivo de desarrollar soluciones tecnológicas de alto impacto para problemas reales.',
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
                            'position' => 'Desarollador de Software - Freelance',
                            'years' => 'Sep 2023 - Presente',
                            'skills' => ['PHP', 'C/C++', 'SQL', 'Javascript'],
                            'responsibilities' => [
                                'Fortalecí la seguridad de sistemas web mediante autenticación basada en roles y buenas prácticas en el manejo de datos sensibles, aumentando la seguridad en un 30%.',
                                'Analicé el rendimiento de las aplicaciones y mejoré el proceso de publicación, logrando actualizaciones más rápidas, estables y sin errores visibles para los usuarios.',
                                'Implementé soluciones personalizadas para clientes, automatizando tareas clave y aumentando la eficiencia operativa en aproximadamente un 40%.',
                                'Diseñé e implementé un sistema de componentes reutilizables que aceleró el desarrollo y mejoró la coherencia visual en todas las interfaces del producto.',
                                'Desarrollé y mantuve aplicaciones web dinámicas con PHP y JavaScript, optimizando el rendimiento de carga con técnicas como caché y carga diferida.',
                            ],
                        ],
                        [
                            'position' => 'Ventas y Operaciones - eDrinks',
                            'years' => 'Mar 2023 - Presente',
                            'skills' => ['Ventas', 'Operaciones', 'Atención al cliente'],
                            'responsibilities' => [
                                'Mejoré la experiencia del cliente con estrategias personalizadas, impulsando el compromiso y fortaleciendo la fidelización para lograr mayor retención y recomendación de los usuarios.',
                                'Optimicé la logística y el pronóstico de inventarios, logrando reducir faltantes en un 35% y disminuir costos de almacenamiento en un 20%, con un impacto directo en el presupuesto.',
                                'Gestioné las operaciones diarias de la tienda, agilizando el procesamiento de pedidos y elevando la precisión en las entregas para asegurar la satisfacción constante de los clientes.',
                                'Formé parte clave de un equipo de cinco personas, colaborando en la coordinación y ejecución de flujos para mejorar la comunicación y la eficiencia operativa diaria.',
                                'Estandaricé los procesos internos y los informes entre equipos, lo que permitió mejorar la comunicación y acelerar la respuesta ante incidencias en un 20%.',
                            ],
                        ],
                    ]
                ],
                'side_projects' => [
                    'title' => 'Proyectos recientes',
                    'projects' => [
                        [
                            'name' => 'Tortuga',
                            'description' => 'Plataforma e-commerce para Tortuga.uy — moda sustentable y circular.',
                            'technologies' => ['E-commerce', 'CRM', 'Laravel', 'Livewire', 'Alpine.js'],
                            'link' => 'https://tortuga.laravel.cloud/',
                            'is_active' => true
                        ],
                        [
                            'name' => 'Practizly',
                            'description' => 'Herramienta de planificación académica con IA para estudiantes y docentes.',
                            'technologies' => ['Proyecto personal', 'OpenAI', 'Planificación', 'Estudios'],
                            'link' => 'https://practizly.laravel.cloud/',
                            'is_active' => true
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
