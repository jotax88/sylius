<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sonata.intl.templating.helper.locale' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\HelperInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Templating\\Helper\\Helper.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\BaseHelper.php';
include_once $this->targetDirs[3].'\\vendor\\sonata-project\\intl-bundle\\src\\Templating\\Helper\\LocaleHelper.php';

return $this->services['sonata.intl.templating.helper.locale'] = new \Sonata\IntlBundle\Templating\Helper\LocaleHelper('UTF-8', ($this->services['sonata.intl.locale_detector.request_stack'] ?? $this->load('getSonata_Intl_LocaleDetector_RequestStackService.php')));
