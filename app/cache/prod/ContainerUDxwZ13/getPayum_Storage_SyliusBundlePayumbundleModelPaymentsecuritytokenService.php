<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.storage.sylius_bundle_payumbundle_model_paymentsecuritytoken' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Storage\\StorageInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Storage\\AbstractStorage.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Bridge\\Doctrine\\Storage\\DoctrineStorage.php';

return $this->services['payum.storage.sylius_bundle_payumbundle_model_paymentsecuritytoken'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'Sylius\\Bundle\\PayumBundle\\Model\\PaymentSecurityToken');
