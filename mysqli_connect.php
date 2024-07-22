<?php
const DB_USERNAME = 'binyomin';
const DB_PASSWORD = 'morgulis';
const DB_HOST = 'localhost';
const DB_NAME = 'strokeofgeniusdb';

$dbc = @mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME) 
or die('Could not connect to MySQL: ' . mysqli_connect_error());