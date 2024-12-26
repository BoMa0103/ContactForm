<?php

    require_once dirname(__DIR__).'\model\articles.php';

    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        header('Location: /');
        exit;
    }

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $patronymic = $_POST['patronymic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $history = $_POST['history'];

    saveArticle([
        'name' => $name,
        'surname' => $surname,
        'patronymic' => $patronymic,
        'email' => $email,
        'phone' => $phone,
        'age' => $age,
        'history' => $history
    ]);


    header('Content-Type: application/json; charset=utf-8');
    echo json_encode( $_POST);
?>