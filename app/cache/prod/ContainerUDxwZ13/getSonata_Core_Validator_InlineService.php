<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sonata.core.validator.inline' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator\\ConstraintValidatorInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Validator\\ConstraintValidator.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\core-bundle\\src\\Validator\\InlineValidator.php';

return $this->privates['sonata.core.validator.inline'] = new \Sonata\CoreBundle\Validator\InlineValidator($this, ($this->privates['validator.validator_factory'] ?? $this->load('getValidator_ValidatorFactoryService.php')));