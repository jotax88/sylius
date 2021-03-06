<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry.payment_methods_resolver' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolver.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\PrioritizedServiceRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\PrioritizedServiceRegistry.php';

$this->services['sylius.registry.payment_methods_resolver'] = $instance = new \Sylius\Component\Registry\PrioritizedServiceRegistry('Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface', 'Payment methods resolver');

$instance->register(new \Sylius\Component\Payment\Resolver\PaymentMethodsResolver(($this->services['sylius.repository.payment_method'] ?? $this->load('getSylius_Repository_PaymentMethodService.php'))), 0);
$instance->register(($this->services['sylius.payment_methods_resolver.channel_based'] ?? $this->load('getSylius_PaymentMethodsResolver_ChannelBasedService.php')), 1);

return $instance;
