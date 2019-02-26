<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2019-02-08
 * Time: 18:33
 */

//header('Set-cookie: foo=suka'); // утснавливаем куки
?>
// до закрытия браузера

// юникс тайм = в текущем времени. секуды с полуночи с 1970 года по гринвичу
// ставится -1 это значит гарантированно в прошлое отправлена куки





<?php
//  запись cookie
//setcookie('foo', 42);
//setcookie('foo', 42, time() + 24 * 60 * 60);


// чтение cookie
//var_dump( $_COOKIE );

?>

//1024 байта - 1 килобайт (больше советуют не хранить)


///


<?php

session_start();

// генерит случайную строку



if (isset($_SESSION['counter'])) {
    $_SESSION['counter']++;

} else {
    $_SESSION['counter'] = 1;
}




?>

