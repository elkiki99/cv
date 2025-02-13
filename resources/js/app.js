import './bootstrap';

document.addEventListener('alpine:init', () => {
    Alpine.store('language', {
        lang: 'en',
        translations: {
            en: { header: {} },
            es: { header: {} }
        },
        init() {
            fetch('/languages.json')
              .then(response => response.json())
              .then(data => {
                  this.translations = data;
                  this.lang = localStorage.getItem('lang') || 'en';
              });
        },
        toggle() {
            this.lang = this.lang === 'en' ? 'es' : 'en';
            localStorage.setItem('lang', this.lang);
        }
    });
});