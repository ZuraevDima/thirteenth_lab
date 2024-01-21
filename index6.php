<?php
    $title_numbers = "6";
    require_once('header.php');
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        echo "Ваш возраст: " . $age;
    } else {
?>

    <div class="ml-3 mt-3">
        <form action="" method="post">
            <label for="age">Введите ваш возраст:</label>
            <input type="text" name="age" placeholder="Введите возраст" class="form-control"><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form> 
    </div>

<?php
    }
?>
<?php
    require_once('footer.php');
?>
