<?php

class IcuResFileLoader_54be3cf extends \Symfony\Component\Translation\Loader\IcuResFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder54be3cf = null;
    private $initializer54be3cf = null;
    private static $publicProperties54be3cf = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        return $this->valueHolder54be3cf->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        $instance->initializer54be3cf = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder54be3cf) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\IcuResFileLoader');
            $this->valueHolder54be3cf = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__get', ['name' => $name], $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        if (isset(self::$publicProperties54be3cf[$name])) {
            return $this->valueHolder54be3cf->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54be3cf;
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
        $targetObject = $this->valueHolder54be3cf;
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
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54be3cf;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder54be3cf;
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
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__isset', array('name' => $name), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54be3cf;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder54be3cf;
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
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__unset', array('name' => $name), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder54be3cf;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder54be3cf;
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
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__clone', array(), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        $this->valueHolder54be3cf = clone $this->valueHolder54be3cf;
    }
    public function __sleep()
    {
        $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, '__sleep', array(), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
        return array('valueHolder54be3cf');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer54be3cf = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer54be3cf;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer54be3cf && ($this->initializer54be3cf->__invoke($valueHolder54be3cf, $this, 'initializeProxy', array(), $this->initializer54be3cf) || 1) && $this->valueHolder54be3cf = $valueHolder54be3cf;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder54be3cf;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder54be3cf;
    }
}
