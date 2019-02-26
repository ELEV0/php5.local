<?php


//session_start(); // очень важно стартавать механизм сессии
//
//$d = $_SESSION['counter'];
//
//echo $d;

?>



<?php


echo password_hash('dima.lol', PASSWORD_DEFAULT);


$users = [
    'sasha' => '$2y$10$dcnQ.Ig2HD66BDioW8leJevfEFYb1F9ZDWf8XGXEH011UIk4j4jkq'

];

// http://php5.local/2_homework/test.php?login=sasha&&password=123456

if ( isset($users[$_GET['login']]) && password_verify($_GET['password'], $users[$_GET['login']]) ) {
    echo 'welcome';
} else {
    echo 'good bye';
}