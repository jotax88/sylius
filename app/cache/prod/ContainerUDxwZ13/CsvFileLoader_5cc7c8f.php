<?php

class CsvFileLoader_5cc7c8f extends \Symfony\Component\Translation\Loader\CsvFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder5cc7c8f = null;
    private $initializer5cc7c8f = null;
    private static $publicProperties5cc7c8f = [
        
    ];
    public function setCsvControl($delimiter = ';', $enclosure = '"', $escape = '\\')
    {
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, 'setCsvControl', array('delimiter' => $delimiter, 'enclosure' => $enclosure, 'escape' => $escape), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        return $this->valueHolder5cc7c8f->setCsvControl($delimiter, $enclosure, $escape);
    }
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        return $this->valueHolder5cc7c8f->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $instance, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($instance);
        $instance->initializer5cc7c8f = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder5cc7c8f) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\CsvFileLoader');
            $this->valueHolder5cc7c8f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($this);
        }
    }
    public function & __get($name)
    {
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__get', ['name' => $name], $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        if (isset(self::$publicProperties5cc7c8f[$name])) {
            return $this->valueHolder5cc7c8f->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cc7c8f;
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
        $targetObject = $this->valueHolder5cc7c8f;
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
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cc7c8f;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder5cc7c8f;
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
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__isset', array('name' => $name), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cc7c8f;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5cc7c8f;
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
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__unset', array('name' => $name), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder5cc7c8f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder5cc7c8f;
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
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__clone', array(), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        $this->valueHolder5cc7c8f = clone $this->valueHolder5cc7c8f;
    }
    public function __sleep()
    {
        $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, '__sleep', array(), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
        return array('valueHolder5cc7c8f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Symfony\Component\Translation\Loader\CsvFileLoader $instance) {
            unset($instance->delimiter, $instance->enclosure, $instance->escape);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\CsvFileLoader')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer5cc7c8f = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer5cc7c8f;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer5cc7c8f && ($this->initializer5cc7c8f->__invoke($valueHolder5cc7c8f, $this, 'initializeProxy', array(), $this->initializer5cc7c8f) || 1) && $this->valueHolder5cc7c8f = $valueHolder5cc7c8f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder5cc7c8f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder5cc7c8f;
    }
}
