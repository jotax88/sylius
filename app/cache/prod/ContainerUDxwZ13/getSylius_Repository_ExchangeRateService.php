<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'sylius.repository.exchange_rate' shared service.

include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Component\\Currency\\Repository\\ExchangeRateRepositoryInterface.php';
include_once $this->targetDirs[3].'\\vendor\\sylius\\sylius\\src\\Sylius\\Bundle\\CurrencyBundle\\Doctrine\\ORM\\ExchangeRateRepository.php';

$a = ($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService());

return $this->services['sylius.repository.exchange_rate'] = new \Sylius\Bundle\CurrencyBundle\Doctrine\ORM\ExchangeRateRepository($a, $a->getClassMetadata('Sylius\\Component\\Currency\\Model\\ExchangeRate'));
