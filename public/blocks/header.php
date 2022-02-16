<header class="container">
        <div class="logo">
            <img src="/public/img/clean_cat_icon.png">
            <span>Уберём всё<br> лишнее из ссылки!</span>
        </div>
        <div class="links">
            <a href="/">Главная</a>
            <a href="/contact/about">Про нас</a>
            <a href="/contact">Контакты</a>
            <?php if($_COOKIE['login'] == ''): ?>
                <a href="/user/auth">Войти</a>
            <?php else: ?>
                <a href="/user/dashboard">Личный кабинет</a>
            <?php endif; ?>
        </div>
</header>
