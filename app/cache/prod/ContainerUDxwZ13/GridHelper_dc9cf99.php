<?php

class GridHelper_dc9cf99 extends \Sylius\Bundle\GridBundle\Templating\Helper\GridHelper implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolderdc9cf99 = null;
    private $initializerdc9cf99 = null;
    private static $publicPropertiesdc9cf99 = [
        
    ];
    public function renderGrid(\Sylius\Component\Grid\View\GridView $gridView, ?string $template = null)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'renderGrid', array('gridView' => $gridView, 'template' => $template), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->renderGrid($gridView, $template);
    }
    public function renderField(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Field $field, $data)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'renderField', array('gridView' => $gridView, 'field' => $field, 'data' => $data), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->renderField($gridView, $field, $data);
    }
    public function renderAction(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Action $action, $data = null)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'renderAction', array('gridView' => $gridView, 'action' => $action, 'data' => $data), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->renderAction($gridView, $action, $data);
    }
    public function renderFilter(\Sylius\Component\Grid\View\GridView $gridView, \Sylius\Component\Grid\Definition\Filter $filter)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'renderFilter', array('gridView' => $gridView, 'filter' => $filter), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->renderFilter($gridView, $filter);
    }
    public function getName() : string
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'getName', array(), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->getName();
    }
    public function setCharset($charset)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'setCharset', array('charset' => $charset), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->setCharset($charset);
    }
    public function getCharset()
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'getCharset', array(), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return $this->valueHolderdc9cf99->getCharset();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $instance, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($instance);
        $instance->initializerdc9cf99 = $initializer;
        return $instance;
    }
    public function __construct(\Sylius\Component\Grid\Renderer\GridRendererInterface $gridRenderer)
    {
        static $reflection;
        if (! $this->valueHolderdc9cf99) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper');
            $this->valueHolderdc9cf99 = $reflection->newInstanceWithoutConstructor();
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($this);
        }
        $this->valueHolderdc9cf99->__construct($gridRenderer);
    }
    public function & __get($name)
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__get', ['name' => $name], $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        if (isset(self::$publicPropertiesdc9cf99[$name])) {
            return $this->valueHolderdc9cf99->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc9cf99;
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
        $targetObject = $this->valueHolderdc9cf99;
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
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc9cf99;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolderdc9cf99;
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
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__isset', array('name' => $name), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc9cf99;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc9cf99;
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
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__unset', array('name' => $name), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdc9cf99;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolderdc9cf99;
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
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__clone', array(), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        $this->valueHolderdc9cf99 = clone $this->valueHolderdc9cf99;
    }
    public function __sleep()
    {
        $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, '__sleep', array(), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
        return array('valueHolderdc9cf99');
    }
    public function __wakeup()
    {
        unset($this->charset);
        \Closure::bind(function (\Sylius\Bundle\GridBundle\Templating\Helper\GridHelper $instance) {
            unset($instance->gridRenderer);
        }, $this, 'Sylius\\Bundle\\GridBundle\\Templating\\Helper\\GridHelper')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializerdc9cf99 = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializerdc9cf99;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerdc9cf99 && ($this->initializerdc9cf99->__invoke($valueHolderdc9cf99, $this, 'initializeProxy', array(), $this->initializerdc9cf99) || 1) && $this->valueHolderdc9cf99 = $valueHolderdc9cf99;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdc9cf99;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdc9cf99;
    }
}
