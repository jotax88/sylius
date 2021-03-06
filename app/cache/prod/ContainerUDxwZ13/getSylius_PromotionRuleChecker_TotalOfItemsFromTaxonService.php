<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.promotion_rule_checker.total_of_items_from_taxon' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Promotion\\Checker\\Rule\\RuleCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Core\\Promotion\\Checker\\Rule\\TotalOfItemsFromTaxonRuleChecker.php';

return $this->services['sylius.promotion_rule_checker.total_of_items_from_taxon'] = new \Sylius\Component\Core\Promotion\Checker\Rule\TotalOfItemsFromTaxonRuleChecker(($this->services['sylius.repository.taxon'] ?? $this->load('getSylius_Repository_TaxonService.php')));
