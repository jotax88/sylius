<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.api_order_item' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle\\Form\\Type\\OrderItemType.php';

return $this->services['sylius.form.type.api_order_item'] = new \Sylius\Bundle\AdminApiBundle\Form\Type\OrderItemType(($this->services['sylius.repository.product_variant'] ?? $this->load('getSylius_Repository_ProductVariantService.php')));
