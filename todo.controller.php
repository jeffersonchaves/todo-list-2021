<?php
//session_start();
//echo $_SESSION['ifpr'];

if (session_status() != PHP_SESSION_ACTIVE) {

   $lifetime = strtotime('+30 minutes', 0);
   $lifetime = 2 * 60 * 60; // Define 2 horas

   session_set_cookie_params($lifetime);
   session_start();

   //echo session_id();
   //print_r(session_get_cookie_params());
}
$todoList = $_SESSION['list'];

include "todo.view.php";
