<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.authentication.provider.fos_oauth_server.api' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\Authentication\\Provider\\AuthenticationProviderInterface.php';
include_once $this->targetDirs[3].'\\vendor\\friendsofsymfony\\oauth-server-bundle\\Security\\Authentication\\Provider\\OAuthProvider.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserCheckerInterface.php';
include_once $this->targetDirs[3].'\\vendor\\symfony\\symfony\\src\\Symfony\\Component\\Security\\Core\\User\\UserChecker.php';

return $this->privates['security.authentication.provider.fos_oauth_server.api'] = new \FOS\OAuthServerBundle\Security\Authentication\Provider\OAuthProvider(($this->privates['sylius.admin_user_provider.email_or_name_based'] ?? $this->load('getSylius_AdminUserProvider_EmailOrNameBasedService.php')), ($this->privates['fos_oauth_server.server'] ?? $this->load('getFosOauthServer_ServerService.php')), ($this->privates['security.user_checker'] ?? $this->privates['security.user_checker'] = new \Symfony\Component\Security\Core\User\UserChecker()));
