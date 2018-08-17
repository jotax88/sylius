<?php

class JsonFileLoader_6854993 extends \Symfony\Component\Translation\Loader\JsonFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder6854993 = null;
    private $initializer6854993 = null;
    private static $publicProperties6854993 = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        return $this->valueHolder6854993->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        $instance->initializer6854993 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder6854993) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\JsonFileLoader');
            $this->valueHolder6854993 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__get', ['name' => $name], $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        if (isset(self::$publicProperties6854993[$name])) {
            return $this->valueHolder6854993->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6854993;
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
        $targetObject = $this->valueHolder6854993;
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
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6854993;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder6854993;
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
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__isset', array('name' => $name), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6854993;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6854993;
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
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__unset', array('name' => $name), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder6854993;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder6854993;
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
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__clone', array(), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        $this->valueHolder6854993 = clone $this->valueHolder6854993;
    }
    public function __sleep()
    {
        $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, '__sleep', array(), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
        return array('valueHolder6854993');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer6854993 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer6854993;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6854993 && ($this->initializer6854993->__invoke($valueHolder6854993, $this, 'initializeProxy', array(), $this->initializer6854993) || 1) && $this->valueHolder6854993 = $valueHolder6854993;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder6854993;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder6854993;
    }
}
