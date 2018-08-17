<?php

class CheckoutStepsHelper_87a88b2 extends \Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder87a88b2 = null;
    private $initializer87a88b2 = null;
    private static $publicProperties87a88b2 = [
        
    ];
    public function isShippingRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'isShippingRequired', array('order' => $order), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return $this->valueHolder87a88b2->isShippingRequired($order);
    }
    public function isPaymentRequired(\Sylius\Component\Core\Model\OrderInterface $order) : bool
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'isPaymentRequired', array('order' => $order), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return $this->valueHolder87a88b2->isPaymentRequired($order);
    }
    public function getName() : string
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'getName', array(), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return $this->valueHolder87a88b2->getName();
    }
    public function setCharset($charset)
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'setCharset', array('charset' => $charset), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return $this->valueHolder87a88b2->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'getCharset', array(), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return $this->valueHolder87a88b2->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $instance, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($instance);
        $instance->initializer87a88b2 = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Core\Checker\OrderPaymentMethodSelectionRequirementCheckerInterface $orderPaymentMethodSelectionRequirementChecker, \Sylius\Component\Core\Checker\OrderShippingMethodSelectionRequirementCheckerInterface $orderShippingMethodSelectionRequirementChecker)
    {
        static $reflection;
        if (! $this->valueHolder87a88b2) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper');
            $this->valueHolder87a88b2 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);
        }
        $this->valueHolder87a88b2->__construct($orderPaymentMethodSelectionRequirementChecker, $orderShippingMethodSelectionRequirementChecker);
    }
    public function & __get($name)
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__get', ['name' => $name], $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        if (isset(self::$publicProperties87a88b2[$name])) {
            return $this->valueHolder87a88b2->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a88b2;
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
        $targetObject = $this->valueHolder87a88b2;
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
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a88b2;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder87a88b2;
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
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__isset', array('name' => $name), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a88b2;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder87a88b2;
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
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__unset', array('name' => $name), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder87a88b2;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder87a88b2;
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
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__clone', array(), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        $this->valueHolder87a88b2 = clone $this->valueHolder87a88b2;
    }
    public function __sleep()
    {
        $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, '__sleep', array(), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
        return array('valueHolder87a88b2');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\CoreBundle\Templating\Helper\CheckoutStepsHelper $instance) {
            unset($instance->orderPaymentMethodSelectionRequirementChecker, $instance->orderShippingMethodSelectionRequirementChecker);
        }, $this, 'Sylius\\Bundle\\CoreBundle\\Templating\\Helper\\CheckoutStepsHelper')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer87a88b2 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer87a88b2;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer87a88b2 && ($this->initializer87a88b2->__invoke($valueHolder87a88b2, $this, 'initializeProxy', array(), $this->initializer87a88b2) || 1) && $this->valueHolder87a88b2 = $valueHolder87a88b2;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder87a88b2;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder87a88b2;
    }
}
