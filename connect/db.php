<?php
$user = 'u47495';
$pass = '9466229';
$db = new PDO('mysql:host=localhost;dbname=u47495', $user, $pass, array(PDO::ATTR_PERSISTENT => true));

if(!isset($_SESSION)){
    session_start();
}
?>
