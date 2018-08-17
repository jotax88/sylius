<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'hateoas.embeds_factory' shared service.

include_once $this->targetDirs[3].'\\vendor\\willdurand\\hateoas\\src\\Hateoas\\Factory\\EmbeddedsFactory.php';

return $this->privates['hateoas.embeds_factory'] = new \Hateoas\Factory\EmbeddedsFactory(($this->privates['hateoas.configuration.relations_repository'] ?? $this->load('getHateoas_Configuration_RelationsRepositoryService.php')), ($this->privates['hateoas.expression.evaluator'] ?? $this->load('getHateoas_Expression_EvaluatorService.php')), ($this->privates['hateoas.serializer.exclusion_manager'] ?? $this->load('getHateoas_Serializer_ExclusionManagerService.php')));
