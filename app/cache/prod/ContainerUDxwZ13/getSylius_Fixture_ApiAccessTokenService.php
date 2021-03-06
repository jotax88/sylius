<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.fixture.api_access_token' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Config\\Definition\\ConfigurationInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\FixturesBundle\\Fixture\\FixtureInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CoreBundle\\Fixture\\AbstractResourceFixture.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\AdminApiBundle\\Fixture\\ApiAccessTokenFixture.php';

return $this->services['sylius.fixture.api_access_token'] = new \Sylius\Bundle\AdminApiBundle\Fixture\ApiAccessTokenFixture(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), ($this->services['sylius.fixture.example_factory.api_access_token'] ?? $this->load('getSylius_Fixture_ExampleFactory_ApiAccessTokenService.php')));
