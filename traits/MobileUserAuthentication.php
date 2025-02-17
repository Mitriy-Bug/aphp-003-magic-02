<?php
declare(strict_types=1);
namespace traits;

trait MobileUserAuthentication 
{
    public string $login1 = 'mobile';
    public string $password1 = '123456';

    public function authenticate(string $login, mixed $password)
    {
        if($this->login1 === $login && $this->password1 === $password){
            echo 'Пользователь мобильного приложения' . PHP_EOL;
        } else {
            echo 'Пользователь не найден' . PHP_EOL;
        }
    }
}