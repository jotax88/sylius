<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.admin_user' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Type\\AbstractResourceType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle\\Form\\Type\\UserType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Form\\Type\\User\\AdminUserType.php';

return $this->services['sylius.form.type.admin_user'] = new \Sylius\Bundle\CoreBundle\Form\Type\User\AdminUserType('Sylius\\Component\\Core\\Model\\AdminUser', $this->parameters['sylius.form.type.admin_user.validation_groups']);
