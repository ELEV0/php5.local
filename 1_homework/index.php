
<?php
session_start();
include __DIR__ . '/functions.php';

$user = getCurrentUser();
$path = __DIR__ . '/images/';

$afterScanDir = scandir($path);
$images = [];


foreach ($afterScanDir as $item) {
    $fileType = mime_content_type($path . $item);


    if ( strpos($fileType, 'image') !== false ) {
//        $img = 'images/' . $item;
        $images[] = $item;

    }

}

//var_dump($images);
?>


<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <H1>Галерея</H1>
    <style media="all">
        .block {
            background: #ccc;
            padding: 5px;
            padding-right: 20px;
        }
    </style>
</head>
<body>



    <?php

    foreach ($images as $a) {
        ?>
        <div class="block">
            <img src="<?php echo '/1_homework/images/' . $a;; ?>">

        </div>
    <?php
    }
    ?>


<form action="getImage.php" method="post" enctype="multipart/form-data">
    <label>Новая картинка:</label>
    <input type="file" name="image"><br>
    <button type="submit">Отправить</button>
</form>



</body>
</html>
