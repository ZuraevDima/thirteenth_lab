<div class="ml-3 mt-3">
    <form action="" method="post">
        <label for="name">Введите имя:</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" placeholder="имя" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
<?php
    $title_numbers = "8";
    require_once('header.php'); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        echo "Привет, $name";
    }

    require_once('footer.php');
?>

