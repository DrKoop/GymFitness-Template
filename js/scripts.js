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
}

document.addEventListener('DOMContentLoaded', gymswiperWordPress);