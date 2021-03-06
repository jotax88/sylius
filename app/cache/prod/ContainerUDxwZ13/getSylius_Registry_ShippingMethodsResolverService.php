<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry.shipping_methods_resolver' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\PrioritizedServiceRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\PrioritizedServiceRegistry.php';

$this->services['sylius.registry.shipping_methods_resolver'] = $instance = new \Sylius\Component\Registry\PrioritizedServiceRegistry('Sylius\\Component\\Shipping\\Resolver\\ShippingMethodsResolverInterface', 'Shipping methods resolver');

$instance->register(($this->services['sylius.shipping_methods_resolver.default'] ?? $this->load('getSylius_ShippingMethodsResolver_DefaultService.php')), 0);
$instance->register(($this->services['sylius.shipping_methods_resolver.zones_and_channel_based'] ?? $this->load('getSylius_ShippingMethodsResolver_ZonesAndChannelBasedService.php')), 1);

return $instance;
