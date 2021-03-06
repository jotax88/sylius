<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.order_processing.order_adjustments_clearer' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Order\\Processor\\OrderProcessorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\OrderProcessing\\OrderAdjustmentsClearer.php';

return $this->services['sylius.order_processing.order_adjustments_clearer'] = new \Sylius\Component\Core\OrderProcessing\OrderAdjustmentsClearer(array(0 => 'order_item_promotion', 1 => 'order_promotion', 2 => 'order_shipping_promotion', 3 => 'order_unit_promotion', 4 => 'shipping', 5 => 'tax'));
