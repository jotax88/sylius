<?php

class YamlFileLoader_53c0405 extends \Symfony\Component\Translation\Loader\YamlFileLoader implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder53c0405 = null;
    private $initializer53c0405 = null;
    private static $publicProperties53c0405 = [
        
    ];
    public function load($resource, $locale, $domain = 'messages')
    {
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, 'load', array('resource' => $resource, 'locale' => $locale, 'domain' => $domain), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        return $this->valueHolder53c0405->load($resource, $locale, $domain);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Symfony\Component\Translation\Loader\YamlFileLoader $instance) {
            unset($instance->yamlParser);
        }, $instance, 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader')->__invoke($instance);
        $instance->initializer53c0405 = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolder53c0405) {
            $reflection = $reflection ?: new \ReflectionClass('Symfony\\Component\\Translation\\Loader\\YamlFileLoader');
            $this->valueHolder53c0405 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Symfony\Component\Translation\Loader\YamlFileLoader $instance) {
            unset($instance->yamlParser);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader')->__invoke($this);
        }
    }
    public function & __get($name)
    {
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__get', ['name' => $name], $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        if (isset(self::$publicProperties53c0405[$name])) {
            return $this->valueHolder53c0405->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53c0405;
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
        $targetObject = $this->valueHolder53c0405;
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
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53c0405;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder53c0405;
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
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__isset', array('name' => $name), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53c0405;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder53c0405;
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
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__unset', array('name' => $name), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder53c0405;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder53c0405;
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
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__clone', array(), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        $this->valueHolder53c0405 = clone $this->valueHolder53c0405;
    }
    public function __sleep()
    {
        $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, '__sleep', array(), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
        return array('valueHolder53c0405');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Symfony\Component\Translation\Loader\YamlFileLoader $instance) {
            unset($instance->yamlParser);
        }, $this, 'Symfony\\Component\\Translation\\Loader\\YamlFileLoader')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer53c0405 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer53c0405;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer53c0405 && ($this->initializer53c0405->__invoke($valueHolder53c0405, $this, 'initializeProxy', array(), $this->initializer53c0405) || 1) && $this->valueHolder53c0405 = $valueHolder53c0405;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder53c0405;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder53c0405;
    }
}
