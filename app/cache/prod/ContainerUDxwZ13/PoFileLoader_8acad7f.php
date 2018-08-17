<?php

class PoFileLoader_8acad7f extends \Symfony\Component\Translation\Loader\PoFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder8acad7f = null;
    private $initializer8acad7f = null;
    private static $publicProperties8acad7f = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        return $this->valueHolder8acad7f->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        $instance->initializer8acad7f = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder8acad7f) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\PoFileLoader');
            $this->valueHolder8acad7f = $reflection->newInstanceWithoutConstructor();
        }
    }
    public function & __get($name)
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__get', ['name' => $name], $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        if (isset(self::$publicProperties8acad7f[$name])) {
            return $this->valueHolder8acad7f->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;
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
        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__isset', array('name' => $name), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__unset', array('name' => $name), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder8acad7f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder8acad7f;
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
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__clone', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        $this->valueHolder8acad7f = clone $this->valueHolder8acad7f;
    }
    public function __sleep()
    {
        $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, '__sleep', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
        return array('valueHolder8acad7f');
    }
    public function __wakeup()
    {
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer8acad7f = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer8acad7f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer8acad7f && ($this->initializer8acad7f->__invoke($valueHolder8acad7f, $this, 'initializeProxy', array(), $this->initializer8acad7f) || 1) && $this->valueHolder8acad7f = $valueHolder8acad7f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder8acad7f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder8acad7f;
    }
}
