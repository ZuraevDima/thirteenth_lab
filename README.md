___
# МИНИСТЕРСТВО НАУКИ И ВЫСШЕГО ОБРАЗОВАНИЯ РОССИЙСКОЙ ФЕДЕРАЦИИ ФЕДЕРАЛЬНОЕ ГОСУДАРСТВЕННОЕ БЮДЖЕТНОЕ ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ВЫСШЕГО ПРОФЕСИОНАЛЬНОГО ОБРАЗОВАНИЯ «САХАЛИНСКИЙ ГОСУДАРСТВЕННЫЙ УНИВЕРСИТЕТ»
### <p align="center">Лабораторная работа №13 «PHP».</p> 
#### <br><p align="right">Подготовил студент направления подготовки 01.03.02 «Прикладная математика и информатика»<br> Института естественных наук и техносферной безопасности<br> Зураев Дмитрий Бакенович.</p><br><p align="right">Научный руководитель:<br> Соболев Евгений Игоревич</p><br> <p align="center">Южно-Сахалинск 2023 г.</p>
___
### <p align="center">Введение</p>
<p align="justify"> В данной лабораторной работе мы будем изучать язык программирования <b>PHP</b> и его основные возможности. <b>PHP</b> является одним из наиболее популярных языков для разработки веб-приложений, а также широко используется для создания динамических веб-сайтов. 
</p>

### <p align="center">Цели</p>
<p align="justify">Изучить основы работы с формами и регулярными выражениями в PHP, поработать со встроенными регулярными выражениями. Понять их принципы работы, научиться обрабатывать данные с формы.</p>

### <p align="center">Задачи</p>
<p align="justify">Применить технологию PHP.</p>

____________________
## <p align="center">_Решение_</p>
<h3>Файл header.php</h3>

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title_numbers?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
```
<h3>Файл footer.php</h3>

```html
</body>
</html>
```
1.	Спросите город пользователя с помощью формы. Результат запишите в переменную `$city`. Выведите на экран фразу 'Ваш город: %Город%'.
2.	Решите предыдущую задачу так, чтобы пользователь не мог вводить теги и сломать сайт.
3.	Сделайте так, чтобы форма после отправки скрывалась.
```PHP
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
```
4.	Спросите имя пользователя с помощью формы. Результат запишите в переменную `$name`. Выведите на экран фразу 'Привет, %Имя%'.
5.	Спросите у пользователя имя, возраст, а также попросите его ввести сообщение (его сделайте в `textarea`). Выведите эти данные на экран в формате, приведенном под данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто удаляйте их) и таким образом сломать сайт
```PHP
<?php
    $title_numbers = "4-5";
    require_once('header.php');
?>
```
```html
<div class="ml-3 mt-3">
    <form action="" method="post">
        <input type="text" name="name" placeholder="Введите имя" class="form-control"><br>
        <input type="text" name="age" placeholder="Введите возраст" class="form-control"><br>
        <textarea name="message" placeholder="Ваше сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
```
```php
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
```
6.	Спросите возраст пользователя. Если форма была отправлена и введен возраст, то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее.
```PHP 
<?php
    $title_numbers = "6";
    require_once('header.php');
    if (isset($_POST['age'])) {
        $age = $_POST['age'];
        echo "Ваш возраст: " . $age;
    } else {
?>
```
```html
    <div class="ml-3 mt-3">
        <form action="" method="post">
            <label for="age">Введите ваш возраст:</label>
            <input type="text" name="age" placeholder="Введите возраст" class="form-control"><br>
            <button type="submit" class="btn btn-success">Отправить</button>
        </form> 
    </div>
```
```php
<?php
    }
?>
<?php
    require_once('footer.php');
?>
```
7.	Спросите у пользователя логин и пароль (в браузере должен быть звездочками). Сравните их с логином `$login` и паролем `$pass`, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.
```html 
    <div class="ml-3 mt-3">
    <form action="" method="post">
        <label for="login">Введите логин:</label>
        <input type="text" name="login" placeholder="логин" class="form-control"><br>
        <label for="login">Введите пароль:</label>
        <input type="password" name="pass" placeholder="пароль" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
```
```php
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
```
8.	Спросите имя пользователя с помощью формы. Результат запишите в переменную `$name`. Сделайте так, чтобы после отправки формы значения ее полей не пропадали.
```html
    <div class="ml-3 mt-3">
    <form action="" method="post">
        <label for="name">Введите имя:</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" placeholder="имя" class="form-control"><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
```
```php
<?php
    $title_numbers = "8";
    require_once('header.php'); 

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        echo "Привет, $name";
    }

    require_once('footer.php');
?>
```
9.	Спросите у пользователя имя, а также попросите его ввести сообщение (`textarea`). Сделайте так, чтобы после отправки формы значения его полей не пропадали.
```PHP
<?php
    $title_numbers = "9";
    require_once('header.php');
?>
```
```html
<div class="ml-3 mt-3">
    <form action="" method="post">
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>" placeholder="Введите имя" class="form-control"><br>
        <textarea name="message" value="<?php echo isset($_POST['message']) ? $_POST['message'] : '';?>" placeholder="Ваше сообщение" class="form-control"></textarea><br>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form> 
</div>
```
```php
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
```
10.	Дана строка 'ahb acb aeb aeeb adcb axeb'. Напишите регулярку, которая найдет строки ahb, acb, aeb по шаблону: буква 'a', любой символ, буква 'b'.
```PHP
<?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    $pattern = '/a.b/';

    preg_match_all($pattern, $str, $matches);
    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
11.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba adca abea по шаблону: буква 'a', 2 любых символа, буква 'a'.
```PHP
<?php
    $str = 'aba aca aea abba adca abea';
    $pattern = '/a..a/';

    preg_match_all($pattern, $str, $matches);
    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
12.	Дана строка 'aba aca aea abba adca abea'. Напишите регулярку, которая найдет строки abba и abea, не захватив adca. Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз, буква 'a'. 
```PHP
<?php
//1
    $str = 'aba aca aea abba adca abea';
    $pattern = '/a(?!dca).{2}a/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
//2
    $str = 'aa aba abba abbba abca abea';
    $pattern = '/ab+a/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
13.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba, abba, abbba по шаблону: буква 'a', буква 'b' любое количество раз (в том числе ниодного раза), буква 'a'. 
```PHP
<?php
    $str = 'aa aba abba abbba abca abea';
    $pattern = '/ab*a/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
14.	 Дана строка 'aa aba abba abbba abca abea'. Напишите регулярку, которая найдет строки aa, aba по шаблону: буква 'a', буква 'b' один раз или ниодного, буква 'a'. 
```PHP
<?php
    $str = 'aa aba abba abbba abca abea';
    $pattern = "/a(b{0,1})a/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
15.	Дана строка 'ab abab abab abababab abea'. Напишите регулярку, которая найдет строки по шаблону: строка 'ab' повторяется 1 или более раз. 
```PHP
<?php
    $str = 'ab abab abab abababab abea';
    $pattern = "/(ab)+/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
16.	Дана строка 'a.a aba aea'. Напишите регулярку, которая найдет строку a.a, не захватив остальные. 
```PHP
<?php
    $str = 'a.a aba aea';
    $pattern = "/a[.]a/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
17.	 Дана строка '2+3 223 2223'. Напишите регулярку, которая найдет строку 2+3, не захватив остальные. 
```PHP
<?php
    $str = '2+3 223 2223';
    $pattern = "/\b2\+3\b/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
18.	 Дана строка '23 2+3 2++3 2+++3 345 567'. Напишите регулярку, которая найдет строки 2+3, 2++3, 2+++3, не захватив остальные (+ может быть любое количество
```PHP
<?php
    $str = '23 2+3 2++3 2+++3 345 567';
    $pattern = "/2\++3/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
19.	 Дана строка '23 2+3 2++3 2+++3 445 677'. Напишите регулярку, которая найдет строки 23, 2+3, 2++3, 2+++3, не захватив остальные.
```PHP
<?php
    $str = '23 2+3 2++3 2+++3 445 677';
    $pattern = '/2[+]*3/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
20.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *q+, *qq+, *qqq+, не захватив остальные. 
```PHP
<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    $pattern = '/[*]q+[+]/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
21.	 Дана строка '*+ *q+ *qq+ *qqq+ *qqq qqq+'. Напишите регулярку, которая найдет строки *+, *q+, *qq+, *qqq+, не захватив остальные. 
```PHP
<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    $pattern = '/[*]q*[+]/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
```
22.	Дана строка 'aba accca azzza wwwwa'. Напишите регулярку, которая найдет все строки по краям которых стоят буквы 'a', и заменит каждую из них на '!'. Между буквами a может быть любой символ (кроме a). 
```PHP
<?php
    $str = 'aba accca azzza wwwwa';
    $pattern = '/a[^a]+a/';

    echo preg_replace($pattern, "!", $str);
?>
```
## <p align="center">_Вывод_</p>
В ходе выполнения данной лабораторной работы я ознакомился с формами в PHP и с регулярынми выражениями. Узнал много способов отсекать определенные символы в строке, как сохранять значения в объекте на форме, как скрывать форму, обрабатывать информацию с неё.
