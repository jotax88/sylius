<?php

class MoFileLoader_067a4cd extends \Symfony\Component\Translation\Loader\MoFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder067a4cd = null;
    private $initializer067a4cd = null;
    private static $publicProperties067a4cd = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        return $this->valueHolder067a4cd->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        $instance->initializer067a4cd = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder067a4cd) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\MoFileLoader');
            $this->valueHolder067a4cd = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__get', ['name' => $name], $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        if (isset(self::$publicProperties067a4cd[$name])) {
            return $this->valueHolder067a4cd->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder067a4cd;
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
        $targetObject = $this->valueHolder067a4cd;
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
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder067a4cd;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder067a4cd;
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
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__isset', array('name' => $name), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder067a4cd;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder067a4cd;
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
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__unset', array('name' => $name), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder067a4cd;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder067a4cd;
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
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__clone', array(), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        $this->valueHolder067a4cd = clone $this->valueHolder067a4cd;
    }
    public function __sleep()
    {
        $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, '__sleep', array(), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
        return array('valueHolder067a4cd');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer067a4cd = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer067a4cd;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer067a4cd && ($this->initializer067a4cd->__invoke($valueHolder067a4cd, $this, 'initializeProxy', array(), $this->initializer067a4cd) || 1) && $this->valueHolder067a4cd = $valueHolder067a4cd;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder067a4cd;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder067a4cd;
    }
}
