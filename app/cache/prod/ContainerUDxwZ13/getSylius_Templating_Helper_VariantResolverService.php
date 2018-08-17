<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.templating.helper.variant_resolver' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\VariantResolverHelper.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Product\\Resolver\\ProductVariantResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Product\\Resolver\\DefaultProductVariantResolver.php';

return $this->services['sylius.templating.helper.variant_resolver'] = new \Sylius\Bundle\CoreBundle\Templating\Helper\VariantResolverHelper(($this->services['sylius.product_variant_resolver.default'] ?? $this->services['sylius.product_variant_resolver.default'] = new \Sylius\Component\Product\Resolver\DefaultProductVariantResolver()));