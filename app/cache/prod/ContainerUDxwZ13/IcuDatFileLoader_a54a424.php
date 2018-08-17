<?php

class IcuDatFileLoader_a54a424 extends \Symfony\Component\Translation\Loader\IcuDatFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHoldera54a424 = null;
    private $initializera54a424 = null;
    private static $publicPropertiesa54a424 = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        return $this->valueHoldera54a424->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        $instance->initializera54a424 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHoldera54a424) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\IcuDatFileLoader');
            $this->valueHoldera54a424 = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__get', ['name' => $name], $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        if (isset(self::$publicPropertiesa54a424[$name])) {
            return $this->valueHoldera54a424->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera54a424;
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
        $targetObject = $this->valueHoldera54a424;
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
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__set', array('name' => $name, 'value' => $value), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera54a424;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHoldera54a424;
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
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__isset', array('name' => $name), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera54a424;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera54a424;
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
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__unset', array('name' => $name), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHoldera54a424;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHoldera54a424;
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
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__clone', array(), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        $this->valueHoldera54a424 = clone $this->valueHoldera54a424;
    }
    public function __sleep()
    {
        $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, '__sleep', array(), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
        return array('valueHoldera54a424');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializera54a424 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializera54a424;
    }
    public function initializeProxy() : bool
    {
        return $this->initializera54a424 && ($this->initializera54a424->__invoke($valueHoldera54a424, $this, 'initializeProxy', array(), $this->initializera54a424) || 1) && $this->valueHoldera54a424 = $valueHoldera54a424;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHoldera54a424;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHoldera54a424;
    }
}
