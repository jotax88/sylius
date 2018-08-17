<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.handler.shop_user_logout' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\LogoutSuccessHandlerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Http\\Logout\\DefaultLogoutSuccessHandler.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\EventListener\\ShopUserLogoutHandler.php';

return $this->services['sylius.handler.shop_user_logout'] = new \Sylius\Bundle\ShopBundle\EventListener\ShopUserLogoutHandler(($this->privates['security.http_utils'] ?? $this->load('getSecurity_HttpUtilsService.php')), '/', ($this->privates['sylius.context.channel.composite'] ?? $this->getSylius_Context_Channel_CompositeService()), ($this->services['sylius.storage.cart_session'] ?? $this->getSylius_Storage_CartSessionService()));
