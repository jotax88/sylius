<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.provider.product_variants_prices' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Provider\\ProductVariantsPricesProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Provider\\ProductVariantsPricesProvider.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Calculator\\ProductVariantPriceCalculatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Calculator\\ProductVariantPriceCalculator.php';

return $this->services['sylius.provider.product_variants_prices'] = new \Sylius\Component\Core\Provider\ProductVariantsPricesProvider(($this->services['sylius.calculator.product_variant_price'] ?? $this->services['sylius.calculator.product_variant_price'] = new \Sylius\Component\Core\Calculator\ProductVariantPriceCalculator()));
