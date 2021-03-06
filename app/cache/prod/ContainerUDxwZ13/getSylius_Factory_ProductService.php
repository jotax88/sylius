<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.product' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Factory\\TranslatableFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Resource\\Factory\\TranslatableFactory.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Product\\Factory\\ProductFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Product\\Factory\\ProductFactory.php';

return $this->services['sylius.factory.product'] = new \Sylius\Component\Product\Factory\ProductFactory(new \Sylius\Component\Resource\Factory\TranslatableFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\Product'), ($this->services['sylius.translation_locale_provider.admin'] ?? $this->load('getSylius_TranslationLocaleProvider_AdminService.php'))), ($this->services['sylius.factory.product_variant'] ?? $this->load('getSylius_Factory_ProductVariantService.php')));
