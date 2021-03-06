<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_item_quantity_modifier.limiting' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Modifier\\OrderItemQuantityModifierInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Modifier\\OrderItemQuantityModifier.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Cart\\Modifier\\LimitingOrderItemQuantityModifier.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Factory\\OrderItemUnitFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Factory\\OrderItemUnitFactory.php';

return $this->services['sylius.order_item_quantity_modifier.limiting'] = new \Sylius\Component\Core\Cart\Modifier\LimitingOrderItemQuantityModifier(new \Sylius\Component\Order\Modifier\OrderItemQuantityModifier(($this->services['sylius.factory.order_item_unit'] ?? $this->services['sylius.factory.order_item_unit'] = new \Sylius\Component\Order\Factory\OrderItemUnitFactory('Sylius\\Component\\Core\\Model\\OrderItemUnit'))), 9999);
