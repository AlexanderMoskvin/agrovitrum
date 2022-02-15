<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>О компании</title>
    <meta name="description" content="О компании">

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
        <li>О компании</li>
    </ul>

    <h1 class="text-center fw-bold mt-4">О компании</h1>
    <div class="about">
        <p class="text-justify">Компания «АГРОВИТРУМ» — это прогрессивная команда профессионалов, специализирующаяся
            на поставках средств защиты растений, удобрений и комплексном агрономическом консультировании научными
            сотрудниками и практикующими агрономами.<br><br>Неудержимое стремление внедрять передовые технологии и методы
            защиты растений, оптимизируя аграрную промышленность, позволило нам стать надежным партнером ведущих
            европейских, российских и китайских производителей пестицидов и агрохимикатов.<br><br>Надежность и
            последовательное совершенствование позволяет АГРОВИТРУМ завоевывать признание и уважение наших клиентов.
            <br><br>Делая передовые решения доступными, мы обеспечиваем рост нашим Партнерам!</p>
    </div>

    <?php require 'public/blocks/footer.php' ?>

    <script src="/public/js/index.js"></script>
</body>
</html>