<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.user_registration' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ShopBundle\\EventListener\\UserRegistrationListener.php';

return $this->services['sylius.listener.user_registration'] = new \Sylius\Bundle\ShopBundle\EventListener\UserRegistrationListener(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['sylius.shop_user.token_generator.email_verification'] ?? $this->load('getSylius_ShopUser_TokenGenerator_EmailVerificationService.php')), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), ($this->services['sylius.context.channel'] ?? $this->getSylius_Context_ChannelService()), ($this->services['sylius.security.user_login'] ?? $this->load('getSylius_Security_UserLoginService.php')), 'shop');
