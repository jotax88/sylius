<?php

namespace Proxies\__CG__\Sylius\Component\Core\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class OrderItem extends \Sylius\Component\Core\Model\OrderItem implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'variant', 'productName', 'variantName', 'id', 'order', 'quantity', 'unitPrice', 'total', 'immutable', 'units', 'unitsTotal', 'adjustments', 'adjustmentsTotal'];
        }

        return ['__isInitialized__', 'variant', 'productName', 'variantName', 'id', 'order', 'quantity', 'unitPrice', 'total', 'immutable', 'units', 'unitsTotal', 'adjustments', 'adjustmentsTotal'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (OrderItem $proxy) {
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
    public function getVariant(): ?\Sylius\Component\Core\Model\ProductVariantInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariant', []);

        return parent::getVariant();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariant(?\Sylius\Component\Core\Model\ProductVariantInterface $variant): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariant', [$variant]);

        parent::setVariant($variant);
    }

    /**
     * {@inheritDoc}
     */
    public function getProduct(): ?\Sylius\Component\Core\Model\ProductInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProduct', []);

        return parent::getProduct();
    }

    /**
     * {@inheritDoc}
     */
    public function getProductName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProductName', []);

        return parent::getProductName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProductName(?string $productName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProductName', [$productName]);

        parent::setProductName($productName);
    }

    /**
     * {@inheritDoc}
     */
    public function getVariantName(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVariantName', []);

        return parent::getVariantName();
    }

    /**
     * {@inheritDoc}
     */
    public function setVariantName(?string $variantName): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVariantName', [$variantName]);

        parent::setVariantName($variantName);
    }

    /**
     * {@inheritDoc}
     */
    public function equals(\Sylius\Component\Order\Model\OrderItemInterface $item): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'equals', [$item]);

        return parent::equals($item);
    }

    /**
     * {@inheritDoc}
     */
    public function getTaxTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTaxTotal', []);

        return parent::getTaxTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function getDiscountedUnitPrice(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDiscountedUnitPrice', []);

        return parent::getDiscountedUnitPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function getSubtotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSubtotal', []);

        return parent::getSubtotal();
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
    public function getQuantity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getOrder(): ?\Sylius\Component\Order\Model\OrderInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder(?\Sylius\Component\Order\Model\OrderInterface $order): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnitPrice(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnitPrice', []);

        return parent::getUnitPrice();
    }

    /**
     * {@inheritDoc}
     */
    public function setUnitPrice(int $unitPrice): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUnitPrice', [$unitPrice]);

        parent::setUnitPrice($unitPrice);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotal(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotal', []);

        return parent::getTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function recalculateAdjustmentsTotal(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recalculateAdjustmentsTotal', []);

        parent::recalculateAdjustmentsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function recalculateUnitsTotal(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'recalculateUnitsTotal', []);

        parent::recalculateUnitsTotal();
    }

    /**
     * {@inheritDoc}
     */
    public function isImmutable(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isImmutable', []);

        return parent::isImmutable();
    }

    /**
     * {@inheritDoc}
     */
    public function setImmutable(bool $immutable): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImmutable', [$immutable]);

        parent::setImmutable($immutable);
    }

    /**
     * {@inheritDoc}
     */
    public function getUnits(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnits', []);

        return parent::getUnits();
    }

    /**
     * {@inheritDoc}
     */
    public function addUnit(\Sylius\Component\Order\Model\OrderItemUnitInterface $unit): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addUnit', [$unit]);

        parent::addUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function removeUnit(\Sylius\Component\Order\Model\OrderItemUnitInterface $unit): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeUnit', [$unit]);

        parent::removeUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function hasUnit(\Sylius\Component\Order\Model\OrderItemUnitInterface $unit): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasUnit', [$unit]);

        return parent::hasUnit($unit);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustments(string $type = NULL): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustments', [$type]);

        return parent::getAdjustments($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsRecursively(string $type = NULL): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsRecursively', [$type]);

        return parent::getAdjustmentsRecursively($type);
    }

    /**
     * {@inheritDoc}
     */
    public function addAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addAdjustment', [$adjustment]);

        parent::addAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustment', [$adjustment]);

        parent::removeAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function hasAdjustment(\Sylius\Component\Order\Model\AdjustmentInterface $adjustment): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasAdjustment', [$adjustment]);

        return parent::hasAdjustment($adjustment);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsTotal(string $type = NULL): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsTotal', [$type]);

        return parent::getAdjustmentsTotal($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdjustmentsTotalRecursively(string $type = NULL): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdjustmentsTotalRecursively', [$type]);

        return parent::getAdjustmentsTotalRecursively($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustments(string $type = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustments', [$type]);

        parent::removeAdjustments($type);
    }

    /**
     * {@inheritDoc}
     */
    public function removeAdjustmentsRecursively(string $type = NULL): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeAdjustmentsRecursively', [$type]);

        parent::removeAdjustmentsRecursively($type);
    }

}
