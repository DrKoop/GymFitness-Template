function gymswiperWordPress(){
    
    if( document.querySelector('.swiper')){
        const opciones = {
            loop : true,
            autoplay : {
                delay : 1500
            }
        }

        new Swiper('.swiper' ,opciones);
    }

    // Wrap every letter in a span
    let textWrapper = document.querySelector('.ml6 .letters');
    
    if( textWrapper ){
        textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

        anime.timeline({loop: true})
        .add({
            targets: '.ml6 .letter',
            translateY: ["1.1em", 0],
            translateZ: 0,
            duration: 750,
            delay: (el, i) => 50 * i
        }).add({
            targets: '.ml6',
            opacity: 0,
            duration: 1000,
            easing: "easeOutExpo",
            delay: 1000
        });
    }


    const hamburguer = document.querySelector('.hamburguer-menu svg');
    hamburguer.addEventListener('click', function(){

            const menuPrincipal = document.querySelector('.contenedor-menu');
            menuPrincipal.classList.toggle('mostrar');
    })
}

document.addEventListener('DOMContentLoaded', gymswiperWordPress);


window.onscroll = () => {

    const scroll = window.scrollY;

    const barraNav = document.querySelector('.barra-navegacion');

    if( scroll > 300){
        barraNav.classList.add('fixed-top');
    }else{
        barraNav.classList.remove('fixed-top');
    }


}