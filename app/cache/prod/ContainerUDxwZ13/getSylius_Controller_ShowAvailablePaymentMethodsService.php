<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.show_available_payment_methods' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle\\Controller\\ShowAvailablePaymentMethodsController.php';

return $this->services['sylius.controller.show_available_payment_methods'] = new \Sylius\Bundle\AdminApiBundle\Controller\ShowAvailablePaymentMethodsController(($this->services['sm.factory'] ?? $this->getSm_FactoryService()), ($this->services['sylius.repository.order'] ?? $this->getSylius_Repository_OrderService()), ($this->services['sylius.payment_methods_resolver'] ?? $this->load('getSylius_PaymentMethodsResolverService.php')), ($this->services['fos_rest.view_handler'] ?? $this->load('getFosRest_ViewHandlerService.php')));
