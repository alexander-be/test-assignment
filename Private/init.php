<?php 

error_reporting( E_ALL );
ini_set( 'display_errors', 1 );

require 'config.php';

$database = mysqli_connect( DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE,DB_PORT );