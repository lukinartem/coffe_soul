<?php session_start();?>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    
    <title>coffe_soul</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/> 
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/media.css">
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header__nav">
                <a href="index.php" class="header__nav-logo">
                    <img src="./img/header/logo.svg" alt="logo" class="logo__img">
                </a>
                <nav class="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" href="#section_main" class="nav-link">Главная</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_about_us" class="nav-link">О нас</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_menu" class="nav-link">Меню</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_gallery" class="nav-link">Галерея</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_promo" class="nav-link">Акции</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_coffe_to_go" class="nav-link">Кофе с собой</a></li>
                        <li class="nav-item">
                            <a href="index.php#section_contacts" class="nav-link">Контакты</a></li>
                    </ul>
                </nav>
                <div class="header__adress">
                    <a href="#" class="header__adress-text">г. Ульяновск <br>
                        ул. Северная, 8а</a>
                    <a href="tel:+79008889090" class="header__adress-number">+79008889090</a>
                </div>
                <div class="header__nav__burger_container">
                    <div class="burger">
                        <span class="line line1"></span ><span class="line line2"></span><span class="line line3"></span>
                    </div> 
                </div>
            </div>
        </div>
    </header>   
        <section class="mobile_menu">
            <div class="container">
            <nav class="mobile_menu__nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#section_main" class="nav-link">Главная</a></li>
                    <li class="nav-item"><a href="#section_about_us" class="nav-link">О нас</a></li>
                    <li class="nav-item"><a href="#section_menu" class="nav-link">Меню</a></li>
                    <li class="nav-item"><a href="#section_gallery" class="nav-link">Галерея</a></li>
                    <li class="nav-item"><a href="#section_promo" class="nav-link">Акции</a></li>
                    <li class="nav-item"><a href="#section_coffe_to_go" class="nav-link">Кофе с собой</a></li>
                    <li class="nav-item"><a href="#section_contacts" class="nav-link">Контакты</a></li>
                </ul>
            </nav>
        </div>
        </section>
    <main class="main">
        <div class="main_container">
            <section class="section_cofee_to_go_title">                   
                <h2 class="cofee_to_go__title title">Кофе для Вас</h2>
                <div class="login">
                <?php if (isset($_SESSION['id'])): ?>
                            <a href="#" class="login_btn button" id = "login-active">
                            <img class="login-img" src="./img/index2/profile.svg" alt="profile">
                                <?php echo $_SESSION['login']; ?>
                            </a>
                            <ul class="login-list">
                            <li class="login-item"><a href="#" class="login-link">Заказы</a></li>
                            <li class="login-item"><a href="php/logout.php" class="login-link">Выйти</a></li>
                            </ul>
                            
                        <?php else: ?>
                            <a href="./loginhtml.php" class="login_btn button">Войти</a> 
                            
                        <?php endif; ?>
                </div>
                
            </section>
            <section class="cofee_to_go_cards">
                <div class="cards">
                    <div class="row" id="products-container">
                        <!-- <div class="card" data-id="01">
                            <div class="card_wrapper">
                                <div class="product_prewiew">
                                    <img src="./img/index2/card/Vectary_texture.webp" alt="Bruno Brazilia" class="product_img img">
                                </div>
                                <h4 class="product_title">Bruno Brazilia</h4>
                                <div class="product_text">
                                    С нотками карамели, сливок, какао, темного шоколада и ванили
                                </div>
                                <span class="product_weight">200 г</span>
                                <div class="product_footer">
                                    <div class="product_footer__price">
                                        <span class="product_footer__price-text">Цена</span>
                                        <span class="product_footer__price-number">200 ₽</span>
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
                        </div>
                        <div class="card" data-id="02">
                            <div class="card_wrapper">
                                <div class="product_prewiew">
                                    <img src="./img/index2/card/Vectary_texture.webp" alt="Bruno Brazilia" class="product_img img">
                                </div>
                                <h4 class="product_title">Bruno Brazilia</h4>
                                <div class="product_text">
                                    С нотками карамели, сливок, какао, темного шоколада и ванили
                                </div>
                                <span class="product_weight">200 г</span>
                                <div class="product_footer">
                                    <div class="product_footer__price">
                                        <span class="product_footer__price-text">Цена</span>
                                        <span class="product_footer__price-number">100 ₽</span>
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
                        </div>
                        <div class="card" data-id="03">
                            <div class="card_wrapper">
                                <div class="product_prewiew">
                                    <img src="./img/index2/card/Vectary_texture.webp" alt="Bruno Brazilia" class="product_img img">
                                </div>
                                <h4 class="product_title">Bruno Brazilia</h4>
                                <div class="product_text">
                                    С нотками карамели, сливок, какао, темного шоколада и ванили
                                </div>
                                <span class="product_weight">200 г</span>
                                <div class="product_footer">
                                    <div class="product_footer__price">
                                        <span class="product_footer__price-text">Цена</span>
                                        <span class="product_footer__price-number">400 ₽</span>
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
                        </div>
                        <div class="card" data-id="04">
                            <div class="card_wrapper">
                                <div class="product_prewiew">
                                    <img src="./img/index2/card/Vectary_texture.webp" alt="Bruno Brazilia" class="product_img img">
                                </div>
                                <h4 class="product_title">Bruno Brazilia</h4>
                                <div class="product_text">
                                    С нотками карамели, сливок, какао, темного шоколада и ванили
                                </div>
                                <span class="product_weight">200 г</span>
                                <div class="product_footer">
                                    <div class="product_footer__price">
                                        <span class="product_footer__price-text">Цена</span>
                                        <span class="product_footer__price-number">250 ₽</span>
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
                        </div>
                        <div class="card" data-id="05">
                            <div class="card_wrapper">
                                <div class="product_prewiew">
                                    <img src="./img/index2/card/Vectary_texture.webp" alt="Bruno Brazilia" class="product_img img">
                                </div>
                                <h4 class="product_title">Bruno Brazilia</h4>
                                <div class="product_text">
                                    С нотками карамели, сливок, какао, темного шоколада и ванили
                                </div>
                                <span class="product_weight">200 г</span>
                                <div class="product_footer">
                                    <div class="product_footer__price">
                                        <span class="product_footer__price-text">Цена</span>
                                        <span class="product_footer__price-number">150 ₽</span>
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
                                    </div> -->
                                    
                                <!-- </div> -->
    
                            <!-- </div> -->
                        <!-- </div> -->
                    </div>
                    
                </div>
                <div class="basket">
                    <!-- <a href="#" class="basket__btn button-card">Войти</a> -->
                    <div class="basket_img">
                        <img src="./img/index2/img2.webp" alt="image" class="img">
                    </div>
                    <div class="basket__card">
                        <header class="basket__card__header">
                            <div class="card_wrapper">
                                <h3 class="basket__card__title">Корзина</h3>
    
                            </div>                       
                        </header>
                        <div class="basket__card__content__status">Корзина пуста</div>
                        <div class="content_wrapper">
                            
                            <!-- <div class="basket__card__content">
                                <div class="basket__card__content__img">
                                    <img src="" alt="" class="img">
                                </div>
                                <div class="basket__card__content__desc">
                                    <h4 class="basket__card__content__title title"></h4>
                                    <div class="basket__card__content__weight"></div>
                                </div>
                                <div class="basket__card__content__details">
                                    
                                    <div class="basket__card__content__count product_count">
                                        <span class="product_count__circuit-minus--small product_count__circuit-minus" data-action="minus">
                                            <svg data-action="minus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.75935 3.64645C0.564089 3.84171 0.564089 4.15829 0.75935 4.35356L3.94133 7.53554C4.13659 7.7308 4.45318 7.7308 4.64844 7.53554C4.8437 7.34027 4.8437 7.02369 4.64844 6.82843L1.82001 4L4.64844 1.17158C4.8437 0.976313 4.8437 0.65973 4.64844 0.464468C4.45318 0.269206 4.13659 0.269206 3.94133 0.464468L0.75935 3.64645ZM19.5 3.5L1.1129 3.5L1.1129 4.5L19.5 4.5L19.5 3.5Z" fill="black"/>
                                                </svg>
                                        </span>
                                        <span class="basket__card__value product_count__value" data-counter>1</span>
                                        <span class="product_count__circuit-plus--small product_count__circuit-plus" data-action="plus">
                                            <svg data-action="plus" width="20" height="8" viewBox="0 0 20 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M19.2407 4.35355C19.4359 4.15829 19.4359 3.84171 19.2407 3.64644L16.0587 0.464464C15.8634 0.269202 15.5468 0.269202 15.3516 0.464464C15.1563 0.659726 15.1563 0.976309 15.3516 1.17157L18.18 4L15.3516 6.82842C15.1563 7.02369 15.1563 7.34027 15.3516 7.53553C15.5468 7.73079 15.8634 7.73079 16.0587 7.53553L19.2407 4.35355ZM0.5 4.5L18.8871 4.5L18.8871 3.5L0.5 3.5L0.5 4.5Z" fill="black"/>
                                                </svg>
                                        </span>
                                    </div>
                                    <div class="basket__card__content__price"></div>
                                </div>
                            </div> -->
                        </div>
                        
                        <footer class="basket__card__footer">
                            <div class="card_wrapper card_footer_wrapper">
                                <div class="basket__card__footer-price">
                                    <span class="price-text">Сумма заказа:</span>
                                    <span class="price-number">0 ₽</span>
                                </div>
                            </div>

                            <?php if (isset($_SESSION['id'])): ?>
                                <a data-order type="submit" data-id="OrderClick" href="#" class="basket__card__btn button-card">Оформить заказ</a>
                            
                            <?php else: ?>
                                <a href="./loginhtml.php" class="basket__card__btn button-card">Оформить заказ</a>
                            
                            <?php endif; ?>    

                        </footer>        
                    </div>
                </div> 
            </section>
            
        </div>  
        
    </main>
    <footer class="footer_codee_to_go">
        <div class="basket_icon">
            <div class="basket_icon__value"></div>
            <div class="basket_icon__img">
                <img src="./img/index2/basket/basket.webp" alt="basket">
            </div>
        </div>
    </footer>

    <script src="./js/renderproducts.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="./js/main.js"></script>
    <!-- <script src="./js/order.js"></script> -->

</body>
</html>