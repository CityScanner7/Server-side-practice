<!doctype html>
<html lang="en">
<head>
    <title>Pop it MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/pop-it-mvc/views/css/style.css"
</head>
<body>
<header>
    <div class="headerdiv">
        <nav>
            <a class="headertextwhite" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
            <a class="headertextwhite" href="<?= app()->route->getUrl('/workers') ?>">Сотрудники</a>
            <a class="headertextwhite bruh" href="<?= app()->route->getUrl('/disciplines') ?>">Дисциплины</a>
            <?php
            if (!app()->auth::check()):
                ?>
                <a class="headertextwhite" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                <a class="headertextwhite" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
            <?php
            else:
                ?>
                <a class="headertextwhite bruh1" href="<?= app()->route->getUrl('/logout') ?>">Выход (<?= app()->auth::user()->name ?>)</a>
            <?php
            endif;
            ?>
        </nav>
    </div>
</header>
<main>
    <?= $content ?? '' ?>
</main>
<footer>
    <div class="footerdiv">
        <p class="textwhite">Контактная информация</p>
        <div class="contacttable">
        <p class="textwhite">Телефон: +79138441232</p>
        <p class="textwhite">Факс: +79557223210</p>
        <p class="textwhite">E-mail: sosh309@mail.ru</p>
        <p class="textwhite">Адресс: Ул. Шиша 69</p>
        </div>
    </div>
</footer>

</body>
</html>