<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'sylius.theme.templating.cache.warmer' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\HttpKernel\\CacheWarmer\\CacheWarmerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\ThemeBundle\\Templating\\Cache\\Warmer\\TemplatePathsCacheWarmer.php';

return $this->privates['sylius.theme.templating.cache.warmer'] = new \Sylius\Bundle\ThemeBundle\Templating\Cache\Warmer\TemplatePathsCacheWarmer(($this->privates['templating.finder'] ?? $this->load('getTemplating_FinderService.php')), ($this->privates['sylius.theme.templating.locator.cached'] ?? $this->load('getSylius_Theme_Templating_Locator_CachedService.php')), ($this->services['sylius.repository.theme'] ?? $this->getSylius_Repository_ThemeService()), ($this->services['sylius.theme.templating.cache'] ?? $this->services['sylius.theme.templating.cache'] = new \Doctrine\Common\Cache\ArrayCache()));
