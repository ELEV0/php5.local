<?php
session_start();
include __DIR__ . '/functions.php';

if ( null == getCurrentUser() ) {
    header('Location:' . '/1_homework/login.php');
    exit;
}

$user = getCurrentUser();

if ( isset($_FILES['image']) ) {
    $image = $_FILES['image'];

    $imageName = $image['name'];
    $imagePath = $image['tmp_name'];
    $imageType = $image['type'];

    if ( strpos($imageType, 'image') !== false ) {
        move_uploaded_file($imagePath, __DIR__ . '/images/' . $imageName);
        nameLog($user, $imageName);
        header('Location:' . '/1_homework/index.php');
        exit;
    } else {
        echo 'Что-то пошло не так';
        ?>
<form action="login.php">
    <button type="submit">back</button>
</form>

<?php
    }
}
