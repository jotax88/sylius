<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.listener.images_upload' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\EventListener\\ImagesUploadListener.php';

return $this->services['sylius.listener.images_upload'] = new \Sylius\Bundle\CoreBundle\EventListener\ImagesUploadListener(($this->services['sylius.image_uploader'] ?? $this->load('getSylius_ImageUploaderService.php')));
