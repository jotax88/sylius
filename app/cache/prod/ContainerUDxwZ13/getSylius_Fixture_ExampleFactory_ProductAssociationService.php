<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.product_association' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\ExampleFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\AbstractExampleFactory.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\ProductAssociationExampleFactory.php';

return $this->services['sylius.fixture.example_factory.product_association'] = new \Sylius\Bundle\CoreBundle\Fixture\Factory\ProductAssociationExampleFactory(($this->services['sylius.factory.product_association'] ?? $this->services['sylius.factory.product_association'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Product\\Model\\ProductAssociation')), ($this->services['sylius.repository.product_association_type'] ?? $this->load('getSylius_Repository_ProductAssociationTypeService.php')), ($this->services['sylius.repository.product'] ?? $this->load('getSylius_Repository_ProductService.php')));
