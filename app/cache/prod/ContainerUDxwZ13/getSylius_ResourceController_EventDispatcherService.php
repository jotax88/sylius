<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.event_dispatcher' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\EventDispatcherInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\EventDispatcher.php';

return $this->privates['sylius.resource_controller.event_dispatcher'] = new \Sylius\Bundle\ResourceBundle\Controller\EventDispatcher(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()));
