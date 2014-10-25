<?php

defined('O_SERVER_NAME') ? null : define("O_SERVER_NAME", "/juegos");
/* constante de la base de dato */
defined('O_BD') ? null : define("O_BD", "mysql");
defined('O_DB_NAME') ? null : define("O_DB_NAME", "juegos");
defined('O_DB_SERVER') ? null : define("O_DB_SERVER", "localhost");
defined('O_DB_USER') ? null : define("O_DB_USER", "root");
defined('O_DB_PASS') ? null : define("O_DB_PASS", "");

defined('O_DEBUG_MODE') ? null : define("O_DEBUG_MODE", "true"); 
defined('DS') ? null : define("DS", DIRECTORY_SEPARATOR);
defined('O_APP_PATH') ? null : define("O_APP_PATH", O_SERVER_NAME . 'base' . DS);
defined('O_LOG') ? null : define("O_LOG", O_APP_PATH . "log" . DS);

defined('MODO_DEBUG') ? null : define("MODO_DEBUG", false);
/* Rutas de la carpetas externas e internas */
defined('I_SERVER') ? null : define("I_SERVER", "C:\wamp\www" . O_SERVER_NAME);
defined('E_SERVER') ? null : define("E_SERVER", "http://localhost/" . O_SERVER_NAME);



