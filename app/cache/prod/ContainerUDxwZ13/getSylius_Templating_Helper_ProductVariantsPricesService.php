<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.templating.helper.product_variants_prices' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\ProductVariantsPricesHelper.php';

return $this->services['sylius.templating.helper.product_variants_prices'] = new \Sylius\Bundle\CoreBundle\Templating\Helper\ProductVariantsPricesHelper(($this->services['sylius.provider.product_variants_prices'] ?? $this->load('getSylius_Provider_ProductVariantsPricesService.php')));
