<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['name']?></title>
    <meta name="description" content="Регуляторы роста">

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
    <li><a href="/catalog/">Средства защиты растений</a></li>
    <li><a href="/catalog/<?=$data['type']?>/"><?=$data['category']?></a></li>
    <li><?=$data['name']?></li>
</ul>

<h1 class="fw-bold text-center mt-5 mb-5"><?=$data['name']?></h1>

<div class="product-menu">
    <p class="first">Описание</p>
    <p class="second">Общая информация</p>
    <?php if($data['action'] != ''): ?>
        <p class="third">Действие препарата</p>
    <?endif; ?>
</div>

<div class="description-first">
    <?php if($data['substance'] != ''): ?>
        <p><b>Действующее вещество: </b><?=$data['substance']?></p>
    <?endif; ?>
    <?php if($data['appointment'] != ''): ?>
        <p><b>Назначение: </b><?=$data['appointment']?></p>
    <?endif; ?>
    <?php if($data['form'] != ''): ?>
        <p><b>Препаративная форма: </b><?=$data['form']?></p>
    <?endif; ?>
    <?php if($data['culture'] != ''): ?>
        <p><b>Культура: </b><?=$data['culture']?></p>
    <?endif; ?>
    <?php if($data['rate'] != ''): ?>
        <p><b>Норма расхода: </b><?=$data['rate']?></p>
    <?endif; ?>
    <?php if($data['manufacturer'] != ''): ?>
        <p><b>Производитель: </b><?=$data['manufacturer']?></p>
    <?endif; ?>
</div>

<div class="description-second">
    <h3 class="fw-bold"><?=$data['name']?></h3>
    <?php if($data['text'] != ''): ?>
        <p><?=$data['text']?></p>
    <?endif; ?>
    <?php if($data['advantages'] != ''): ?>
        <h5 class="fw-bold mt-5">Преимущества:</h5><br>
        <p><?=$data['advantages']?></p>
    <?endif; ?>
</div>

<div class="description-third">
    <p class="fw-bold">Механизм действия</p>
    <p><?=$data['action']?></p>
</div>

<?php require 'public/blocks/footer.php' ?>

<script src="/public/js/index.js"></script>
</body>
</html>