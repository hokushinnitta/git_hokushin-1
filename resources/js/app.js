import 'bootstrap';

document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkModeToggle');

    // 初期状態を設定
    if (darkModeToggle) {
        const isDarkMode = localStorage.getItem('darkMode') === 'true';
        darkModeToggle.checked = isDarkMode;
        applyTheme(isDarkMode);

        darkModeToggle.addEventListener('change', function () {
            const isDarkMode = darkModeToggle.checked;
            localStorage.setItem('darkMode', isDarkMode);
            applyTheme(isDarkMode);
        });
    }

    function applyTheme(isDarkMode) {
        fetch('/api/color-settings')
            .then(response => response.json())
            .then(data => {
                if (data) {
                    if (isDarkMode) {
                        document.documentElement.style.setProperty('--header-color', data.dark_header_color);
                        document.documentElement.style.setProperty('--background-color', data.dark_background_color);
                        document.documentElement.style.setProperty('--font-color', data.dark_font_color);
                        document.documentElement.style.setProperty('--border-color', data.dark_border_color);
                        document.documentElement.style.setProperty('--button-color', data.dark_button_color);
                        document.documentElement.style.setProperty('--button-text-color', data.dark_button_text_color);
                        document.documentElement.style.setProperty('--input-color', data.dark_input_color);
                    } else {
                        document.documentElement.style.setProperty('--header-color', data.header_color);
                        document.documentElement.style.setProperty('--background-color', data.background_color);
                        document.documentElement.style.setProperty('--font-color', data.font_color);
                        document.documentElement.style.setProperty('--border-color', data.border_color);
                        document.documentElement.style.setProperty('--button-color', data.button_color);
                        document.documentElement.style.setProperty('--button-text-color', data.button_text_color);
                        document.documentElement.style.setProperty('--input-color', data.input_color);
                    }
                }
            })
            .catch(error => {
                console.error('Error fetching color settings:', error);
            });
    }
});
