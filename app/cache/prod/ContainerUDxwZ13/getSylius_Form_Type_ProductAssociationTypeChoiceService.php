<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.product_association_type_choice' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle\\Form\\Type\\ProductAssociationTypeChoiceType.php';

return $this->services['sylius.form.type.product_association_type_choice'] = new \Sylius\Bundle\ProductBundle\Form\Type\ProductAssociationTypeChoiceType(($this->services['sylius.repository.product_association_type'] ?? $this->load('getSylius_Repository_ProductAssociationTypeService.php')));
