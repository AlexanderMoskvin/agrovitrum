<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <meta name="description" content="Компания «АГРОВИТРУМ» — это прогрессивная команда профессионалов,
    специализирующаяся на поставках средств защиты растений, удобрений и комплексном агрономическом консультировании
    научными сотрудниками и практикующими агрономами.">

    <link rel="icon" href="/public/img/favicon.ico">
    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/header.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
    <link rel="stylesheet" href="/public/css/chief-slider.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <script defer src="/public/js/chief-slider.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const slider = new ChiefSlider('.slider', {
                loop: true
            });
        });
    </script>

    <div class="slider_main">
        <div class="slider">
            <div class="slider__container">
                <div class="slider__wrapper">
                    <div class="slider__items">
                        <div class="slider__item">
                            <img src="/public/img/yachmen new.jpg">
                            <div class="slider-text-small">
                                <span class="text-center">Прогрессивные решения для сельского хозяйства</span>
                            </div>
                        </div>
                        <div class="slider__item">
                            <img src="/public/img/raps new.jpg">
                            <div class="slider-text-small">
                                <span class="text-center">Прогрессивные решения для сельского хозяйства</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="#" class="slider__control" data-slide="prev"></a>
            <a href="#" class="slider__control" data-slide="next"></a>
        </div>
    </div>

    <div class="slider-text-large">
        <span class="text-center">Прогрессивные решения для сельского хозяйства</span>
    </div>

    <h1 class="fw-bold text-center advantages-header">Наши преимущества</h1>

    <div class="our-advantages">
        <div class="advantage d-block">
             <div>
                 <img src="/public/img/sale.png">
             </div>
            <div>
                <p class="text-center fw-bold mt-3">гибкая система скидок</p>
            </div>
        </div>
        <div class="advantage d-block">
            <div>
                <img src="/public/img/call-center.png">
            </div>
            <div>
                <p class="text-center fw-bold mt-3">профессиональные консультанты</p>
            </div>
        </div>
        <div class="advantage d-block">
            <div>
                <img src="/public/img/wallet.png">
            </div>
            <div>
                <p class="text-center fw-bold mt-3">удобные способы оплаты</p>
            </div>
        </div>
    </div>

    <div class="products-main">
        <h1 class="fw-bold text-center text-white">Продукция и услуги</h1>
        <div class="products-list">
            <div class="products-block-main">
                <a href="/catalog/" class="fw-bold">
                    <div class="product">
                        <div class="photo"><img src="/public/img/product-1.png"></div>
                        <p class="text-center mt-3">Средства защиты растений</p>
                    </div>
                </a>
                <a href="/catalog/udobreniya" class="fw-bold">
                    <div class="product">
                        <div class="photo"><img src="/public/img/product-2.png"></div>
                        <p class="text-center mt-3">Удобрения</p>
                    </div>
                </a>
                <a href="/agrochemical/" class="fw-bold">
                    <div class="product">
                        <div class="photo"><img src="/public/img/service-3.png"></div>
                        <p class="text-center mt-3">Агрохимическая обработка</p>
                    </div>
                </a>
                <a href="/agroconsulting/" class="fw-bold">
                    <div class="product">
                        <div class="photo"><img src="/public/img/service-4.png" class="mt-1"></div>
                        <p class="text-center mt-3">Агроконсалтинг</p>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div id="feedBack">
        <h1 class="fw-bold text-center">Напишите нам</h1>
        <div class="feedBack-block">
            <form action="/" method="post" class="form-control">
                <div class="form-main">
                    <div class="input-block">
                        <input type="text" name="name" placeholder="Имя" id="name_main"><br>
                        <input type="text" name="tel" placeholder="Телефон" id="tel_main"><br>
                        <input type="email" name="email" placeholder="E-mail" id="email_main"><br>
                    </div>
                    <div class="textarea-block">
                        <textarea name="message" placeholder="Сообщение" id="message_main"></textarea>
                    </div>
                    <div class="tel-block">
                        <p class="tel-form"><a href="tel:+73852500968	">или звоните по телефону<br><span class="fw-bold">+7 (3852) 500-968</span></a></p>
                    </div>
                </div>
                <div class="text-danger mt-2" id="errorBlock_main"><?=$data['message']?></div>
                <div class="policy-form">
                    <p class="text-black">Отправляя форму, Вы соглашаетесь с <a href="/policy/" class="text-decoration-underline text-black">политикой обработки персональных данныx</a>.</p>
                    <button type="button" class="btn p-0" id="send_message_main">Отправить</button>
                    <p class="tel-form-mobile mt-3 text-center"><a href="tel:+73852500968	" class="text-white">или звоните по телефону<br><span class="fw-bold">+7 (3852) 500-968</span></a></p>
                </div>
            </form>
        </div>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $('#send_message_main').click(function () {
            var name = $('#name_main').val();
            var tel = $('#tel_main').val();
            var email = $('#email_main').val();
            var message = $('#message_main').val();

            $.ajax({
                url: 'controllers/Home.php',
                type: 'POST',
                cache: false,
                data: {'name' : name, 'tel' : tel, 'email' : email, 'message' : message},
                dataType: 'html',
                success: function() {
                    if(name == '')
                        $('#errorBlock_main').text('Введите имя');
                    else if(tel == '')
                        $('#errorBlock_main').text('Введите телефон');
                    else if(!parseFloat(tel))
                        $('#errorBlock_main').text('Вы ввели не телефон');
                    else if(message.length > 100)
                        $('#errorBlock_main').text('Сообщение не более 100 символов');
                    else {
                        $('#send_message_main').text('Готово');
                        $('#errorBlock_main').text('Сообщение отправлено');
                    }
                }
            });
        });
    </script>

    <script src="/public/js/index.js"></script>
</body>
</html>