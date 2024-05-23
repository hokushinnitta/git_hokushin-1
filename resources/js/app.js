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
            const primaryColor = document.getElementById('primary-color').value;
            const secondaryColor = document.getElementById('secondary-color').value;
            const successColor = document.getElementById('success-color').value;
            const infoColor = document.getElementById('info-color').value;
            const warningColor = document.getElementById('warning-color').value;
            const dangerColor = document.getElementById('danger-color').value;
            const lightColor = document.getElementById('light-color').value;
            const darkColor = document.getElementById('dark-color').value;
            const darkPrimaryColor = document.getElementById('dark-primary-color').value;
            const darkSecondaryColor = document.getElementById('dark-secondary-color').value;
            const darkSuccessColor = document.getElementById('dark-success-color').value;
            const darkInfoColor = document.getElementById('dark-info-color').value;
            const darkWarningColor = document.getElementById('dark-warning-color').value;
            const darkDangerColor = document.getElementById('dark-danger-color').value;
            const darkLightColor = document.getElementById('dark-light-color').value;
            const darkDarkColor = document.getElementById('dark-dark-color').value;

            fetch('/color-update', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({
                    primary: primaryColor,
                    secondary: secondaryColor,
                    success: successColor,
                    info: infoColor,
                    warning: warningColor,
                    danger: dangerColor,
                    light: lightColor,
                    dark: darkColor,
                    dark_primary: darkPrimaryColor,
                    dark_secondary: darkSecondaryColor,
                    dark_success: darkSuccessColor,
                    dark_info: darkInfoColor,
                    dark_warning: darkWarningColor,
                    dark_danger: darkDangerColor,
                    dark_light: darkLightColor,
                    dark_dark: darkDarkColor
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

    const resetButton = document.getElementById('resetButton');
    if (resetButton) {
        resetButton.addEventListener('click', function () {
            fetch('/color-settings/reset', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    alert('設定がリセットされました');
                    location.reload();
                } else {
                    alert('設定のリセットに失敗しました');
                }
            })
            .catch(error => console.error('Error:', error));
        });
    }
});
