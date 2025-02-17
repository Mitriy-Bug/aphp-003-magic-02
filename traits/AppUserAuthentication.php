<?php
declare(strict_types=1);
namespace traits;

trait AppUserAuthentication 
{
    public string $login = 'pc';
    public string $password = '123456';

    public function authenticate( string $login, string $password)
    {
        if($this->login === $login && $this->password === $password){
            echo 'Пользователь приложения' . PHP_EOL;
        }  else {
            echo 'Пользователь не найден' . PHP_EOL;
        }
    }
}