const btnMobile = document.getElementById('Btn-Mobile');

function toogleMenu(){
    const nav = document.getElementById('nav');
    nav.classList.toggle('ShowMenu');

        const Mbtn = document.getElementById('Hamburger');
        Mbtn.classList.toggle('ShowMobile');
}
//sistema de atualização de data/hora para mostrar a última atualização
const date = new Date().toLocaleDateString();
const hour = new Date().toLocaleTimeString();

var data = document.getElementById("update_date");
data.innerHTML = (date);
var hora = document.getElementById("update_hour");
hora.innerHTML = (hour);

btnMobile.addEventListener('click', toogleMenu);