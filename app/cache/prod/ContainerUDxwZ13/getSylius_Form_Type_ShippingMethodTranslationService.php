<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.shipping_method_translation' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Type\\AbstractResourceType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShippingBundle\\Form\\Type\\ShippingMethodTranslationType.php';

return $this->services['sylius.form.type.shipping_method_translation'] = new \Sylius\Bundle\ShippingBundle\Form\Type\ShippingMethodTranslationType('Sylius\\Component\\Shipping\\Model\\ShippingMethodTranslation', $this->parameters['sylius.form.type.shipping_method_translation.validation_groups']);
