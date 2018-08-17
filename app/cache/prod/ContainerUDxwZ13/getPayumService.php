<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Registry\\GatewayRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Registry\\GatewayFactoryRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Registry\\StorageRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Registry\\RegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Payum.php';

return $this->services['payum'] = ($this->services['payum.builder'] ?? $this->load('getPayum_BuilderService.php'))->getPayum();