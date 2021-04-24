<?php

if (session_status() != PHP_SESSION_ACTIVE) {
    session_start();
}

$pos = $_GET['pos'];

unset($_SESSION['list'][$pos]);

header('Location: ' . "todo.controller.php");
