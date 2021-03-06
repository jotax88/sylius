<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payment_methods_resolver.channel_based' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Payment\\Resolver\\PaymentMethodsResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Resolver\\ChannelBasedPaymentMethodsResolver.php';

return $this->services['sylius.payment_methods_resolver.channel_based'] = new \Sylius\Component\Core\Resolver\ChannelBasedPaymentMethodsResolver(($this->services['sylius.repository.payment_method'] ?? $this->load('getSylius_Repository_PaymentMethodService.php')));
