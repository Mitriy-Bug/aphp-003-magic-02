<?php
declare(strict_types=1);

namespace class;
require_once 'autoloader.php';
use traits\AppUserAuthentication;
use traits\MobileUserAuthentication;
class UserVerification
{
    use AppUserAuthentication, MobileUserAuthentication 
    {
        AppUserAuthentication:: authenticate insteadof MobileUserAuthentication;
        MobileUserAuthentication::authenticate as authenticateMobile;
    }
    
  
}
