<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payum_action.execute_same_request_with_payment_details' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\ActionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\GatewayAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\GatewayAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\GatewayAwareAction.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle\\Action\\ExecuteSameRequestWithPaymentDetailsAction.php';

return $this->services['sylius.payum_action.execute_same_request_with_payment_details'] = new \Sylius\Bundle\PayumBundle\Action\ExecuteSameRequestWithPaymentDetailsAction();