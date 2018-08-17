<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.resource_controller.resources_resolver.grid_aware' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\ResourcesResolverInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\ResourcesResolver.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Grid\\Controller\\ResourcesResolver.php';

return $this->services['sylius.resource_controller.resources_resolver.grid_aware'] = new \Sylius\Bundle\ResourceBundle\Grid\Controller\ResourcesResolver(new \Sylius\Bundle\ResourceBundle\Controller\ResourcesResolver(), ($this->services['sylius.grid.provider'] ?? $this->load('getSylius_Grid_ProviderService.php')), ($this->services['sylius.grid.resource_view_factory'] ?? $this->load('getSylius_Grid_ResourceViewFactoryService.php')));
