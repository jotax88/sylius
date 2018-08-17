<?php

class OAuth2_5885b82 extends \OAuth2\OAuth2 implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5885b82 = null;
    private $initializer5885b82 = null;
    private static $publicProperties5885b82 = [
        
    ];
    public function getVariable($name, $default = null)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'getVariable', array('name' => $name, 'default' => $default), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->getVariable($name, $default);
    }
    public function setVariable($name, $value)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'setVariable', array('name' => $name, 'value' => $value), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->setVariable($name, $value);
    }
    public function verifyAccessToken($tokenParam, $scope = null)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'verifyAccessToken', array('tokenParam' => $tokenParam, 'scope' => $scope), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->verifyAccessToken($tokenParam, $scope);
    }
    public function getBearerToken(?\Symfony\Component\HttpFoundation\Request $request = null, $removeFromRequest = false)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'getBearerToken', array('request' => $request, 'removeFromRequest' => $removeFromRequest), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->getBearerToken($request, $removeFromRequest);
    }
    public function grantAccessToken(?\Symfony\Component\HttpFoundation\Request $request = null)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'grantAccessToken', array('request' => $request), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->grantAccessToken($request);
    }
    public function finishClientAuthorization($isAuthorized, $data = null, ?\Symfony\Component\HttpFoundation\Request $request = null, $scope = null)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'finishClientAuthorization', array('isAuthorized' => $isAuthorized, 'data' => $data, 'request' => $request, 'scope' => $scope), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->finishClientAuthorization($isAuthorized, $data, $request, $scope);
    }
    public function createAccessToken(\OAuth2\Model\IOAuth2Client $client, $data, $scope = null, $access_token_lifetime = null, $issue_refresh_token = true, $refresh_token_lifetime = null)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'createAccessToken', array('client' => $client, 'data' => $data, 'scope' => $scope, 'access_token_lifetime' => $access_token_lifetime, 'issue_refresh_token' => $issue_refresh_token, 'refresh_token_lifetime' => $refresh_token_lifetime), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return $this->valueHolder5885b82->createAccessToken($client, $data, $scope, $access_token_lifetime, $issue_refresh_token, $refresh_token_lifetime);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->conf, $instance->storage, $instance->oldRefreshToken, $instance->usedAuthCode);
        $instance->initializer5885b82 = $initializer;
        return $instance;
    }
    public function __construct(\OAuth2\IOAuth2Storage $storage, $config = [])
    {
        static $reflection;
        if (! $this->valueHolder5885b82) {
            $reflection = $reflection ?: new \ReflectionClass('OAuth2\\OAuth2');
            $this->valueHolder5885b82 = $reflection->newInstanceWithoutConstructor();
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);
        }
        $this->valueHolder5885b82->__construct($storage, $config);
    }
    public function & __get($name)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__get', ['name' => $name], $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        if (isset(self::$publicProperties5885b82[$name])) {
            return $this->valueHolder5885b82->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5885b82;
            $backtrace = debug_backtrace(false);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    get_parent_class($this),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
            return;
        }
        $targetObject = $this->valueHolder5885b82;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __set($name, $value)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5885b82;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5885b82;
        $accessor = function & () use ($targetObject, $name, $value) {
            return $targetObject->$name = $value;
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();
        return $returnValue;
    }
    public function __isset($name)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__isset', array('name' => $name), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5885b82;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5885b82;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __unset($name)
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__unset', array('name' => $name), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5885b82;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5885b82;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();
        return $returnValue;
    }
    public function __clone()
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__clone', array(), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        $this->valueHolder5885b82 = clone $this->valueHolder5885b82;
    }
    public function __sleep()
    {
        $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, '__sleep', array(), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
        return array('valueHolder5885b82');
    }
    public function __wakeup()
    {
        unset($this->conf, $this->storage, $this->oldRefreshToken, $this->usedAuthCode);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5885b82 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5885b82;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5885b82 && ($this->initializer5885b82->__invoke($valueHolder5885b82, $this, 'initializeProxy', array(), $this->initializer5885b82) || 1) && $this->valueHolder5885b82 = $valueHolder5885b82;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5885b82;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5885b82;
    }
}
