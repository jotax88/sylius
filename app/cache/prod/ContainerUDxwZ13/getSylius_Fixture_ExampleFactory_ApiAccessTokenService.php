<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.example_factory.api_access_token' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\ExampleFactoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\Factory\\AbstractExampleFactory.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle\\Fixture\\Factory\\ApiAccessTokenExampleFactory.php';

return $this->services['sylius.fixture.example_factory.api_access_token'] = new \Sylius\Bundle\AdminApiBundle\Fixture\Factory\ApiAccessTokenExampleFactory(($this->services['sylius.factory.api_access_token'] ?? $this->services['sylius.factory.api_access_token'] = new \Sylius\Component\Resource\Factory\Factory('Sylius\\Bundle\\AdminApiBundle\\Model\\AccessToken')), ($this->services['sylius.repository.admin_user'] ?? $this->load('getSylius_Repository_AdminUserService.php')), ($this->services['sylius.repository.api_client'] ?? $this->load('getSylius_Repository_ApiClientService.php')));
