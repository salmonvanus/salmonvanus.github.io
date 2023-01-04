const checkbox = document.getElementById('checkbox');
const favicon = document.getElementById('favicon');


checkbox.addEventListener('change', () => {

    const isDark = document.body.classList.toggle('dark');

    if (isDark) {
        // console.log('true');
        favicon.href = base_url + "assets/img/logo-web-dark-1.png";
    } else {
        // console.log('false');
        favicon.href = base_url + "assets/img/logo-web-light-2.png";
    }

});