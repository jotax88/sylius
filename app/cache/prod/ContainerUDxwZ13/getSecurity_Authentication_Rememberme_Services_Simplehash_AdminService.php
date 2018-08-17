<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.rememberme.services.simplehash.admin' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\RememberMeServicesInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\LogoutHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\AbstractRememberMeServices.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\RememberMe\\TokenBasedRememberMeServices.php';

return $this->privates['security.authentication.rememberme.services.simplehash.admin'] = new \Symfony\Component\Security\Http\RememberMe\TokenBasedRememberMeServices(array(0 => ($this->privates['sylius.admin_user_provider.email_or_name_based'] ?? $this->load('getSylius_AdminUserProvider_EmailOrNameBasedService.php'))), $this->getEnv('SYLIUS_SECRET'), 'admin', array('path' => '/admin', 'name' => 'APP_ADMIN_REMEMBER_ME', 'lifetime' => 31536000, 'remember_me_parameter' => '_remember_me', 'domain' => NULL, 'secure' => false, 'httponly' => true, 'always_remember_me' => false), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')));
