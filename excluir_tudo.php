<?php

if (session_status() != PHP_SESSION_ACTIVE) {

    //$lifetime = strtotime('+30 minutes', 0);
    $lifetime = 2 * 60 * 60; // Define 2 horas

    session_set_cookie_params($lifetime);
    session_start();

    //echo session_id(); //exibe o id da sessão
    //print_r(session_get_cookie_params()); //exibe outras informações da sessão
}

session_destroy();
header('Location: ' . "todo.controller.php");
