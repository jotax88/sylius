<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.event_subscriber.resource_delete' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminBundle\\EventListener\\ResourceDeleteSubscriber.php';

return $this->services['sylius.event_subscriber.resource_delete'] = new \Sylius\Bundle\AdminBundle\EventListener\ResourceDeleteSubscriber(($this->services['router'] ?? $this->getRouterService()), ($this->services['session'] ?? $this->getSessionService()));