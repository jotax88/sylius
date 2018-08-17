<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_serializer.json_deserialization_visitor' shared service.

include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\VisitorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\AbstractVisitor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\GenericDeserializationVisitor.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\JsonDeserializationVisitor.php';

return $this->services['jms_serializer.json_deserialization_visitor'] = new \JMS\Serializer\JsonDeserializationVisitor(($this->privates['jms_serializer.cache_naming_strategy'] ?? $this->load('getJmsSerializer_CacheNamingStrategyService.php')));
