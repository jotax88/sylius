<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.theme.templating.name_parser' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\TemplateNameParserInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\TemplateNameParser.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Templating\\TemplateNameParser.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Templating\\TemplateNameParser.php';

$a = ($this->services['kernel'] ?? $this->get('kernel', 1));

return $this->privates['sylius.theme.templating.name_parser'] = new \Sylius\Bundle\ThemeBundle\Templating\TemplateNameParser(new \Symfony\Bundle\FrameworkBundle\Templating\TemplateNameParser($a), $a);
