<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.form.type.channels_collection' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\FormTypeInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Form\\AbstractType.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Form\\Type\\ChannelCollectionType.php';

return $this->services['sylius.form.type.channels_collection'] = new \Sylius\Bundle\CoreBundle\Form\Type\ChannelCollectionType(($this->services['sylius.repository.channel'] ?? $this->getSylius_Repository_ChannelService()));
