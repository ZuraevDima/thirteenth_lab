<?php
    $title_numbers = "1-3";
    require_once('header.php');
    if (isset($_POST['city'])){
        $city = strip_tags($_POST['city']);
        echo "Ваш город: $city";
    } else {
        echo '
        <div class="ml-3">
        <h3 class="mt-3">Введите город</h3>
        <form action="" method="post">
                <input type="text" name="city" placeholder="Введите город" class="form-control"><br>
                <button type="submit" class="btn btn-primary">Отправить</button>
              </form>
        </div>';
    }
    require_once('footer.php');
?>