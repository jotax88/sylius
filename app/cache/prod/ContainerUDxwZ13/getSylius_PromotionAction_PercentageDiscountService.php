<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_action.percentage_discount' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Action\\PromotionActionCommandInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Action\\DiscountPromotionActionCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Action\\PercentageDiscountPromotionActionCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Distributor\\ProportionalIntegerDistributorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Distributor\\ProportionalIntegerDistributor.php';

return $this->services['sylius.promotion_action.percentage_discount'] = new \Sylius\Component\Core\Promotion\Action\PercentageDiscountPromotionActionCommand(($this->services['sylius.proportional_integer_distributor'] ?? $this->services['sylius.proportional_integer_distributor'] = new \Sylius\Component\Core\Distributor\ProportionalIntegerDistributor()), ($this->services['sylius.promotion.units_promotion_adjustments_applicator'] ?? $this->load('getSylius_Promotion_UnitsPromotionAdjustmentsApplicatorService.php')));
