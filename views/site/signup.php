<div class="signuptext">
<h2 class="stop">Регистрация</h2> <h2>нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
</div>
<div class="signup">
<form method="post">
    <input type="text" name="name" placeholder="Имя" class="fieldname">
    <input type="text" name="login" placeholder="Логин" class="fieldlogin lol">
    <input type="password" name="password" placeholder="Пароль" class="fieldpassword">
    <button>Зарегистрироваться</button>
</form>
</div>