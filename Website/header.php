<HTML>
<HEAD>
<LINK rel="stylesheet" href="styles.css" type="text/css" />
</HEAD>
<BODY>
<div id = "full-header">
<img src="img/logo.png" alt="logo" id="logo">

<?php 
include "menu.php";  
define('DB_USERNAME', 'root');
define('DB_PASSWORD','');
define('DB_HOST','localhost');
define('DB_NAME','strokeofgeniusdb');

$dbc = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) 
or die('Could not connect to MySQL: ' . mysqli_connect_error()); ?>
<HR />
</div>

