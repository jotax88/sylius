<?php

class ChannelRepository_04960bc extends \Sylius\Bundle\ChannelBundle\Doctrine\ORM\ChannelRepository implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder04960bc = null;
    private $initializer04960bc = null;
    private static $publicProperties04960bc = [
        
    ];
    public function findOneByHostname(string $hostname) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneByHostname', array('hostname' => $hostname), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findOneByHostname($hostname);
    }
    public function findOneByCode(string $code) : ?\Sylius\Component\Channel\Model\ChannelInterface
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneByCode', array('code' => $code), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findOneByCode($code);
    }
    public function findByName(string $name) : iterable
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findByName', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findByName($name);
    }
    public function add(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'add', array('resource' => $resource), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $this->valueHolder04960bc->add($resource);
return;
    }
    public function remove(\Sylius\Component\Resource\Model\ResourceInterface $resource) : void
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'remove', array('resource' => $resource), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $this->valueHolder04960bc->remove($resource);
return;
    }
    public function createPaginator(array $criteria = [], array $sorting = []) : iterable
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createPaginator', array('criteria' => $criteria, 'sorting' => $sorting), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->createPaginator($criteria, $sorting);
    }
    public function createQueryBuilder($alias, $indexBy = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createQueryBuilder', array('alias' => $alias, 'indexBy' => $indexBy), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->createQueryBuilder($alias, $indexBy);
    }
    public function createResultSetMappingBuilder($alias)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createResultSetMappingBuilder', array('alias' => $alias), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->createResultSetMappingBuilder($alias);
    }
    public function createNamedQuery($queryName)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createNamedQuery', array('queryName' => $queryName), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->createNamedQuery($queryName);
    }
    public function createNativeNamedQuery($queryName)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'createNativeNamedQuery', array('queryName' => $queryName), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->createNativeNamedQuery($queryName);
    }
    public function clear()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'clear', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->clear();
    }
    public function find($id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'find', array('id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->find($id, $lockMode, $lockVersion);
    }
    public function findAll()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findAll', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findAll();
    }
    public function findBy(array $criteria, ?array $orderBy = null, $limit = null, $offset = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findBy', array('criteria' => $criteria, 'orderBy' => $orderBy, 'limit' => $limit, 'offset' => $offset), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findBy($criteria, $orderBy, $limit, $offset);
    }
    public function findOneBy(array $criteria, ?array $orderBy = null)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'findOneBy', array('criteria' => $criteria, 'orderBy' => $orderBy), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->findOneBy($criteria, $orderBy);
    }
    public function count(array $criteria)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'count', array('criteria' => $criteria), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->count($criteria);
    }
    public function __call($method, $arguments)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__call', array('method' => $method, 'arguments' => $arguments), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->__call($method, $arguments);
    }
    public function getClassName()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'getClassName', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->getClassName();
    }
    public function matching(\Doctrine\Common\Collections\Criteria $criteria)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'matching', array('criteria' => $criteria), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return $this->valueHolder04960bc->matching($criteria);
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?: $reflection = new \ReflectionClass(__CLASS__);
        $instance = (new \ReflectionClass(get_class()))->newInstanceWithoutConstructor();
        unset($instance->_entityName, $instance->_em, $instance->_class);
        $instance->initializer04960bc = $initializer;
        return $instance;
    }
    public function __construct(\Doctrine\ORM\EntityManagerInterface $em, \Doctrine\ORM\Mapping\ClassMetadata $class)
    {
        static $reflection;
        if (! $this->valueHolder04960bc) {
            $reflection = $reflection ?: new \ReflectionClass('Sylius\\Bundle\\ChannelBundle\\Doctrine\\ORM\\ChannelRepository');
            $this->valueHolder04960bc = $reflection->newInstanceWithoutConstructor();
        unset($this->_entityName, $this->_em, $this->_class);
        }
        $this->valueHolder04960bc->__construct($em, $class);
    }
    public function & __get($name)
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__get', ['name' => $name], $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        if (isset(self::$publicProperties04960bc[$name])) {
            return $this->valueHolder04960bc->$name;
        }
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;
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
        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;
            return $targetObject->$name = $value;
            return;
        }
        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__isset', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;
            return isset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__unset', array('name' => $name), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $realInstanceReflection = new \ReflectionClass(get_parent_class($this));
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder04960bc;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder04960bc;
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
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__clone', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        $this->valueHolder04960bc = clone $this->valueHolder04960bc;
    }
    public function __sleep()
    {
        $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, '__sleep', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
        return array('valueHolder04960bc');
    }
    public function __wakeup()
    {
        unset($this->_entityName, $this->_em, $this->_class);
    }
    public function setProxyInitializer(\Closure $initializer = null)
    {
        $this->initializer04960bc = $initializer;
    }
    public function getProxyInitializer()
    {
        return $this->initializer04960bc;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer04960bc && ($this->initializer04960bc->__invoke($valueHolder04960bc, $this, 'initializeProxy', array(), $this->initializer04960bc) || 1) && $this->valueHolder04960bc = $valueHolder04960bc;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder04960bc;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder04960bc;
    }
}
