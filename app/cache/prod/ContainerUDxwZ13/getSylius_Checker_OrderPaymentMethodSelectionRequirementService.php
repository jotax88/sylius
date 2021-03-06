<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.checker.order_payment_method_selection_requirement' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Checker\\OrderPaymentMethodSelectionRequirementCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Checker\\OrderPaymentMethodSelectionRequirementChecker.php';

return $this->services['sylius.checker.order_payment_method_selection_requirement'] = new \Sylius\Component\Core\Checker\OrderPaymentMethodSelectionRequirementChecker(($this->services['sylius.payment_methods_resolver'] ?? $this->load('getSylius_PaymentMethodsResolverService.php')));
