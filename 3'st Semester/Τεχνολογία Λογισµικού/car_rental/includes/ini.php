<?php
ob_start();

ini_set('session.cookie_httponly', '1');

ini_set('session.use_only_cookies', '1');

ini_set('session.cookie_samesite', 'Lax');

ini_set('session.cookie_secure', '1');

session_start();

include_once 'database/database.php';

$db = new Database();