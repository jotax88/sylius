<?php

class ProvinceNamingProvider_9f6014a extends \Sylius\Component\Addressing\Provider\ProvinceNamingProvider implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder9f6014a = null;
    private $initializer9f6014a = null;
    private static $publicProperties9f6014a = [
        
    ];
    public function getName(\Sylius\Component\Addressing\Model\AddressInterface $address) : string
    {
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, 'getName', array('address' => $address), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        return $this->valueHolder9f6014a->getName($address);
    }
    public function getAbbreviation(\Sylius\Component\Addressing\Model\AddressInterface $address) : string
    {
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, 'getAbbreviation', array('address' => $address), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        return $this->valueHolder9f6014a->getAbbreviation($address);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $instance, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($instance);
        $instance->initializer9f6014a = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Resource\Repository\RepositoryInterface $provinceRepository)
    {
        static $reflection;
        if (! $this->valueHolder9f6014a) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider');
            $this->valueHolder9f6014a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $this, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($this);
        }
        $this->valueHolder9f6014a->__construct($provinceRepository);
    }
    public function & __get($name)
    {
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__get', ['name' => $name], $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        if (isset(self::$publicProperties9f6014a[$name])) {
            return $this->valueHolder9f6014a->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f6014a;
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
        $targetObject = $this->valueHolder9f6014a;
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
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f6014a;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder9f6014a;
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
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__isset', array('name' => $name), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f6014a;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9f6014a;
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
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__unset', array('name' => $name), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder9f6014a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder9f6014a;
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
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__clone', array(), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        $this->valueHolder9f6014a = clone $this->valueHolder9f6014a;
    }
    public function __sleep()
    {
        $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, '__sleep', array(), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
        return array('valueHolder9f6014a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Sylius\Component\Addressing\Provider\ProvinceNamingProvider $instance) {
            unset($instance->provinceRepository);
        }, $this, 'Sylius\\Component\\Addressing\\Provider\\ProvinceNamingProvider')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer9f6014a = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer9f6014a;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer9f6014a && ($this->initializer9f6014a->__invoke($valueHolder9f6014a, $this, 'initializeProxy', array(), $this->initializer9f6014a) || 1) && $this->valueHolder9f6014a = $valueHolder9f6014a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder9f6014a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder9f6014a;
    }
}
