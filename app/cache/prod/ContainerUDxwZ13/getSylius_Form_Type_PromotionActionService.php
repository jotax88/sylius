<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.promotion_action' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ResourceBundle\\Form\\Type\\AbstractResourceType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle\\Form\\Type\\AbstractConfigurablePromotionElementType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\PromotionBundle\\Form\\Type\\PromotionActionType.php';

return $this->services['sylius.form.type.promotion_action'] = new \Sylius\Bundle\PromotionBundle\Form\Type\PromotionActionType('Sylius\\Component\\Promotion\\Model\\PromotionAction', $this->parameters['sylius.form.type.promotion_action.validation_groups'], ($this->services['sylius.form_registry.promotion_action'] ?? $this->load('getSylius_FormRegistry_PromotionActionService.php')));
