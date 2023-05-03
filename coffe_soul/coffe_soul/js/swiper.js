document.addEventListener('DOMContentLoaded', ()=> {
    new Swiper('.swiper', {
        loop: true,
        navigation: {
            prevEl: '.swiper-button-prev',
            nextEl: '.swiper-button-next'
        },
        loop: true,
        keyboard: {
            enabled: true,
            onlyInViewport: true,
        },
        centeredSlides: true,
        speed: 500,
        pogination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
            },
            625: {
                slidesPerView: 1.5,
            },
            768: {
                slidesPerView: 1.8,
            },
            1024: {
                slidesPerView: 2.5, 
            },
            1250: {
                slidesPerView: 3,
            }
        }
    })
})
