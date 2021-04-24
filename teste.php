<?php

// Ex.: 1 - Cria um cookie
setcookie('usuario', 'Fulano');

// Ex.: 2 - Cria o novo cookie p/ durar duas horas
setcookie('nome', 'Ciclano', (time() + (2 * 3600)));

// Ex.: 2 - Cria um cookie que durará três dias
setcookie('usuario', 'Fulano', (time() + (3 * 24 * 3600)));

echo $_COOKIE["usuario"];

if (isset($_COOKIE["usuario"])) {
    echo $_COOKIE["usuario"];
}

echo isset($_COOKIE["usuario"]) ?? $_COOKIE["usuario"];
