<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контакты</title>
    <meta name="description" content="Обратная связь">

    <link rel="stylesheet" href="/public/css/main.css?url=<?=mt_rand(0,100)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="/public/css/form.css?url=<?=mt_rand(0,100000)?>" type="text/css" charset="utf-8">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" crossorigin="anonymous">
</head>
<body>
    <?php require 'public/blocks/header.php' ?>

    <div class="container main">
        <h1 class="fw-bold text-center">Обратная связь</h1>
        <p class="text-center">Напишите нам, если у Вас есть вопросы</p>
        <form action="/contact" method="post" class="form-control">
            <input type="text" name="name" placeholder="Введите имя" value="<?=$_POST['name']?>"><br>
            <input type="email" name="email" placeholder="Введите email" value="<?=$_POST['email']?>"><br>
            <input type="text" name="age" placeholder="Введите возраст" value="<?=$_POST['age']?>"><br>
            <textarea name="message" placeholder="Введите само сообщение"><?=$_POST['message']?></textarea>
            <div class="text-danger mt-2"><?=$data['message']?></div>
            <button class="btn">Отправить</button>
        </form>
    </div>

    <?php require 'public/blocks/footer.php' ?>
</body>
</html>