<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['name']?></title>
    <meta name="description" content="Удобрения">

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
    <li><a href="/catalog/semena/">Семена</a></li>
    <li><?=$data['name']?></li>
</ul>

<h1 class="fw-bold text-center mt-5 mb-5"><?=$data['name']?></h1>

<div class="product-menu">
    <p class="first">Общая информация</p>
    <p class="second">Культура</p>
</div>

<div class="description-first">
    <h3 class="fw-bold"><?=$data['name']?></h3>
    <?php if($data['text'] != ''): ?>
        <p><?=$data['text']?></p>
    <?endif; ?>
    <?php if($data['advantages'] != ''): ?>
        <h5 class="fw-bold mt-5">Преимущества:</h5><br>
        <p><?=$data['advantages']?></p>
    <?endif; ?>
    <?php if($data['yield'] != ''): ?>
        <p class="mt-5"><b>Урожайность: </b><?=$data['yield']?></p>
    <?endif; ?>
    <?php if($data['specifications'] != ''): ?>
        <p class="mt-5"><b>Основные характеристики: </b></p>
        <p><?=$data['specifications']?></p>
    <?endif; ?>
    <?php if($data['seeds_type'] != ''): ?>
        <h5 class="fw-bold mt-5">Тип: </h5>
        <p><?=$data['seeds_type']?></p>
    <?endif; ?>
    <?php if($data['manufacturer'] != ''): ?>
        <p class="mt-5"><b>Производитель: </b><?=$data['manufacturer']?></p>
    <?endif; ?>
</div>

<div class="description-second">
    <?php if($data['culture'] != ''): ?>
        <h5 class="fw-bold"><?=$data['culture']?></h5>
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
