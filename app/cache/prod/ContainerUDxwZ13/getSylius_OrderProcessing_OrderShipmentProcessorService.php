<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_processing.order_shipment_processor' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Processor\\OrderProcessorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\OrderProcessing\\OrderShipmentProcessor.php';

return $this->services['sylius.order_processing.order_shipment_processor'] = new \Sylius\Component\Core\OrderProcessing\OrderShipmentProcessor(($this->services['sylius.shipping_method_resolver.default'] ?? $this->load('getSylius_ShippingMethodResolver_DefaultService.php')), ($this->services['sylius.factory.shipment'] ?? $this->services['sylius.factory.shipment'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Shipment')), ($this->services['sylius.shipping_methods_resolver'] ?? $this->load('getSylius_ShippingMethodsResolverService.php')));
