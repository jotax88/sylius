<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.api.add_to_cart' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle\\EventListener\\CartChangeListener.php';

return $this->services['sylius.listener.api.add_to_cart'] = new \Sylius\Bundle\AdminApiBundle\EventListener\CartChangeListener(($this->services['sylius.order_processing.order_processor'] ?? $this->load('getSylius_OrderProcessing_OrderProcessorService.php')), ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()));