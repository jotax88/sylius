<?php

class BulkActionGridHelper_d18a6a1 extends \Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderd18a6a1 = null;
    private $initializerd18a6a1 = null;
    private static $publicPropertiesd18a6a1 = [
        
    ];
    public function renderBulkAction(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Action $bulkAction, $data = null) : string
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, 'renderBulkAction', array('gridView' => $gridView, 'bulkAction' => $bulkAction, 'data' => $data), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        return $this->valueHolderd18a6a1->renderBulkAction($gridView, $bulkAction, $data);
    }
    public function getName() : string
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, 'getName', array(), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        return $this->valueHolderd18a6a1->getName();
    }
    public function setCharset($charset)
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, 'setCharset', array('charset' => $charset), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        return $this->valueHolderd18a6a1->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, 'getCharset', array(), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        return $this->valueHolderd18a6a1->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $instance, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($instance);
        $instance->initializerd18a6a1 = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Grid\Renderer\BulkActionGridRendererInterface $bulkActionGridRenderer)
    {
        static $reflection;
        if (! $this->valueHolderd18a6a1) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper');
            $this->valueHolderd18a6a1 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($this);
        }
        $this->valueHolderd18a6a1->__construct($bulkActionGridRenderer);
    }
    public function & __get($name)
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__get', ['name' => $name], $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        if (isset(self::$publicPropertiesd18a6a1[$name])) {
            return $this->valueHolderd18a6a1->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd18a6a1;
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
        $targetObject = $this->valueHolderd18a6a1;
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
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd18a6a1;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderd18a6a1;
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
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__isset', array('name' => $name), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd18a6a1;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd18a6a1;
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
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__unset', array('name' => $name), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderd18a6a1;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderd18a6a1;
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
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__clone', array(), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        $this->valueHolderd18a6a1 = clone $this->valueHolderd18a6a1;
    }
    public function __sleep()
    {
        $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, '__sleep', array(), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
        return array('valueHolderd18a6a1');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\BulkActionGridHelper $instance) {
            unset($instance->bulkActionGridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\BulkActionGridHelper')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerd18a6a1 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerd18a6a1;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerd18a6a1 && ($this->initializerd18a6a1->__invoke($valueHolderd18a6a1, $this, 'initializeProxy', array(), $this->initializerd18a6a1) || 1) && $this->valueHolderd18a6a1 = $valueHolderd18a6a1;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderd18a6a1;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderd18a6a1;
    }
}
