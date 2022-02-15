<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Средства защиты растений</title>
    <meta name="description" content="Средства защиты растений">

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
    <li>Семена и Удобрения</li>
</ul>

<div class="catalog-main">
    <h1 class="fw-bold text-center mt-5">Семена и Удобрения</h1>
    <div>
        <div class="products-block">
            <a href="/catalog/semena/" class="fw-bold">
                <div class="product catalog">
                    <p class="text-center mt-3 text-white">Семена</p>
                </div>
            </a>
            <a href="/catalog/udobreniya/" class="fw-bold">
                <div class="product catalog">
                    <p class="text-center mt-3 text-white">Удобрения</p>
                </div>
            </a>
        </div>
    </div>
</div>

<?php require 'public/blocks/footer.php' ?>
<script src="/public/js/index.js"></script>
</body>
</html>
