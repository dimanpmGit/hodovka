<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автозапчасти от Антохи</title>
    <link rel="shortcut icon" href="images/favicon.svg" type="image/svg">
    <link rel="stylesheet" href="/template/css/reset.css">
    <link rel="stylesheet" href="/template/css/slick.css">
    <link rel="stylesheet" href="/template/css/jquery.fancybox.css">
    <link rel="stylesheet" href="/template/css/style.css">
</head>

<body>
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="header__top-inner">
                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__item">
                                <a class="menu__link" href="#">
                                  О нас
                                </a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">
                                  Клиентам
                                </a>
                            </li>
                            <li class="menu__item">
                                <a class="menu__link" href="#">
                                  Контакты
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <ul class="user__list">
                        <li class="user__list-item">
                            <a class="user__list-link menu__link" href="#">
                              Войти
                            </a>
                        </li>
                        <li class="user__list-item">
                            <a class="user__list-registration menu__link" href="#">
                              Создать аккаунт
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header__center">
            <div class="container">
                <div class="header__center-inner">
                    <a class="logo" href="#">
                        <img class="logo__img" src="/template/images/logo.svg" alt="">
                    </a>
                    <a class="basket" href="#">
                        <img src="/template/images/basket.svg" alt="корзина">
                        <p class="basket__count">0</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="header__bottom">
            <div class="container">
                <div class="header__bottom-search">
                    <form action="" class="search__form">
                        <input class="search__input" type="text" placeholder="Введите номер" id="input__plus">
                        <button class="search__btn btn" type="button" id="search__btn">Найти</button>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <section class="categories page-section">
        <div class="container">
            <div class="categories__wrapper">
                <h1 class="categories__title">
                    Каталог автозапчастей
                </h1>
                <div class="categories__inner">
                    <div class="categories__row">
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/toyota_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Toyota</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/lamborghini_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Lamborghini</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/rolls-royce_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Rolls-Royce</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/ferrari_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Ferrari</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/nissan_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Nissan</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                    </div>
                    <div class="categories__row">
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/vaz_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти ВАЗ</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/porsche_logo.svg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Porsche</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/mercedes_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Mercedes</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/volvo_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Volvo</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                        <a class="categories__item" href="#">
                            <div class="categories__item-img">
                                <img class="categories__item-img--image" src="/template/images/mitsubishi_logo.jpg" alt="">
                            </div>
                            <div class="categories__item-info">
                                <h4 class="categories__item-title">Запчасти Mitsubishi</h4>
                                <p class="categories__item-text">Подробнее</p>
                            </div>
                        </a>
                    </div>

                </div>
                <div class="categories__more">
                    <a class="categories__more-link btn" href="#">Показать еще</a>
                </div>
            </div>
        </div>
    </section>
    <section class="products">
        <div class="container">
            <div class="products-inner">
                <h3 class="product__title">Популярные товары</h3>
                <div class="tabs__wrapper">
                    <div class="tabs products-tabs">
                        <a class="tab products-tab tab-active" href="#product-tab01">запчасти</a>
                        <a class="tab products-tab" href="#product-tab02">масла</a>
                        <a class="tab products-tab" href="#product-tab03">шины</a>
                        <a class="tab products-tab" href="#product-tab04">электроника</a>
                        <a class="tab products-tab" href="#product-tab05">инструменты</a>
                        <a class="tab products-tab" href="#product-tab06">аксессуары</a>
                    </div>
                    <div class="tabs-container products-container">
                        <div id="product-tab01" class="tabs-content products-content tabs-content--active">
                            <div class="product-slider">
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item__sale" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper product-item__not-avaliable">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item__sale" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-tab02" class="tabs-content products-content">
                            <div class="product-slider">
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item product-item__sale" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-slider--item">
                                    <div class="product-item--wrapper">
                                        <button class="product-item--basket">
                                          <img src="/template/images/basket_white.svg" alt="">
                                        </button>
                                        <a class="product-item__notify-link" href="#">
                                            <span>Сообщить о поступлении</span>
                                        </a>
                                        <a class="product-item" href="#">
                                            <div class="product-item--hovertext">
                                                посмотреть товар
                                            </div>
                                            <img class="product-item--img" src="/template/images/products/pads200x200.jpg" alt="">
                                            <h4 class="product-item--title">Brembo</h4>
                                            <p class="product-item--name">Тормозные колодки</p>
                                            <p class="product-item__sale-price">5800 ₽</p>
                                            <p class="product-item__price">2800 ₽</p>
                                            <p class="product-item__notify-text">Нет в наличии</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="product-tab03" class="tabs-content products-content">Слайдер 03</div>
                        <div id="product-tab04" class="tabs-content products-content">Слайдер 04</div>
                        <div id="product-tab05" class="tabs-content products-content">Слайдер 05</div>
                        <div id="product-tab06" class="tabs-content products-content">Слайдер 06</div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__top">
                <div class="footer__top-inner">
                    <div class="footer__top-item">
                        <h6 class="footer__top-title">
                            Есть вопросы?
                        </h6>
                        <p class="footer__top-text">
                            Оставьте контакты, мы вам перезвоним
                        </p>
                    </div>
                    <div class="footer__top-item footer__top-item--right">
                        <form class="footer__form">
                            <input class="footer__form-input search__input" type="text" placeholder="Ваш номер телефона">
                            <button class="footer__form-btn btn">Отправить</button>
                        </form>
                        <div class="footer__form-confidential">
                            <p class="footer__form-confidential--text">Нажимая кнопку “Отправить”, вы соглашаетесь с
                                <span class="footer__form-confidential--link">
                              <a href="#">политикой конфиденциальности</a></span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <p class="copyright">
                    © ООО"ХОДОВКА" 2022
                </p>
                <a class="footer__bottom-email" href="mailto:hello@hodovka.su">hello@hodovka.su</a>
            </div>
        </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/template/js/slick.min.js"></script>
    <script src="/template/js/jquery.fancybox.min.js"></script>
    <script src="/template/js/main.js"></script>
</body>

</html>

<!--<div class="tabs__wrapper">
    <div class="tabs">
        <a class="tab tab-active" href="#"></a>
    </div>
    <div class="tabs-container">
        <div class="tabs-content tabs-content--active"></div>
    </div>
</div>-->