// const bg = document.querySelector('body');
// const phone = document.querySelector('.section__home__phone');
// const windowWidth = window.innerWidth / 3;
// bg.addEventListener('mousemove', (e) => {
//     const mouseX = e.clientX / windowWidth;
//     phone.style.transform = `translate3d(-${mouseX}%, 0, 0)`;
// });

jQuery(document).ready(function($) {
    $('body').prepend('<div class="bg-wrapper"><div class="bg"></div></div>');
    let phone = $('.content__phone');
    let bg = $('.bg');
    $('body').mousemove(function(e) {
        let w = $(window).width();
        let offsetX = e.pageX / w;
        let offset = 90;
        let translate = "translate3d(-" + offsetX * offset + "px, 0px, 0px)";
        let bg_translate = "translate3d(" + offsetX * offset + "px, 0px, 0px)";
        let bg_translate_0 = "translate3d(0, 0px, 0px)";
        if(window.matchMedia('(max-width: 1199px)').matches) {
            phone.css({
                '-webkit-transform': bg_translate_0,
                'transform': bg_translate_0,
                'moz-transform': bg_translate_0
            });
            bg.css({
                '-webkit-transform': bg_translate_0,
                'transform': bg_translate_0,
                'moz-transform': bg_translate_0
            });
        } else if(window.matchMedia('(min-width: 1200px)').matches) {
            phone.css({
                '-webkit-transform': translate,
                'transform': translate,
                'moz-transform': translate
            });
            bg.css({
                '-webkit-transform': bg_translate,
                'transform': bg_translate,
                'moz-transform': bg_translate
            });
        }
    });
});

