<?php
declare(strict_types=1);

require_once 'autoloader.php';
use class\UserVerification;


$userVerification = new UserVerification();

//авторизация пользователя App
$userVerification->authenticate("pc", '123456');


//авторизация пользователя Mobile
$userVerification->authenticateMobile("mobile", '123456');





