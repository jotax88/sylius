<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.promotion_coupon_to_code' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\DataTransformerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponToCodeType.php';

return $this->services['sylius.form.type.promotion_coupon_to_code'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionCouponToCodeType(($this->services['sylius.repository.promotion_coupon'] ?? $this->load('getSylius_Repository_PromotionCouponService.php')));
