const btnMobile = document.getElementById('Btn-Mobile');

function toogleMenu(){
    const nav = document.getElementById('nav');
    nav.classList.toggle('ShowMenu');

        const Mbtn = document.getElementById('Hamburger');
        Mbtn.classList.toggle('ShowMobile');
}

btnMobile.addEventListener('click', toogleMenu);