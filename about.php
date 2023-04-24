<?php
$title = "Про нас";
require "blocks/header.php";
?>
<h1>Про нас</h1>.

<form action="check_post.php" method="post">
    <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
    <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
    <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
    <textarea name="massage" class="form-control" placeholder="Введите сообщение"></textarea><br>
    <input type="submit" value="Отправить" class="btn btn-success">
</form>

<?php
require "blocks/footer.php";
?>