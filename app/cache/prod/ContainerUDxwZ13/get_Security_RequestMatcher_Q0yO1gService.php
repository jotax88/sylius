<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.security.request_matcher.Q0yO_1g' shared service.

return $this->privates['.security.request_matcher.Q0yO_1g'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(?!admin|api/.*|api$|media/.*)[^/]++');
