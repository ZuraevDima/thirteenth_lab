<?php
    $title_numbers = "4-5";
    require_once('header.php');
?>
<div class="ml-3 mt-3">
    <form action="" method="post">
        <input type="text" name="name" placeholder="Введите имя" class="form-control"><br>
        <input type="text" name="age" placeholder="Введите возраст" class="form-control"><br>
        <textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
<?php
    if (isset($_POST['name'])){
        $name = strip_tags($_POST['name']); 
        $age = strip_tags($_POST['age']); 
        $message = strip_tags($_POST['message']); 
        
        echo "Имя: " .  htmlspecialchars($name) . "<br>";
        echo "Возраст: " . htmlspecialchars($age) . "<br>";
        echo "Сообщение: " . htmlspecialchars($message) . "<br>";
    }
?>
<?php
    require_once('footer.php');
?>
