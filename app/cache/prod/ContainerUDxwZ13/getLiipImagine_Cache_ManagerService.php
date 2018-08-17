<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.cache.manager' shared service.

include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\CacheManager.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\SignerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Imagine\\Cache\\Signer.php';

$this->services['liip_imagine.cache.manager'] = $instance = new \Liip\ImagineBundle\Imagine\Cache\CacheManager(($this->privates['liip_imagine.filter.configuration'] ?? $this->load('getLiipImagine_Filter_ConfigurationService.php')), ($this->services['router'] ?? $this->getRouterService()), ($this->services['liip_imagine.cache.signer'] ?? $this->services['liip_imagine.cache.signer'] = new \Liip\ImagineBundle\Imagine\Cache\Signer($this->getEnv('SYLIUS_SECRET'))), ($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), 'default');

$instance->addResolver('default', ($this->services['liip_imagine.cache.resolver.default'] ?? $this->load('getLiipImagine_Cache_Resolver_DefaultService.php')));
$instance->addResolver('no_cache', ($this->services['liip_imagine.cache.resolver.no_cache_web_path'] ?? $this->load('getLiipImagine_Cache_Resolver_NoCacheWebPathService.php')));

return $instance;
