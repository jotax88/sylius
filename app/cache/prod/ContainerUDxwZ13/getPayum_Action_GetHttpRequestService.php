<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.action.get_http_request' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\ActionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Bridge\\Symfony\\Action\\GetHttpRequestAction.php';

$this->services['payum.action.get_http_request'] = $instance = new \Payum\Core\Bridge\Symfony\Action\GetHttpRequestAction();

$instance->setHttpRequestStack(($this->services['request_stack'] ?? $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()));

return $instance;
