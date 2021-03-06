<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width">
    <meta name="author" content="Чумаков Игорь">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" href="/css/style.css">
    <title>SEO Простор</title>
</head>
<body>
    <header>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="logo d-flex flex-column">
                    <img src="/img/logo.png" alt="">
                    <p>Завод светопрозрачных конструкций</p>
                </div>
                <div class="d-none d-md-flex call_contact_center">
                    <div class="d-flex flex-column">
                        <a href="tel:+78462125253" class="phone">8 (846) 212-52-53</a>
                        <p>Контакт-центр Режим работы 24/7</p>
                        <p>Звонок бесплатный</p>
                    </div>
                    <div class="call_center_img">
                        <img src="/img/call_center.png" alt="">
                    </div>
                </div>
                <div class="d-flex d-md-none icon_phone">
                    <img src="/img/phone.png" alt="">
                </div>
                <div class="d-flex d-md-none menu_burger">
                   <span></span>
                </div>
                <ul class="d-md-none d-block menu_burger_links">
                    <li><a>О компании</a></li>
                    <li><a>Партнерам</a></li>
                </ul>
            </div>
            <hr class="d-none d-md-block">
            <ul class="d-none d-md-flex links">
                <li class="active"><a>О компании</a></li>
                <li><a>Партнерам</a></li>
            </ul>
        </div>
    </header>

    <section class="main_slider">
        <div class="slider d-flex">
            <div class="slider_item active">
                <div class="background-image" style="background-image: url('/img/background_slider.png');"></div>
                <div class="background-gradient"></div>
                <div class="container">
                    <h2>Пластиковые окна от производителя 1</h2>
                    <strong>ЗАПОЛНЕНИЕ СТЕКЛОПАКЕТА ИНЕРТНЫМ ГАЗОМ в подарок*</strong>
                    <p>*Акция до 1 мая</p>
                    <a class="btn request_form" data-bs-toggle="modal" data-bs-target="#request_form" data-bs-whatever="@mdo">Заявка на замер</a>
                </div>
            </div>
            <div class="slider_item">
                <div class="background-image" style="background-image: url('/img/background_slider.png');"></div>
                <div class="background-gradient"></div>
                <div class="container">
                    <h2>Пластиковые окна от производителя 2</h2>
                    <strong>ЗАПОЛНЕНИЕ СТЕКЛОПАКЕТА ИНЕРТНЫМ ГАЗОМ в подарок*</strong>
                    <p>*Акция до 1 мая</p>
                    <a class="btn request_form" data-bs-toggle="modal" data-bs-target="#request_form" data-bs-whatever="@mdo">Заявка на замер</a>
                </div>
            </div>
            <div class="slider_item">
                <div class="background-image" style="background-image: url('/img/background_slider.png');"></div>
                <div class="background-gradient"></div>
                <div class="container">
                    <h2>Пластиковые окна от производителя</h2>
                    <strong>ЗАПОЛНЕНИЕ СТЕКЛОПАКЕТА ИНЕРТНЫМ ГАЗОМ в подарок*</strong>
                    <p>*Акция до 1 мая</p>
                    <a class="btn request_form" data-bs-toggle="modal" data-bs-target="#request_form" data-bs-whatever="@mdo">Заявка на замер</a>
                </div>
            </div>
        </div>
        <div class="nav_slider">
            <div class="container d-flex justify-content-between">
                <div class="arrows d-flex">
                    <a class="arrow arrow_left">
                        <img src="/img/Arrow.png" alt="">
                    </a>
                    <a class="arrow arrow_right">
                        <img src="/img/Arrow.png" alt="">
                    </a>
                </div>
                <ul class="dots d-flex">

                </ul>
            </div>
        </div>
    </section>

    <div class="modal fade" id="request_form" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="request_form_label">New message</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Recipient:</label>
                    <input type="text" class="form-control" id="recipient-name">
                </div>
                <div class="mb-3">
                    <label for="message-text" class="col-form-label">Message:</label>
                    <textarea class="form-control" id="message-text"></textarea>
                </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send message</button>
            </div>
            </div>
        </div>
    </div>

    <section class="about">
        <div class="container">
            <h2>о компании</h2>
            <ul>
                <li>
                    <div class="img">
                        <img src="/img/2flags.png" alt="">
                        <div class="likes">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                        </div>
                    </div>
                    <p>Онлайн-калькулятор поможет
                        вам подобрать нужную конфигурацию
                        окна и определится с бюджетом;</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/2flags.png" alt="">
                        <div class="likes">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                        </div>
                    </div>
                    <p>Наша компания предлагает услугу «мобильный офис»
                        - возможность заключения договора на дому или в
                        любом удобном для вас месте;</p>
                </li>
                <li>
                    <div class="img">
                        <img src="/img/2flags.png" alt="">
                        <div class="likes">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                            <img src="/img/like.png" alt="">
                        </div>
                    </div>
                    <p>Опытные менеджеры
                        помогут вам подобрать
                        наиболее удачный вариант
                        для решения ваших задач;</p>
                </li>
            </ul>
        </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="d-flex justify-content-between">
                <div class="logo d-flex flex-column">
                    <img src="/img/logo.png" alt="">
                    <p>Завод светопрозрачных конструкций</p>
                </div>

                <div class="footer_nav d-flex justify-content-between">
                    <ul>
                        <li><a>О компании</a></li>
                        <li><a>Партнерам</a></li>
                    </ul>
                    <div class="contacts">
                        <p>Контакты</p>
                        <div class="contact">
                            <img src="/img/footer_phone.png" alt="">
                            <span>8(846)212-52-53</span>
                        </div>
                        <div class="contact">
                            <img src="/img/footer_mail.png" alt="">
                            <span>абвг@gmail.com</span>
                        </div>
                        <div class="contact">
                            <img src="/img/footer_home.png" alt="">
                            <span>Самара, ул. Победы 141</span>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </footer>
    <section class="copyright">
        <div class="container d-flex">
            <span>©2022</span>
            <span>Все права защищены</span>
        </div>
    </section>
    <script src="/js/jquery.js"></script>
    <script src="/js/scripts.js"></script>
</body>
</html>