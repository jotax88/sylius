<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.payum_action.offline.resolve_next_route' shared service.

include_once $this->targetDirs[3].'\\vendor\\payum\\payum\\src\\Payum\\Core\\Action\\ActionInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PayumBundle\\Action\\Offline\\ResolveNextRouteAction.php';

return $this->services['sylius.payum_action.offline.resolve_next_route'] = new \Sylius\Bundle\PayumBundle\Action\Offline\ResolveNextRouteAction();
