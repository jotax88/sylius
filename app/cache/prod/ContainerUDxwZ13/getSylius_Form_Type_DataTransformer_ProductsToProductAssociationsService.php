<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.data_transformer.products_to_product_associations' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\DataTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ProductBundle\\Form\\DataTransformer\\ProductsToProductAssociationsTransformer.php';

return $this->services['sylius.form.type.data_transformer.products_to_product_associations'] = new \Sylius\Bundle\ProductBundle\Form\DataTransformer\ProductsToProductAssociationsTransformer(($this->services['sylius.factory.product_association'] ?? $this->services['sylius.factory.product_association'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Product\\Model\\ProductAssociation')), ($this->services['sylius.repository.product'] ?? $this->load('getSylius_Repository_ProductService.php')), ($this->services['sylius.repository.product_association_type'] ?? $this->load('getSylius_Repository_ProductAssociationTypeService.php')));
