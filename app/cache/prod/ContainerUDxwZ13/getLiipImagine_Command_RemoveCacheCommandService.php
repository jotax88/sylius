<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.command.remove_cache_command' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Console\\Command\\Command.php';
include_once $this->targetDirs[3].'\\vendor\\liip\\imagine-bundle\\Command\\RemoveCacheCommand.php';

$this->services['liip_imagine.command.remove_cache_command'] = $instance = new \Liip\ImagineBundle\Command\RemoveCacheCommand(($this->services['liip_imagine.cache.manager'] ?? $this->load('getLiipImagine_Cache_ManagerService.php')));

$instance->setName('liip:imagine:cache:remove');

return $instance;
