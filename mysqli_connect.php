<?php
if (!defined('DB_HOST')) {
    define('DB_HOST', 'localhost');
}
if (!defined('DB_USERNAME')) {
    define('DB_USERNAME', 'root');
}
if (!defined('DB_PASSWORD')) {
    define('DB_PASSWORD', '');
}
if (!defined('DB_NAME')) {
    define('DB_NAME', 'StrokeOfGeniusDB');
}


$dbc = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME)
or die('Could not connect to MySQL: ' . mysqli_connect_error());

