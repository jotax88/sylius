<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry_promotion_action' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistry.php';

$this->services['sylius.registry_promotion_action'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Promotion\\Action\\PromotionActionCommandInterface', 'promotion action');

$instance->register('order_fixed_discount', ($this->services['sylius.promotion_action.fixed_discount'] ?? $this->load('getSylius_PromotionAction_FixedDiscountService.php')));
$instance->register('unit_fixed_discount', ($this->services['sylius.promotion_action.unit_fixed_discount'] ?? $this->load('getSylius_PromotionAction_UnitFixedDiscountService.php')));
$instance->register('order_percentage_discount', ($this->services['sylius.promotion_action.percentage_discount'] ?? $this->load('getSylius_PromotionAction_PercentageDiscountService.php')));
$instance->register('unit_percentage_discount', ($this->services['sylius.promotion_action.unit_percentage_discount'] ?? $this->load('getSylius_PromotionAction_UnitPercentageDiscountService.php')));
$instance->register('shipping_percentage_discount', ($this->services['sylius.promotion_action.shipping_percentage_discount'] ?? $this->load('getSylius_PromotionAction_ShippingPercentageDiscountService.php')));

return $instance;
