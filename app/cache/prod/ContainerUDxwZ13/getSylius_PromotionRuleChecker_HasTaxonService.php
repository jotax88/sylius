<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_rule_checker.has_taxon' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Checker\\Rule\\RuleCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Checker\\Rule\\HasTaxonRuleChecker.php';

return $this->services['sylius.promotion_rule_checker.has_taxon'] = new \Sylius\Component\Core\Promotion\Checker\Rule\HasTaxonRuleChecker();
