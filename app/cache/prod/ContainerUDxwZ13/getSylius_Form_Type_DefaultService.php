<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.default' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Builder\\DefaultFormBuilderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Doctrine\\ORM\\Form\\Builder\\DefaultFormBuilder.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistry.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Type\\DefaultResourceType.php';

$a = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Bundle\\ResourceBundle\\Form\\Builder\\DefaultFormBuilderInterface', 'form builder');
$a->register('doctrine/orm', new \Sylius\Bundle\ResourceBundle\Doctrine\ORM\Form\Builder\DefaultFormBuilder(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService())));

return $this->services['sylius.form.type.default'] = new \Sylius\Bundle\ResourceBundle\Form\Type\DefaultResourceType(($this->privates['sylius.resource_registry'] ?? $this->getSylius_ResourceRegistryService()), $a);
