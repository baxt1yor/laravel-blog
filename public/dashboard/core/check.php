<?php
    session_start();
    
    $user_data = $_SESSION['user_data'];
    if (empty($user_data)) {
        header('Location: login.php');
    }
?>