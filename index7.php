<div class="ml-3 mt-3">
    <form action="" method="post">
        <label for="login">Введите логин:</label>
        <input type="text" name="login" placeholder="логин" class="form-control"><br>
        <label for="login">Введите пароль:</label>
        <input type="password" name="pass" placeholder="пароль" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
<?php
    $title_numbers = "7";
    require_once('header.php');  

    $file = fopen('login_data.txt', "r");
    $login = trim(fgets($file));
    $pass = trim(fgets($file));
    fclose($file);
    $userLogin = strip_tags($_POST["login"]);
    $userPassword = strip_tags($_POST["pass"]);
    $userLogin = trim($userLogin);
    $userPassword = trim($userPassword);
    if (!empty($_POST['login'])){
        if($userLogin === $login && $userPassword === $pass)
            echo "Доступ разрешен!";
        else 
            echo "Доступ запрещён!";
    }
    require_once('footer.php');
?>

