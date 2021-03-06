<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form_registry.payum_gateway_config' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Registry\\FormTypeRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Registry\\FormTypeRegistry.php';

$this->services['sylius.form_registry.payum_gateway_config'] = $instance = new \Sylius\Bundle\ResourceBundle\Form\Registry\FormTypeRegistry();

$instance->add('gateway_config', 'paypal_express_checkout', 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\PaypalGatewayConfigurationType');
$instance->add('gateway_config', 'stripe_checkout', 'Sylius\\Bundle\\PayumBundle\\Form\\Type\\StripeGatewayConfigurationType');

return $instance;
