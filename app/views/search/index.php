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
    <li><a>Поиск препаратов</a></li>
</ul>

<?php

$connection = mysqli_connect('localhost','u0129954_default','jU_29r5e','u0129954_agrovitrum');

mysqli_set_charset($connection, 'utf8');

if (isset($_POST['search_btn'])) {

    $search = $_POST['search'];

    $sql = mysqli_query($connection, "SELECT * FROM products WHERE (name LIKE '%$search%') OR (substance LIKE '%$search%') ORDER BY name ASC");

?>

        <div class="results"><h3>По запросу "<?=$search?>" найдено:</h3></div>

<?php while ($product = mysqli_fetch_assoc($sql)) { ?>

            <div class="search-products">
             <div class="search-product">
                 <div>
                   <h3 class="fw-bold mt-4"><a href="/<?=$product['type']?>/<?=$product['id']?>"><?=$product['name']?></h3></a>
                   <h5 class="mt-3"><?=$product['text']?></h5>
                     <p class="mt-3"><?=$product['substance']?></p>
                 </div>
             </div>
        </div>

<?php   }

 } ?>

<?php require 'public/blocks/footer.php' ?>

<script src="/public/js/index.js"></script>
</body>
</html>