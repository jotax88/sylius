<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_rest.exception_listener' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\EventListener\\ExceptionListener.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\rest-bundle\\EventListener\\ExceptionListener.php';

return $this->privates['fos_rest.exception_listener'] = new \FOS\RestBundle\EventListener\ExceptionListener('fos_rest.exception.twig_controller:showAction', ($this->privates['monolog.logger.request'] ?? $this->getMonolog_Logger_RequestService()));
