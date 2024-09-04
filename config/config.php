

<?php
if($_SERVER['HTTP_HOST'] == "localhost"){
define('BASE_URL', 'http://localhost/library_php_project/'); // Adjust this URL based on your server configuration

// Correct usage of $_SERVER['DOCUMENT_ROOT'] to dynamically get the root directory
define('DIR_URL', $_SERVER['DOCUMENT_ROOT'] . '/library_php_project/');

}else{
    define('BASE_URL', 'https://change-the-domain-name.com');
    define('DIR_URL', $_SERVER['DOCUMENT_ROOT']);
}