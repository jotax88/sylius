<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.promotion_coupon_generator_instruction' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Type\\AbstractResourceType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionCouponGeneratorInstructionType.php';

return $this->services['sylius.form.type.promotion_coupon_generator_instruction'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionCouponGeneratorInstructionType('Sylius\\Component\\Promotion\\Generator\\PromotionCouponGeneratorInstruction');