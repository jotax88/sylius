<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.controller.security' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\UiBundle\\Controller\\SecurityController.php';

return $this->services['sylius.controller.security'] = new \Sylius\Bundle\UiBundle\Controller\SecurityController(($this->services['security.authentication_utils'] ?? $this->load('getSecurity_AuthenticationUtilsService.php')), ($this->services['form.factory'] ?? $this->load('getForm_FactoryService.php')), ($this->services['templating'] ?? $this->load('getTemplatingService.php')), ($this->services['security.authorization_checker'] ?? $this->getSecurity_AuthorizationCheckerService()), ($this->services['router'] ?? $this->getRouterService()));
