

<?php
session_start();
if($_SERVER['HTTP_HOST'] == "localhost"){
define('BASE_URL', 'http://localhost/library_php_project/'); // Adjust this URL based on your server configuration

// Correct usage of $_SERVER['DOCUMENT_ROOT'] to dynamically get the root directory
define('DIR_URL', $_SERVER['DOCUMENT_ROOT'] . '/library_php_project/');

define("SERVER_NAME","localhost");
define("USERNAME","root");
define("PASSWORD",'');
define("DBNAME","library_project");

}else{
    define('BASE_URL', 'https://change-the-domain-name.com');
    define('DIR_URL', $_SERVER['DOCUMENT_ROOT']);

    //SERVER CONNECTION CHECK
    define("SERVER_NAME","");
    define("USERNAME","");
    define("PASSWORD",'');
    define("DBNAME","");

}