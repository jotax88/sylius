<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.custom_bulk_action_grid_renderer.twig' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Grid\\Renderer\\BulkActionGridRendererInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Grid\\Renderer\\TwigBulkActionGridRenderer.php';

return $this->services['sylius.custom_bulk_action_grid_renderer.twig'] = new \Sylius\Bundle\ResourceBundle\Grid\Renderer\TwigBulkActionGridRenderer(($this->services['twig'] ?? $this->load('getTwigService.php')), ($this->privates['sylius.grid_options_parser'] ?? $this->load('getSylius_GridOptionsParserService.php')), $this->parameters['sylius.grid.templates.bulk_action']);
