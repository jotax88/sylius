<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'payum.command.debug_gateway' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\DependencyInjection\\ContainerAwareInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Command\\ContainerAwareCommand.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum-bundle\\Command\\DebugGatewayCommand.php';

$this->privates['payum.command.debug_gateway'] = $instance = new \Payum\Bundle\PayumBundle\Command\DebugGatewayCommand();

$instance->setContainer($this);
$instance->setName('debug:payum:gateway');

return $instance;
