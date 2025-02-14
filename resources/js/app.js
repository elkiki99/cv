import './bootstrap';

// document.addEventListener('alpine:init', () => {
//     Alpine.store('language', {
//         lang: localStorage.getItem('lang') || 'en',
//         translations: {
//             en: { header: { home: 'Home', about: 'About', portfolio: 'Portfolio', resume: 'Resume' } },
//             es: { header: { home: 'Inicio', about: 'Sobre mí', portfolio: 'Portafolio', resume: 'CV' } }
//         },
//         toggle() {
//             this.lang = this.lang === 'en' ? 'es' : 'en';
//             localStorage.setItem('lang', this.lang);
//         }
//     });
// });