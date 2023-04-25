document.addEventListener('DOMContentLoaded', ()=> {
    
    // open_nav

    const el_header__nav__burger_container = document.querySelector('.header__nav__burger_container');
    if (el_header__nav__burger_container) {
        el_header__nav__burger_container.addEventListener('click', ()=> {
            document.body.classList.toggle('open_nav')
        })
    }

    // index2

    // open bascet
    const el_basket_icon = document.querySelector('.basket_icon');
    if (el_basket_icon) {
        el_basket_icon.addEventListener('click', ()=>{
            document.body.classList.toggle('open_basket')
        })
    }

    

    
        const el_content_wrapper = document.querySelector('.content_wrapper');
        window.addEventListener('click', function (event) {
            // product_count
            let el_product_count;
            let el_product_count__value;
            if (event.target.dataset.action === 'plus' || event.target.dataset.action === 'minus' ) {
                el_product_count = event.target.closest('.product_count');
                el_product_count__value = el_product_count.querySelector('[data-counter]')
            }
            
            if (event.target.dataset.action === 'plus') {
                
                el_product_count__value.innerText =  ++el_product_count__value.innerText;

            }

            if (event.target.dataset.action === 'minus') {
                if (el_product_count__value.innerText > '1') {

                    el_product_count__value.innerText =  --el_product_count__value.innerText;
                }
                else if (event.target.closest('.content_wrapper') && el_product_count__value.innerText == '1' ) {

                    // удаляем товар из корзины
                    event.target.closest('.basket__card__content').remove();
                    toggleStatus();
                    priceSum ();
                    countSum ();
                    
                }
            }
            // Проверяем клик на plu или minus внутри корзины

            if (event.target.hasAttribute('data-action') && event.target.closest('.content_wrapper')) {
                priceSum ();
                countSum ();
                
            }
            

            // кнопка добавить в корзину "купить"
            

            if (event.target.hasAttribute('data-cart')) {
                const el_card = event.target.closest('.card');

                //productInfo = данные товара
                
                const productInfo = {
                    id: el_card.dataset.id,
                    imgSrc: el_card.querySelector('.img').getAttribute('src'),
                    title: el_card.querySelector('.product_title').innerText,
                    weight: el_card.querySelector('.product_weight').innerText,
                    price: el_card.querySelector('.product_footer__price-number').innerText,
                    counter: el_card.querySelector('[data-counter]').innerText,  
                };

                // проверка есть ли товар в корзине
                
               const productInCard = el_content_wrapper.querySelector(`[data-id="${productInfo.id}"]`);
               
               if (productInCard) {
                const counterElement = productInCard.querySelector('[data-counter]');
                counterElement.innerText=parseInt(counterElement.innerText) + parseInt(productInfo.counter);
               }
               else {
                const cardHTML = `<div class="basket__card__content" data-id="${productInfo.id}">
                    <div class="basket__card__content__img">
                        <img src="${productInfo.imgSrc}" alt="${productInfo.title}" class="img">
                    </div>
                    <div class="basket__card__content__desc">
                        <h4 class="basket__card__content__title">${productInfo.title}</h4>
                        <div class="basket__card__content__weight">${productInfo.weight}</div>
                        <div class="basket__card__content__details">
                        
                        <div class="basket__card__content__count product_count">
                            <span class="product_count__circuit-minus--small product_count__circuit-minus" data-action="minus">
                                <svg data-action="minus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0.75935 3.64645C0.564089 3.84171 0.564089 4.15829 0.75935 4.35356L3.94133 7.53554C4.13659 7.7308 4.45318 7.7308 4.64844 7.53554C4.8437 7.34027 4.8437 7.02369 4.64844 6.82843L1.82001 4L4.64844 1.17158C4.8437 0.976313 4.8437 0.65973 4.64844 0.464468C4.45318 0.269206 4.13659 0.269206 3.94133 0.464468L0.75935 3.64645ZM19.5 3.5L1.1129 3.5L1.1129 4.5L19.5 4.5L19.5 3.5Z" fill="black"/>
                                    </svg>
                            </span>
                            <span class="basket__card__value product_count__value" data-counter>${productInfo.counter}</span>
                            <span class="product_count__circuit-plus--small product_count__circuit-plus" data-action="plus">
                                <svg data-action="plus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19.2407 4.35355C19.4359 4.15829 19.4359 3.84171 19.2407 3.64644L16.0587 0.464464C15.8634 0.269202 15.5468 0.269202 15.3516 0.464464C15.1563 0.659726 15.1563 0.976309 15.3516 1.17157L18.18 4L15.3516 6.82842C15.1563 7.02369 15.1563 7.34027 15.3516 7.53553C15.5468 7.73079 15.8634 7.73079 16.0587 7.53553L19.2407 4.35355ZM0.5 4.5L18.8871 4.5L18.8871 3.5L0.5 3.5L0.5 4.5Z" fill="black"/>
                                    </svg>
                            </span>
                        </div>
                        <div class="basket__card__content__price">${productInfo.price}</div>
                    </div>
                    </div>
                    
                </div>`;
                el_content_wrapper.insertAdjacentHTML('beforeend', cardHTML);
               }

            //    сброс счетчика добавленного товара на "1"

            el_card.querySelector('[data-counter]').innerText = '1';
            
            toggleStatus();
            priceSum ();
            countSum ();
    
            
            }
            // функция удаление записи "корзина пуста"
            function toggleStatus() {
                const el_content_status = document.querySelector('.basket__card__content__status');
                if (el_content_wrapper.children.length > 0) {
                    console.log('+')
                    el_content_status.classList.add('content_status-none')
                }
                else {
                    console.log('-')
                    el_content_status.classList.remove('content_status-none')
                }
            }
            // функция суммирования цены итого
            
            function priceSum () {
                const els_basket__card__content = document.querySelectorAll('.basket__card__content');
                const el_price_number = document.querySelector('.price-number');
                let tottlePrice = 0;
                if (els_basket__card__content) {
                    for (let el_basket__card__content of els_basket__card__content) {
                        const counterCard = el_basket__card__content.querySelector('[data-counter]');
                        const priceCard = el_basket__card__content.querySelector('.basket__card__content__price');
                        
                        const currentPrice = parseInt(counterCard.innerText)*parseInt(priceCard.innerText);
                        
                        tottlePrice += currentPrice;
                    }
                }
                el_price_number.innerText = tottlePrice + ' ₽';
            }

            // функция подсчета количества товара в корзине
            function countSum () {
                const els_basket__card__content = document.querySelectorAll('.basket__card__content');
                const el_basket_icon__value = document.querySelector('.basket_icon__value');
                let tottleCount = 0;
                if (els_basket__card__content) {
                    for (let el_basket__card__content of els_basket__card__content) {
                        const counterCard = el_basket__card__content.querySelector('[data-counter]');
                        const currentCount = parseInt(counterCard.innerText);
                        
                        tottleCount += currentCount;
                    }
                }
                el_basket_icon__value.innerText = tottleCount;

            }
            // function priceSumCard () {
            //     const els_basket__card__content = document.querySelectorAll('.basket__card__content');
            //     let rottlePriceCard = 0;
            //     if (els_basket__card__content) {
            //         for (let el_basket__card__content of els_basket__card__content) {
            //             const counterCard = el_basket__card__content.querySelector('[data-counter]');
            //             const priceCard = el_basket__card__content.querySelector('.basket__card__content__price');
            //             const currentPrice = parseInt(counterCard.innerText)*parseInt(priceCard.innerText);
            //             console.log(currentPrice)
            //             priceCard.innerText = currentPrice + ' ₽';
            //         }
            //     }
            // }
        })
 
    


    // header scroll

    // let el_header = document.querySelector('.header');
    // let scrollPosition = window.pageYOffset;
    // let lastScroll = 0;
    // document.onscroll = function () {
    //     if (scrollPosition > lastScroll) {
    //         el_header.classList.add ('header--scroll');
    //         console.log(scrollPosition);
    //     }
    //     else {
    //         el_header.classList.remove ('header--scroll');
    //     }
    // }
          
})
