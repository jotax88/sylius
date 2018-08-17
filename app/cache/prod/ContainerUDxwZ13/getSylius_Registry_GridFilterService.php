<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.registry.grid_filter' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Registry\\ServiceRegistry.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filtering\\FilterInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\StringFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\BooleanFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\DateFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\EntityFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\MoneyFilter.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Filter\\ExistsFilter.php';

$this->services['sylius.registry.grid_filter'] = $instance = new \Sylius\Component\Registry\ServiceRegistry('Sylius\\Component\\Grid\\Filtering\\FilterInterface', 'grid filter');

$instance->register('string', ($this->services['sylius.grid_filter.string'] ?? $this->services['sylius.grid_filter.string'] = new \Sylius\Component\Grid\Filter\StringFilter()));
$instance->register('boolean', ($this->services['sylius.grid_filter.boolean'] ?? $this->services['sylius.grid_filter.boolean'] = new \Sylius\Component\Grid\Filter\BooleanFilter()));
$instance->register('date', ($this->services['sylius.grid_filter.date'] ?? $this->services['sylius.grid_filter.date'] = new \Sylius\Component\Grid\Filter\DateFilter()));
$instance->register('entity', ($this->services['sylius.grid_filter.entity'] ?? $this->services['sylius.grid_filter.entity'] = new \Sylius\Component\Grid\Filter\EntityFilter()));
$instance->register('money', ($this->services['sylius.grid_filter.money'] ?? $this->services['sylius.grid_filter.money'] = new \Sylius\Component\Grid\Filter\MoneyFilter()));
$instance->register('exists', ($this->services['sylius.grid_filter.exists'] ?? $this->services['sylius.grid_filter.exists'] = new \Sylius\Component\Grid\Filter\ExistsFilter()));

return $instance;