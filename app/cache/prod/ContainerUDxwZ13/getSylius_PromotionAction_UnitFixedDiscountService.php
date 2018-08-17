<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_action.unit_fixed_discount' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Action\\PromotionActionCommandInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Action\\UnitDiscountPromotionActionCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Action\\UnitFixedDiscountPromotionActionCommand.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Filter\\FilterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Filter\\TaxonFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Filter\\ProductFilter.php';

return $this->services['sylius.promotion_action.unit_fixed_discount'] = new \Sylius\Component\Core\Promotion\Action\UnitFixedDiscountPromotionActionCommand(($this->services['sylius.factory.adjustment'] ?? $this->load('getSylius_Factory_AdjustmentService.php')), ($this->services['sylius.promotion_filter.price_range'] ?? $this->load('getSylius_PromotionFilter_PriceRangeService.php')), ($this->services['sylius.promotion_filter.taxon'] ?? $this->services['sylius.promotion_filter.taxon'] = new \Sylius\Component\Core\Promotion\Filter\TaxonFilter()), ($this->services['sylius.promotion_filter.product'] ?? $this->services['sylius.promotion_filter.product'] = new \Sylius\Component\Core\Promotion\Filter\ProductFilter()), ($this->services['sylius.currency_converter'] ?? $this->load('getSylius_CurrencyConverterService.php')));
