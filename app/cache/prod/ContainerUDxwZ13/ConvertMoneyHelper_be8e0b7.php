<?php

class ConvertMoneyHelper_be8e0b7 extends \Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderbe8e0b7 = null;
    private $initializerbe8e0b7 = null;
    private static $publicPropertiesbe8e0b7 = [
        
    ];
    public function convertAmount(int $amount, ?string $sourceCurrencyCode, ?string $targetCurrencyCode) : string
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, 'convertAmount', array('amount' => $amount, 'sourceCurrencyCode' => $sourceCurrencyCode, 'targetCurrencyCode' => $targetCurrencyCode), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        return $this->valueHolderbe8e0b7->convertAmount($amount, $sourceCurrencyCode, $targetCurrencyCode);
    }
    public function getName() : string
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, 'getName', array(), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        return $this->valueHolderbe8e0b7->getName();
    }
    public function setCharset($charset)
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, 'setCharset', array('charset' => $charset), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        return $this->valueHolderbe8e0b7->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, 'getCharset', array(), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        return $this->valueHolderbe8e0b7->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $instance, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($instance);
        $instance->initializerbe8e0b7 = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Currency\Converter\CurrencyConverterInterface $currencyConverter)
    {
        static $reflection;
        if (! $this->valueHolderbe8e0b7) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper');
            $this->valueHolderbe8e0b7 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($this);
        }
        $this->valueHolderbe8e0b7->__construct($currencyConverter);
    }
    public function & __get($name)
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__get', ['name' => $name], $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        if (isset(self::$publicPropertiesbe8e0b7[$name])) {
            return $this->valueHolderbe8e0b7->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe8e0b7;
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
        $targetObject = $this->valueHolderbe8e0b7;
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
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe8e0b7;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderbe8e0b7;
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
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__isset', array('name' => $name), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe8e0b7;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbe8e0b7;
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
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__unset', array('name' => $name), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderbe8e0b7;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderbe8e0b7;
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
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__clone', array(), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        $this->valueHolderbe8e0b7 = clone $this->valueHolderbe8e0b7;
    }
    public function __sleep()
    {
        $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, '__sleep', array(), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
        return array('valueHolderbe8e0b7');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\MoneyBundle\Templating\Helper\ConvertMoneyHelper $instance) {
            unset($instance->currencyConverter);
        }, $this, 'Sylius\\Bundle\\MoneyBundle\\Templating\\Helper\\ConvertMoneyHelper')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerbe8e0b7 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerbe8e0b7;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerbe8e0b7 && ($this->initializerbe8e0b7->__invoke($valueHolderbe8e0b7, $this, 'initializeProxy', array(), $this->initializerbe8e0b7) || 1) && $this->valueHolderbe8e0b7 = $valueHolderbe8e0b7;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderbe8e0b7;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderbe8e0b7;
    }
}
