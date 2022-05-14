<div class="logintext">
    <h2>Авторизация</h2>
    <h3><?= $message ?? ''; ?></h3>
</div>
<div class="login">
    <h3><?= app()->auth->user()->name ?? ''; ?></h3>
    <?php
    if (!app()->auth::check()):
        ?>
        <form method="post">
            <input type="text" name="login" placeholder="Логин" class="fieldlogin">
            <input type="password" name="password" placeholder="Пароль" class="fieldpassword">
            <button>Войти</button>
        </form>
</div>
<?php endif;