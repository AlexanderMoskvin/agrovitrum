<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$data['title']?></title>
    <meta name="description" content="Семена">

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
    <li>Семена</li>
</ul>

<div class="main">
    <h1 class="text-center fw-bold"><?=$data['title']?></h1>
    <div class="catalog-products">
        <?php for($i = 0; $i < count($data['products']); $i++): ?>
            <div class="catalog-product">
                <div class="d-flex justify-content-between product-title">
                    <h3 class="fw-bold mt-3"><?=$data['products'][$i]['name']?></h3>
                    <a href="/semena/<?=$data['products'][$i]['id']?>"><button class="btn">Подробнее</button></a>
                </div>
                <div class="product-info">
                    <?php if($data['products'][$i]['culture'] != ''): ?>
                        <p><b>Культура: </b><?=$data['products'][$i]['culture']?></p>
                    <?php endif; ?>
                    <?php if($data['products'][$i]['seeds_type'] != ''): ?>
                        <p><b>Тип: </b><?=$data['products'][$i]['seeds_type']?></p>
                    <?php endif; ?>
                    <?php if($data['products'][$i]['manufacturer'] != ''): ?>
                        <p><b>Производитель: </b><?=$data['products'][$i]['manufacturer']?></p>
                    <?php endif; ?>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php require 'public/blocks/footer.php' ?>
<script src="/public/js/index.js"></script>
</body>
</html>