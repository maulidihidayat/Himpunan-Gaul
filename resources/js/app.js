import './bootstrap';
import 'slick-carousel/slick/slick';
import 'slick-carousel/slick/slick.css';
import 'slick-carousel/slick/slick-theme.css';
import $ from 'jquery';

window.$ = $;
window.jQuery = $;

document.addEventListener('DOMContentLoaded', function () {
    $('.autoplay').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000, 
        speed: 1000,
        dots: true,
        arrows: true,
        pauseOnHover: true,
        fade: true
        
    });
});

$('.portfolio-carousel').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    dots: true,
    arrows: true,
    responsive: [
        {
            breakpoint: 1024,
            settings: { slidesToShow: 2 }
        },
        {
            breakpoint: 640,
            settings: { slidesToShow: 1 }
        }
    ]
});
