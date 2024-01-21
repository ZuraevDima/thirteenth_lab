<?php
    $title_numbers = "9";
    require_once('header.php');
?>
<div class="ml-3 mt-3">
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" placeholder="Введите имя" class="form-control"><br>
        <textarea name="message" value="<?php echo isset($_POST['message']) ? $_POST['message'] : '';?>" placeholder="Ваше сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $message = $_POST['message'];
        echo "Привет, $name<br>";
        echo "Ваше сообщение: $message";
    }
?>
<?php
    require_once('footer.php');
?>
