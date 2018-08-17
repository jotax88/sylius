<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.xml_serialization_visitor' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\VisitorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\AbstractVisitor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\XmlSerializationVisitor.php';

$this->services['jms_serializer.xml_serialization_visitor'] = $instance = new \JMS\Serializer\XmlSerializationVisitor(($this->privates['jms_serializer.cache_naming_strategy'] ?? $this->load('getJmsSerializer_CacheNamingStrategyService.php')), ($this->privates['jms_serializer.accessor_strategy.expression'] ?? $this->load('getJmsSerializer_AccessorStrategy_ExpressionService.php')));

$instance->setFormatOutput(true);

return $instance;
