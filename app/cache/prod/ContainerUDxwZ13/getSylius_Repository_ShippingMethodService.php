<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.shipping_method' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Shipping\\Repository\\ShippingMethodRepositoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle\\Doctrine\\ORM\\ShippingMethodRepository.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Repository\\ShippingMethodRepositoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Doctrine\\ORM\\ShippingMethodRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.shipping_method'] = new \Sylius\Bundle\CoreBundle\Doctrine\ORM\ShippingMethodRepository($a, $a->getClassMetadata('Sylius\\Component\\Core\\Model\\ShippingMethod'));
