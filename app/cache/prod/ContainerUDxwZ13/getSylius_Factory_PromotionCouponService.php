<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.factory.promotion_coupon' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Factory\\PromotionCouponFactory.php';

return $this->services['sylius.factory.promotion_coupon'] = new \Sylius\Component\Promotion\Factory\PromotionCouponFactory(new \Sylius\Component\Resource\Factory\Factory('Sylius\\Component\\Core\\Model\\PromotionCoupon'));
