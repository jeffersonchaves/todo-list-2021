<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$_SESSION['list'][] = $_POST['task'];
header('Location: ' . "todo.controller.php");
