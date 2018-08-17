<?php

namespace Proxies\__CG__\Sylius\Component\Core\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ProductImage extends \Sylius\Component\Core\Model\ProductImage implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', 'productVariants', 'id', 'type', 'file', 'path', 'owner'];
        }

        return ['__isInitialized__', 'productVariants', 'id', 'type', 'file', 'path', 'owner'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ProductImage $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function hasProductVariants(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProductVariants', []);

        return parent::hasProductVariants();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductVariants(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductVariants', []);

        return parent::getProductVariants();
    }

    /**
     * {@inheritDoc}
     */
    public function hasProductVariant(\Sylius\Component\Core\Model\ProductVariantInterface $productVariant): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasProductVariant', [$productVariant]);

        return parent::hasProductVariant($productVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function addProductVariant(\Sylius\Component\Core\Model\ProductVariantInterface $productVariant): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addProductVariant', [$productVariant]);

        parent::addProductVariant($productVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function removeProductVariant(\Sylius\Component\Core\Model\ProductVariantInterface $productVariant): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeProductVariant', [$productVariant]);

        parent::removeProductVariant($productVariant);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getType(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setType(?string $type): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getFile(): ?\SplFileInfo
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFile', []);

        return parent::getFile();
    }

    /**
     * {@inheritDoc}
     */
    public function setFile(?\SplFileInfo $file): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFile', [$file]);

        parent::setFile($file);
    }

    /**
     * {@inheritDoc}
     */
    public function hasFile(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasFile', []);

        return parent::hasFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getPath(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPath', []);

        return parent::getPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setPath(?string $path): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPath', [$path]);

        parent::setPath($path);
    }

    /**
     * {@inheritDoc}
     */
    public function hasPath(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasPath', []);

        return parent::hasPath();
    }

    /**
     * {@inheritDoc}
     */
    public function getOwner()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwner', []);

        return parent::getOwner();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwner($owner): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwner', [$owner]);

        parent::setOwner($owner);
    }

}
