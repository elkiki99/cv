<?php

namespace App\Livewire;

use Livewire\Component;

class About extends Component
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
                    'heading' => 'Hi, I\'m Bruno Rossani',
                    'p1' => 'I live in Montevideo, Uruguay, specifically in the heart of Palermo, located in the southern part of the city, with my wonderful girlfriend, Camila, and our adorable feline companion, Cattana.',
                    'p2' => 'I\'m a 25-year-old IT technologist student at UTEC, passionate about software development, web technologies, and problem-solving, always eager to learn and build cool stuff.',
                    'p3' => 'I also like playing guitar, biking, and cooking. I see myself as a lifelong learner and genuinely enjoy the process of discovering new things. I\'m always on the lookout for fresh opportunities and challenges.'
                ],
                'work' => [
                    'title' => 'Work',
                    'p1' => 'I\'ve been working as a solo full-stack developer for over 3 years now. I started creating web pages in WordPress and instantly fell in love with creating websites and web applications. I quickly realized I needed to dig deeper to tweek the details that haunted me. Without realizing I started to learn how to code.',
                    'p2' => 'Started as a self-taught journey learning PHP and JavaScript and I had no idea what I was getting myself into. Over the years I\'ve learned a lot about web development and I\'m always eager to learn new things. My go-to stack is TALL Stack (TailwindCSS, Alpine.js, Livewire and Laravel) but I\'m always open to learning new technologies and frameworks depending on the problem I\'m tackling.',
                    'p3' => 'Currently, I work as a freelance web developer while holding a part-time role at a supply company. I\'m excited to keep growing as a developer and constantly on the lookout for the next great challenge.'
                ],
                'studies' => [
                    'title' => 'Studies',
                    'careers' => [
                        [
                            'career' => 'UTEC IT Technologist Career',
                            'description' => 'Focused on software development, databases, and emerging technologies to build scalable and efficient applications. Currently studying.',
                        ],
                        [
                            'career' => 'Gato Dumas Institute',
                            'description' => 'Completed courses in local gastronomy and pasta making.'
                        ],
                        [
                            'career' => 'Fine Arts Faculty of Udelar',
                            'description' => 'Studied musical theory, classical guitar interpretation, and composition, exploring a wide range of repertoires.'
                        ],
                    ],
                ],
                'projects' => [
                    'title' => 'Side projects',
                    'apps' => [
                        [
                            'name' => 'Wevelopers',
                            'description' => ' is a web development learning platform designed for Spanish speakers. It offers a new way to learn interactively through dynamic courses and active community participation.',
                            'link' => 'https://github.com/elkiki99/wevelopers'
                        ],
                        [
                            'name' => 'Flux UI Starter Kit',
                            'description' => ' is a powerful starter kit for building web applications with Laravel, requires a Flux UI subscription. It includes pre-built user and admin dashboards, seamless integration with Laravel Breeze, and dynamic real-time content powered by Livewire.',
                            'link' => 'https://github.com/elkiki99/flux-volt-starter-kit'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'is a photography portfolio for an independent photographer brand. It features an intuitive interface and a robust admin panel, making it ideal for managing projects, interacting with users, working with photoshoots and streamlining workflows.',
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ]
                    ],
                ],
                'youtube' => [
                    'title' => 'Youtubers I follow',
                    'channels' => [
                        [
                            'name' => 'Veritasium',
                            'link' => 'https://www.youtube.com/@veritasium'
                        ],
                        [
                            'name' => 'Malewicz',
                            'link' => 'https://www.youtube.com/@MalewiczHype'
                        ],
                        [
                            'name' => 'Tariq Harb',
                            'link' => 'https://www.youtube.com/@TeeHarb'
                        ],
                        [
                            'name' => 'Rick Beato',
                            'link' => 'https://www.youtube.com/@RickBeato'
                        ],
                        [
                            'name' => 'Joshua Weissman',
                            'link' => 'https://www.youtube.com/@JoshuaWeissman'
                        ],
                        [
                            'name' => 'Nuno Maduro',
                            'link' => 'https://www.youtube.com/@nunomaduro'
                        ]
                    ],
                ]
            ],
            'es' => [
                'header' => [
                    'heading' => 'Hola, soy Bruno Rossani',
                    'p1' => 'Vivo en Montevideo, Uruguay, específicamente en el corazón de Palermo, ubicado en la zona sur de la ciudad, junto a mi maravillosa novia, Camila, y nuestra adorable compañera felina, Cattana.',
                    'p2' => 'Soy un estudiante de Tecnólogo en Informática en UTEC de 25 años, apasionado por el desarrollo de software, las tecnologías web y la resolución de problemas. Siempre estoy dispuesto a aprender y construir cosas geniales.',
                    'p3' => 'También me gusta tocar la guitarra, andar en bicicleta y cocinar. Me considero un aprendiz de por vida y realmente disfruto el proceso de descubrir cosas nuevas. Siempre estoy en busca de nuevas oportunidades y desafíos.'
                ],
                'work' => [
                    'title' => 'Trabajo',
                    'p1' => 'He trabajado como desarrollador full-stack en solitario durante más de 3 años. Comencé creando páginas web en WordPress y me enamoré instantáneamente de la creación de sitios web y aplicaciones web. Rápidamente me di cuenta de que necesitaba profundizar más para ajustar los detalles que me inquietaban. Sin darme cuenta, comencé a aprender a programar.',
                    'p2' => 'Inicié mi camino como autodidacta aprendiendo PHP y JavaScript sin tener idea de en qué me estaba metiendo. A lo largo de los años he aprendido mucho sobre desarrollo web y siempre tengo ganas de seguir aprendiendo. Mi stack principal es TALL Stack (TailwindCSS, Alpine.js, Livewire y Laravel), pero siempre estoy abierto a aprender nuevas tecnologías y frameworks según el problema que necesite resolver.',
                    'p3' => 'Actualmente trabajo como desarrollador web freelance mientras tengo un puesto a tiempo parcial en una empresa de suministros. Estoy emocionado por seguir creciendo como desarrollador y siempre en busca del próximo gran desafío.'
                ],
                'studies' => [
                    'title' => 'Estudios',
                    'careers' => [
                        [
                            'career' => 'Tecnólogo en Informática en UTEC',
                            'description' => 'Enfocado en el desarrollo de software, bases de datos y tecnologías emergentes para construir aplicaciones escalables y eficientes. Actualmente cursando.'
                        ],
                        [
                            'career' => 'Instituto Gato Dumas',
                            'description' => 'Cursos completados en gastronomía local y elaboración de pastas.'
                        ],
                        [
                            'career' => 'Facultad de Bellas Artes de Udelar',
                            'description' => 'Estudios en teoría musical, interpretación de guitarra clásica y composición, explorando un amplio repertorio.'
                        ]
                    ],
                ],
                'projects' => [
                    'title' => 'Proyectos personales',
                    'apps' => [
                        [
                            'name' => 'Wevelopers',
                            'description' => 'es una plataforma de aprendizaje sobre desarrollo web diseñada para hispanohablantes. Ofrece una nueva forma de aprender de manera interactiva a través de cursos dinámicos y participación activa de la comunidad.',
                            'link' => 'https://github.com/elkiki99/wevelopers'
                        ],
                        [
                            'name' => 'Flux UI Starter Kit',
                            'description' => 'es un potente kit de inicio para construir aplicaciones web con Laravel. Requiere una suscripción a Flux UI. Incluye paneles preconstruidos para usuarios y administradores, integración fluida con Laravel Breeze y contenido dinámico en tiempo real impulsado por Livewire.',
                            'link' => 'https://github.com/elkiki99/flux-volt-starter-kit'
                        ],
                        [
                            'name' => 'Balo Loba',
                            'description' => 'es un portafolio de fotografía para una fotógrafa independiente. Cuenta con una interfaz intuitiva y un sólido panel de administración, ideal para gestionar proyectos, interactuar con usuarios y trabajar con sesiones de fotos.',
                            'link' => 'https://github.com/elkiki99/baloloba'
                        ]
                    ],
                ],
                'youtube' => [
                    'title' => 'Youtubers que sigo',
                    'channels' => [
                        [
                            'name' => 'Veritasium',
                            'link' => 'https://www.youtube.com/@veritasium'
                        ],
                        [
                            'name' => 'Malewicz',
                            'link' => 'https://www.youtube.com/@MalewiczHype'
                        ],
                        [
                            'name' => 'Tariq Harb',
                            'link' => 'https://www.youtube.com/@TeeHarb'
                        ],
                        [
                            'name' => 'Rick Beato',
                            'link' => 'https://www.youtube.com/@RickBeato'
                        ],
                        [
                            'name' => 'Joshua Weissman',
                            'link' => 'https://www.youtube.com/@JoshuaWeissman'
                        ],
                        [
                            'name' => 'Nuno Maduro',
                            'link' => 'https://www.youtube.com/@nunomaduro'
                        ]
                    ],
                ]
            ]
        ];
    }

    public function render()
    {
        return view('livewire.about');
    }
}
