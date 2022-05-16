<!doctype html>
<html lang="en">
<head>
    <title>Pop it MVC</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/pop-it-mvc/views/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="wrapper">
    <header>
        <div class="headerdiv">
            <nav>
                <a class="headertextwhite" href="<?= app()->route->getUrl('/hello') ?>">Главная</a>
                <a class="headertextwhite bruhwork" href="<?= app()->route->getUrl('/worker') ?>">Сотрудники</a>
                <a class="headertextwhite bruhdisc" href="<?= app()->route->getUrl('/disciplines') ?>">Дисциплины</a>
                <?php
                if (!app()->auth::check()):
                    ?>
                    <a class="headertextwhite bruhlogin" href="<?= app()->route->getUrl('/login') ?>">Вход</a>
                    <a class="headertextwhite" href="<?= app()->route->getUrl('/signup') ?>">Регистрация</a>
                <?php
                else:
                    ?>
                    <a class="headertextwhite bruhworker" href="<?= app()->route->getUrl('/newworker') ?>">Добавить сотрудника</a>
                    <a class="headertextwhite bruhexit" href="<?= app()->route->getUrl('/logout') ?>">Выход</a>
                <?php
                endif;
                ?>
            </nav>
        </div>
    </header>
    <main>
        <?= $content ?? '' ?>
    </main>
</div>
    <footer>
        <div class="footerdiv">
            <div class="contactinfo">
                <p class="textwhitebig">Контактная информация</p>
            </div>
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