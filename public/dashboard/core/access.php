<?php
    session_start();

    include '../app/connect.php';
    
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    if (!empty($username) && !empty($password)) {
        $password = md5($password);
        $query = $connect
                ->prepare('SELECT * FROM `admin` WHERE `username` = ? AND `password` = ?');
        $query->execute([$username, $password]);

        $user_data = $query->fetch();
        if ($user_data) {
            $_SESSION['user_data'] = $user_data;
            header('Location: index.php');
        }
    }