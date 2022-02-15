<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <meta name="description" content="Обратная связь">

    <link rel="icon" href="/public/img/favicon.ico">
    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/header.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/footer.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <ul class="breadcrumb">
        <li><a href="/">Главная</a></li>
        <li>Контакты</li>
    </ul>

    <h1 class="text-center fw-bold contacts-header">Контакты</h1>

    <div class="contacts-block">
        <a href="tel:+73852500968" class="fw-bold">
            <div class="contact-block">
                <div class="d-flex m-auto">
                <img src="/public/img/tel.png">
                <p class="text-center">+7 (3852) 500-968</p>
                </div>
            </div>
        </a>
        <a href="mailto:info@agrovitrum.ru" target="_blank" class="fw-bold">
            <div class="contact-block">
                <div class="d-flex m-auto">
                    <img src="/public/img/mail.png">
                    <p class="text-center">info@agrovitrum.ru</p>
                </div>
            </div>
        </a>
        <a class="fw-bold">
            <div class="contact-block">
                <div class="d-flex m-auto">
                <img src="/public/img/location.png" class="mt-3">
                <p class="text-center mt-3">просп. Социалистический, д.87 этаж 4, офис 2</p>
                </div>
            </div>
        </a>
    </div>

    <div id="feedBack_contact">
        <h1 class="fw-bold text-center">Напишите нам</h1>
        <div class="feedBack-block">
            <form action="/" method="post" class="form-control">
                <div class="form-main">
                    <div class="input-block-contact">
                        <input type="text" name="name" placeholder="Имя" id="name_contact"><br>
                        <input type="text" name="tel" placeholder="Телефон" id="tel_contact"><br>
                        <input type="email" name="email" placeholder="E-mail" id="email_contact"><br>
                    </div>
                    <div class="textarea-block-contact">
                        <textarea name="message" placeholder="Сообщение" id="message_contact"></textarea>
                    </div>
                </div>
                <div class="text-danger mt-2" id="errorBlockContact"><?=$data['message']?></div>
                <div class="policy-form">
                    <p class="text-black">Отправляя форму, Вы соглашаетесь с <a href="/policy/" class="text-decoration-underline text-black">политикой обработки персональных данныx</a>.</p>
                    <button type="button" class="btn p-0" id="send_message_contact">Отправить</button>
                </div>
            </form>
        </div>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $('#send_message_contact').click(function () {
            var name = $('#name_contact').val();
            var tel = $('#tel_contact').val();
            var email = $('#email_contact').val();
            var message = $('#message_contact').val();

            $.ajax({
                url: 'controllers/Contact.php',
                type: 'POST',
                cache: false,
                data: {'name' : name, 'tel' : tel, 'email' : email, 'message' : message},
                dataType: 'html',
                success: function() {
                    if(name == '')
                        $('#errorBlockContact').text('Введите имя');
                    else if(tel == '')
                        $('#errorBlockContact').text('Введите телефон');
                    else if(!parseFloat(tel))
                        $('#errorBlockContact').text('Вы ввели не телефон');
                    else if(message.length > 100)
                        $('#errorBlockContact').text('Cообщение не более 100 символов');
                    else {
                        $('#send_message_contact').text('Готово');
                        $('#errorBlockContact').text('Сообщение отправлено');
                    }
                }
            });
        });
    </script>

    <script src="/public/js/index.js"></script>
</body>
</html>
