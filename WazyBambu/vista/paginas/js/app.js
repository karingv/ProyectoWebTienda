let btnMenu = document.querySelector('.btn-menu');
let menu = document.querySelector('.list-container');
let containerMenu = document.querySelector('.menu');
let activador = true;

//Menu de navegacion

btnMenu.addEventListener('click', () =>{

    document.querySelector('.btn-menu i').classList.toggle('fa-times');
    if(activador){
        menu.style.left="0";
        menu.style.transition="0.5s";

        activador= false;
    }else{
        activador= false;

        menu.style.left="-100%";
        menu.style.transition="0.5s";

        activador= true;
    }
});

//Intercalar clase activo

let enlaces = document.querySelectorAll('.lists li a');

enlaces.forEach( (element) => {

    element.addEventListener('click',(event) => {
        enlaces.forEach(link => {
            link.classList.remove('activo');
        });
        event.target.classList.add('activo');
    });
    
});

//Efectos Scroll

let prevScrollPos = window.pageYOffset;

window.onscroll = () => {

    let currentScrollPos=window.pageYOffset;

    //Mostrar y ocultar menu
    if(prevScrollPos > currentScrollPos){
        containerMenu.style.top="0";
        containerMenu.style.transition="0.5";
    }else{
        containerMenu.style.top="-100px";
        containerMenu.style.transition="0.5s";
    }

    prevScrollPos = currentScrollPos;

    //Mostrar y ocultar scroll Estilos
    let arriba= window.pageYOffset;

    if(arriba <=600){
        containerMenu.style.borderBottom="none";
    }else{
        containerMenu.style.borderBottom="3px solid rgb(218, 234, 188)";
    }
}