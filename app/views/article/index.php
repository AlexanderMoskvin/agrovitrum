<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['title']?></title>
    <meta name="description" content="Гербициды">

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
    <li><a href="/articles/">Новости</a></li>
    <li><?=$data['title']?></li>
</ul>

<div class="article">
    <h1 class="fw-bold text-center"><?=$data['title']?></h1>
    <?php if($data['image'] != ''): ?>
        <img class="article-picture" src="/public/img/<?=$data['image']?>">
    <?endif; ?>
    <p class="text-justify mt-5"><?=$data['text']?></p>
</div>

<?php require 'public/blocks/footer.php' ?>
<script src="/public/js/index.js"></script>
</body>
</html>