<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.state_machine' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\StateMachineInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\StateMachine.php';

return $this->privates['sylius.resource_controller.state_machine'] = new \Sylius\Bundle\ResourceBundle\Controller\StateMachine(($this->services['sm.factory'] ?? $this->getSm_FactoryService()));
