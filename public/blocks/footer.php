<footer>
    <div class="footer-top">
        <div class="footer-top-block">
            <div class="logo-footer">
                <img src="/public/img/logo.png">
            </div>
            <div class="footer-links">
                <div>
                    <p><a href="/" class="p-2">Главная</a></p>
                </div>
                <div>
                    <p><a href="/contact/about" class="p-2">О компании</a></p>
                </div>
                <div>
                    <p><a href="/articles" class="p-2">Новости</a></p>
                </div>
                <div>
                    <p><a href="/contact" class="p-2">Контакты</a></p>
                </div>
            </div>
            <div class="social">
                <button><a href="https://www.instagram.com/agrovitrum/" target="_blank"><img src="/public/img/insta.png"></a></button>
            </div>
        </div>
    </div>
        <div class="footer-bottom">
            <div class="footer-bottom-block">
                <p>&copy2021 Агровитрум. Все права защищены</p>
            </div>
        </div>
</footer>

<div id="hideBlock">
    <div class="hiddenBlock">
        <div class="hiddenClose"><img src="/public/img/close_icon.png"></div>
        <h1 class="fw-bold text-center">Напишите нам</h1>
        <div class="hidden-feedBack-block">
        <form action="#" method="post" class="form-control">
            <div class="hidden-form-main">
                <div class="input-block-hidden">
            <input type="text" name="name" placeholder="Имя" id="name_hidden"><br>
            <input type="text" name="tel" placeholder="Телефон" id="tel_hidden"><br>
            <input type="email" name="email" placeholder="E-mail" id="email_hidden"><br>
                </div>
                <div class="textarea-block-hidden">
            <textarea name="message" placeholder="Сообщение" id="message_hidden"></textarea>
                </div>
            </div>
            <div class="text-danger mt-2" id="errorBlock_hidden"><?=$data['message']?></div>
            <p>Отправляя форму, Вы соглашаетесь с <a href="/policy/" class="text-decoration-underline">политикой обработки персональных данныx</a>.</p>
            <button type="button" class="btn" id="send_message_hidden">Отправить</button>
        </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    $('#send_message_hidden').click(function () {
        var name = $('#name_hidden').val();
        var tel = $('#tel_hidden').val();
        var email = $('#email_hidden').val();
        var message = $('#message_hidden').val();

        $.ajax({
            url: 'controllers/Home.php',
            type: 'POST',
            cache: false,
            data: {'name' : name, 'tel' : tel, 'email' : email, 'message' : message},
            dataType: 'html',
            success: function() {
                if(name == '')
                    $('#errorBlock_hidden').text('Введите имя');
                else if(tel == '')
                    $('#errorBlock_hidden').text('Введите телефон');
                else if(!parseFloat(tel))
                    $('#errorBlock_hidden').text('Вы ввели не телефон');
                else if(message.length > 100)
                    $('#errorBlock_hidden').text('Cообщение не более 100 символов');
                else {
                    $('#send_message_hidden').text('Готово');
                    $('#errorBlock_hidden').text('Сообщение отправлено');
                }
            }
        });
    });
</script>



