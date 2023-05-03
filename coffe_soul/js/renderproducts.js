const productsContainer = document.querySelector('#products-container');

// Запускаем getProducts
getProducts();

// Асинхронная функция получения данных из файла products.json
async function getProducts() {
	// Получаем данные из products.json
    const response = await fetch('./js/products.json');
    // Парсим данные из JSON формата в JS
    const productsArray = await response.json();
    // Запускаем ф-ю рендера (отображения товаров)
	renderProducts(productsArray);
}

function renderProducts(productsArray) {
    productsArray.forEach(function (item) {
        const productHTML =`<div class="card" data-id="${item.id}">
        <div class="card_wrapper">
            <div class="product_prewiew">
                <img src="${item.imgSrc}" alt="${item.title}" class="product_img img">
            </div>
            <h4 class="product_title">${item.title}</h4>
            <div class="product_text">
            ${item.text}
            </div>
            <span class="product_weight">${item.weight} г</span>
            <div class="product_footer">
                <div class="product_footer__price">
                    <span class="product_footer__price-text">Цена</span>
                    <span class="product_footer__price-number">${item.price} ₽</span>
                </div>
                <div class="product_count-btn" >
                    <div class="product_footer__count product_count">
                        <span class="product_count__circuit-minus" data-action="minus">
                            <svg data-action="minus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.75935 3.64645C0.564089 3.84171 0.564089 4.15829 0.75935 4.35356L3.94133 7.53554C4.13659 7.7308 4.45318 7.7308 4.64844 7.53554C4.8437 7.34027 4.8437 7.02369 4.64844 6.82843L1.82001 4L4.64844 1.17158C4.8437 0.976313 4.8437 0.65973 4.64844 0.464468C4.45318 0.269206 4.13659 0.269206 3.94133 0.464468L0.75935 3.64645ZM19.5 3.5L1.1129 3.5L1.1129 4.5L19.5 4.5L19.5 3.5Z" fill="black"/>
                                </svg>
                        </span>
                        <span class="product_count__value" data-counter>1</span>
                        <span class="product_count__circuit-plus" data-action="plus">
                            <svg data-action="plus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.2407 4.35355C19.4359 4.15829 19.4359 3.84171 19.2407 3.64644L16.0587 0.464464C15.8634 0.269202 15.5468 0.269202 15.3516 0.464464C15.1563 0.659726 15.1563 0.976309 15.3516 1.17157L18.18 4L15.3516 6.82842C15.1563 7.02369 15.1563 7.34027 15.3516 7.53553C15.5468 7.73079 15.8634 7.73079 16.0587 7.53553L19.2407 4.35355ZM0.5 4.5L18.8871 4.5L18.8871 3.5L0.5 3.5L0.5 4.5Z" fill="black"/>
                                </svg>
                        </span>
                    </div>
                    <button data-cart class="product_footer__btn button-card" >Купить</button>
                </div>
                
            </div>

        </div>
    </div>`
    productsContainer.insertAdjacentHTML('beforeend', productHTML);
    });
}
    