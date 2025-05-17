var tinys = []
function loadTinyMCE({ selector, theme = 'light', options = {} }) {
    const tinyWrapper = document.querySelector(selector)?.closest("#tiny-wrapper");

    if (tinyWrapper) {
        tinyWrapper.classList.replace('opacity-100', 'opacity-0');
    }

    tinymce.remove();
    if (!tinys.find((item) => item.selector === selector)) {
        tinys.push({ selector, options });
    }

    tinymce.init({
        selector,
        license_key: 'gpl',
        skin: `oxide${theme === 'dark' ? '-dark' : ''}`,
        content_css: theme === 'dark' ? 'dark' : 'default',
        ...options,
        setup(editor) {
            editor.on('init', () => {
                if (tinyWrapper) {
                    tinyWrapper.classList.replace('opacity-0', 'opacity-100');
                }
            });

            if (!window.hasEventListener) {

                window.hasEventListener = true;
            }
        }
    });

    return tinymce;
}

window.addEventListener(window.eventKey, (event) => {
    let theme = event.detail.themeMode;
    if(event.detail.themeMode == 'auto') {
        theme = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
    }
    for (let i = 0; i < tinys.length; i++) {
        loadTinyMCE({
            selector: tinys[i].selector,
            theme,
            options: tinys[i].options
        });
    }
});
