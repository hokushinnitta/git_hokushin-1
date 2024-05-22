import './bootstrap';
import '../sass/app.scss';

document.addEventListener('DOMContentLoaded', function () {
    const toggleSwitch = document.getElementById('darkModeToggle');
    const currentTheme = localStorage.getItem('theme') || 'light';
    
    if (currentTheme) {
        document.documentElement.setAttribute('data-theme', currentTheme);
        if (currentTheme === 'dark') {
            toggleSwitch.checked = true;
        }
    }

    if (toggleSwitch) {
        toggleSwitch.addEventListener('change', function () {
            if (toggleSwitch.checked) {
                document.documentElement.setAttribute('data-theme', 'dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.setAttribute('data-theme', 'light');
                localStorage.setItem('theme', 'light');
            }
        });
    }

    // カラー設定の保存処理
    const saveButton = document.getElementById('saveButton');
    if (saveButton) {
        saveButton.addEventListener('click', function () {
            const headerColor = document.getElementById('headerColor').value;
            const backgroundColor = document.getElementById('backgroundColor').value;
            const fontColor = document.getElementById('fontColor').value;
            const borderColor = document.getElementById('borderColor').value;
            const buttonColor = document.getElementById('buttonColor').value;
            const buttonTextColor = document.getElementById('buttonTextColor').value;
            const inputColor = document.getElementById('inputColor').value;
            const darkHeaderColor = document.getElementById('darkHeaderColor').value;
            const darkBackgroundColor = document.getElementById('darkBackgroundColor').value;
            const darkFontColor = document.getElementById('darkFontColor').value;
            const darkBorderColor = document.getElementById('darkBorderColor').value;
            const darkButtonColor = document.getElementById('darkButtonColor').value;
            const darkButtonTextColor = document.getElementById('darkButtonTextColor').value;
            const darkInputColor = document.getElementById('darkInputColor').value;
            
            fetch('/api/color-settings', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    header_color: headerColor,
                    background_color: backgroundColor,
                    font_color: fontColor,
                    border_color: borderColor,
                    button_color: buttonColor,
                    button_text_color: buttonTextColor,
                    input_color: inputColor,
                    dark_header_color: darkHeaderColor,
                    dark_background_color: darkBackgroundColor,
                    dark_font_color: darkFontColor,
                    dark_border_color: darkBorderColor,
                    dark_button_color: darkButtonColor,
                    dark_button_text_color: darkButtonTextColor,
                    dark_input_color: darkInputColor
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('カラー設定が保存されました');
                    location.reload();
                } else {
                    alert('カラー設定の保存に失敗しました');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }
});
