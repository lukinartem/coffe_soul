document.addEventListener('DOMContentLoaded', ()=> {

    window.addEventListener('click', function (event) {
        if (event.target.hasAttribute('data-order')) {
            const el_basket__card__content = event.target.closest('.basket__card__content');

            //productInfo = данные товара
            
            // const orderInfo = {
            //     id: el_basket__card__content.dataset.id,
            //     title: el_basket__card__content.querySelector('.basket__card__content__title').innerText,
            //     weight: el_basket__card__content.querySelector('.basket__card__content__weight').innerText,
            //     price: el_basket__card__content.querySelector('.basket__card__content__price').innerText,
            //     counter: el_basket__card__content.querySelector('[data-counter]').innerText,  
            // };
            console.log(el_basket__card__content.dataset.id)
        }
    })
})