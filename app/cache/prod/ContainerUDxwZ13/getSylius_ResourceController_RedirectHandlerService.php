<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.resource_controller.redirect_handler' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\RedirectHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Controller\\RedirectHandler.php';

return $this->privates['sylius.resource_controller.redirect_handler'] = new \Sylius\Bundle\ResourceBundle\Controller\RedirectHandler(($this->services['router'] ?? $this->getRouterService()));
