<?php

class CurrencyHelper_dd0a15b extends \Sylius\Bundle\CurrencyBundle\Templating\Helper\CurrencyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdd0a15b = null;
    private $initializerdd0a15b = null;
    private static $publicPropertiesdd0a15b = [
        
    ];
    public function convertCurrencyCodeToSymbol(string $code) : string
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'convertCurrencyCodeToSymbol', array('code' => $code), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        return $this->valueHolderdd0a15b->convertCurrencyCodeToSymbol($code);
    }
    public function getName() : string
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'getName', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        return $this->valueHolderdd0a15b->getName();
    }
    public function setCharset($charset)
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'setCharset', array('charset' => $charset), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        return $this->valueHolderdd0a15b->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'getCharset', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        return $this->valueHolderdd0a15b->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        $instance->initializerdd0a15b = $initializer;
        return $instance;
    }
    public function __construct()
    {
        static $reflection;
        if (! $this->valueHolderdd0a15b) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\CurrencyBundle\\Templating\\Helper\\CurrencyHelper');
            $this->valueHolderdd0a15b = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        }
    }
    public function & __get($name)
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__get', ['name' => $name], $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        if (isset(self::$publicPropertiesdd0a15b[$name])) {
            return $this->valueHolderdd0a15b->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;
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
        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__isset', array('name' => $name), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__unset', array('name' => $name), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdd0a15b;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdd0a15b;
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
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__clone', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        $this->valueHolderdd0a15b = clone $this->valueHolderdd0a15b;
    }
    public function __sleep()
    {
        $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, '__sleep', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
        return array('valueHolderdd0a15b');
    }
    public function __wakeup()
    {
        unset($this->charset);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerdd0a15b = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerdd0a15b;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdd0a15b && ($this->initializerdd0a15b->__invoke($valueHolderdd0a15b, $this, 'initializeProxy', array(), $this->initializerdd0a15b) || 1) && $this->valueHolderdd0a15b = $valueHolderdd0a15b;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdd0a15b;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdd0a15b;
    }
}
