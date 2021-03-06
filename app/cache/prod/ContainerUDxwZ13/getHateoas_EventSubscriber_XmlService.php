<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hateoas.event_subscriber.xml' shared service.

include_once $this->targetDirs[3].'\\vendor\\willdurand\\hateoas\\src\\Hateoas\\Serializer\\XmlSerializerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\willdurand\\hateoas\\src\\Hateoas\\Serializer\\JMSSerializerMetadataAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\willdurand\\hateoas\\src\\Hateoas\\Serializer\\XmlSerializer.php';
include_once $this->targetDirs[3].'\\vendor\\jms\\serializer\\src\\JMS\\Serializer\\EventDispatcher\\EventSubscriberInterface.php';
include_once $this->targetDirs[3].'\\vendor\\willdurand\\hateoas\\src\\Hateoas\\Serializer\\EventSubscriber\\XmlEventSubscriber.php';

$a = new \Hateoas\Serializer\XmlSerializer();
$a->setMetadataFactory(($this->privates['jms_serializer.metadata_factory'] ?? $this->load('getJmsSerializer_MetadataFactoryService.php')));

return $this->services['hateoas.event_subscriber.xml'] = new \Hateoas\Serializer\EventSubscriber\XmlEventSubscriber($a, ($this->privates['hateoas.links_factory'] ?? $this->load('getHateoas_LinksFactoryService.php')), ($this->privates['hateoas.embeds_factory'] ?? $this->load('getHateoas_EmbedsFactoryService.php')));
