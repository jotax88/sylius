<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.admin_user' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\User\\Repository\\UserRepositoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UserBundle\\Doctrine\\ORM\\UserRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.admin_user'] = new \Sylius\Bundle\UserBundle\Doctrine\ORM\UserRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\AdminUser'));
