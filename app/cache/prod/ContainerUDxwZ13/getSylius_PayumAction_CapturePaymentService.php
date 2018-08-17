<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payum_action.capture_payment' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\ActionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\GatewayAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\GatewayAwareTrait.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\GatewayAwareAction.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle\\Action\\CapturePaymentAction.php';

return $this->services['sylius.payum_action.capture_payment'] = new \Sylius\Bundle\PayumBundle\Action\CapturePaymentAction(($this->services['sylius.payment_description_provider'] ?? $this->load('getSylius_PaymentDescriptionProviderService.php')));
