<?php

// getUsersList() - возвращает массив всех пользователей и хэшей их паролей
function getUsersList() {
    $data_from_return = include __DIR__ . '/users.php';
    $persons = $data_from_return['persons'];
    return $persons;
}

// existsUser($login) - существует ли пользователь с заданным логином?
function existsUser($login) {
    $users = getUsersList();

    return isset($users[$login]);
}

// сheckPassword($login, $password) - возвращает true, когда существует пользователь с указанным логином и паролем
function checkPassword($login, $password) {

    if (existsUser($login)) {
        $users = getUsersList();
        return password_verify($password, $users[$login]);
    }
    return false;
}

// getCurrentUser() - возвращает имя вошедшего на сайт пользователя, либо null
function getCurrentUser() {
    if (isset($_SESSION['user'])) {
        return $_SESSION['user'];
    }
    return null;
}


function nameLog($user, $imageName) {
    $path = __DIR__ . '/images/log.txt';
    $date = date("D M j G:i:s T Y");
    $data = [$user, ' | ', $date, ' | ', $imageName];
    file_put_contents($path, $data, FILE_APPEND);
    file_put_contents($path, "\n", FILE_APPEND);
}


