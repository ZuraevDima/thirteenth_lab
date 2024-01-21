<?php
    $title_numbers = "10 etc.";
    require_once('header.php');
?>
<h3>10.</h3>
<?php
    $str = 'ahb acb aeb aeeb adcb axeb';
    $pattern = '/a.b/';

    preg_match_all($pattern, $str, $matches);
    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>11.</h3>
<?php
    $str = 'aba aca aea abba adca abea';
    $pattern = '/a..a/';

    preg_match_all($pattern, $str, $matches);
    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>12.</h3>
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

<h3>13.</h3>
<?php
    $str = 'aa aba abba abbba abca abea';
    $pattern = '/ab*a/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>14.</h3>
<?php
    $str = 'aa aba abba abbba abca abea';
    $pattern = "/a(b{0,1})a/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>15.</h3>
<?php
    $str = 'ab abab abab abababab abea';
    $pattern = "/(ab)+/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>16.</h3>
<?php
    $str = 'a.a aba aea';
    $pattern = "/a[.]a/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>17.</h3>
<?php
    $str = '2+3 223 2223';
    $pattern = "/\b2\+3\b/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>18.</h3>
<?php
    $str = '23 2+3 2++3 2+++3 345 567';
    $pattern = "/2\++3/";

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>19.</h3>
<?php
    $str = '23 2+3 2++3 2+++3 445 677';
    $pattern = '/2[+]*3/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>20.</h3>
<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    $pattern = '/[*]q+[+]/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>

<h3>21.</h3>
<?php
    $str = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
    $pattern = '/[*]q*[+]/';

    preg_match_all($pattern, $str, $matches);

    echo "<pre>";
    print_r($matches[0]);
    echo "</pre>";
?>
<h3>22.</h3>
<?php
    $str = 'aba accca azzza wwwwa';
    $pattern = '/a[^a]+a/';

    echo preg_replace($pattern, "!", $str);
?> 
<?php   
    require_once('footer.php');
?>