<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная страница</title>
    <meta name="description" content="Главная страница интернет магазина">

    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">
        <h1 class="fw-bold text-center">Сокра.тим</h1>
        <?php if($_COOKIE['login'] == ''): ?>
            <p class="text-center">Вам нужно сократить ссылку? Прежде, чем это сделать<br>зарегистрируйтесь на сайте</p>
        <form action="/" method="post" class="form-control">
            <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <input type="text" name="name" placeholder="Введите логин" value="<?=$_POST['name']?>"><br>
            <input type="password" name="pass" placeholder="Введите пароль" value="<?=$_POST['pass']?>"><br>
            <div class="text-danger mt-3"><?=$data['message']?></div>
            <button class="btn">Зарегистрироваться</button>
        </form>
        <p class="text-center mt-3">Есть аккаунт? Тогда Вы можете <a href="/user/auth" class="text-info">авторизоваться</a></p>
        <?php else: ?>
            <p class="text-center">Вам нужно сократить ссылку? Сейчас мы это сделаем!</p>
        <form action="/" method="post" class="form-control">
            <input type="text" name="long_link" placeholder="Длинная ссылка" value="<?=$_POST['long_link']?>"><br>
            <input type="text" name="short_name" placeholder="Короткое название" value="<?=$_POST['short_name']?>"><br>
            <div class="text-danger mt-3"><?=$data['message']?></div>
            <button class="btn">Уменьшить</button>
        </form>
            <?php if(count($data['links']) > 0): ?>
            <h2 class="fw-bold text-center mt-5">Сокращенные ссылки</h2>
                <?php for($i = 0; $i < count($data['links']); $i++): ?>
                    <div class="link">
                        <p>Длинная: <?=$data['links'][$i]['long_link']?></p>
                        <p>Короткая: <a href="<?=$data['links'][$i]['long_link']?>">localhost/s/<?=$data['links'][$i]['short_name']?></a></p>
                        <form action="/" method="post">
                            <input type="hidden" name="id" value="<?=$data['links'][$i]['id']?>">
                            <button type="submit" class="btn delete">Удалить <i class="fas fa-trash"></i></button>
                        </form>
                    </div>
                <?php endfor; ?>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>