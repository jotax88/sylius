<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.state_resolver.order_payment' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\StateResolver\\StateResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\StateResolver\\OrderPaymentStateResolver.php';

return $this->services['sylius.state_resolver.order_payment'] = new \Sylius\Component\Core\StateResolver\OrderPaymentStateResolver(($this->services['sm.factory'] ?? $this->getSm_FactoryService()));