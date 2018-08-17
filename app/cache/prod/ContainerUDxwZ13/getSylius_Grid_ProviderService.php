<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.grid.provider' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Provider\\GridProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Provider\\ArrayGridProvider.php';

return $this->services['sylius.grid.provider'] = new \Sylius\Component\Grid\Provider\ArrayGridProvider(($this->services['sylius.grid.array_to_definition_converter'] ?? $this->load('getSylius_Grid_ArrayToDefinitionConverterService.php')), $this->parameters['sylius.grids_definitions']);