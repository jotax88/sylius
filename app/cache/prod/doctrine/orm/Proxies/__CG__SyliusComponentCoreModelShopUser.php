<?php

namespace Proxies\__CG__\Sylius\Component\Core\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class ShopUser extends \Sylius\Component\Core\Model\ShopUser implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'customer', 'id', 'username', 'usernameCanonical', 'salt', 'password', 'plainPassword', 'lastLogin', 'emailVerificationToken', 'passwordResetToken', 'passwordRequestedAt', 'verifiedAt', 'locked', 'expiresAt', 'credentialsExpireAt', 'roles', 'oauthAccounts', 'email', 'emailCanonical', 'createdAt', 'updatedAt', 'enabled'];
        }

        return ['__isInitialized__', 'customer', 'id', 'username', 'usernameCanonical', 'salt', 'password', 'plainPassword', 'lastLogin', 'emailVerificationToken', 'passwordResetToken', 'passwordRequestedAt', 'verifiedAt', 'locked', 'expiresAt', 'credentialsExpireAt', 'roles', 'oauthAccounts', 'email', 'emailCanonical', 'createdAt', 'updatedAt', 'enabled'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (ShopUser $proxy) {
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
    public function getCustomer(): ?\Sylius\Component\Customer\Model\CustomerInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCustomer', []);

        return parent::getCustomer();
    }

    /**
     * {@inheritDoc}
     */
    public function setCustomer(?\Sylius\Component\Customer\Model\CustomerInterface $customer): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCustomer', [$customer]);

        parent::setCustomer($customer);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(?string $email): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailCanonical(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailCanonical', []);

        return parent::getEmailCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailCanonical(?string $emailCanonical): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailCanonical', [$emailCanonical]);

        parent::setEmailCanonical($emailCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function __toString(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
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
    public function getUsername(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsername', []);

        return parent::getUsername();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsername(?string $username): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsername', [$username]);

        parent::setUsername($username);
    }

    /**
     * {@inheritDoc}
     */
    public function getUsernameCanonical(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUsernameCanonical', []);

        return parent::getUsernameCanonical();
    }

    /**
     * {@inheritDoc}
     */
    public function setUsernameCanonical(?string $usernameCanonical): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUsernameCanonical', [$usernameCanonical]);

        parent::setUsernameCanonical($usernameCanonical);
    }

    /**
     * {@inheritDoc}
     */
    public function getSalt(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSalt', []);

        return parent::getSalt();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlainPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlainPassword', []);

        return parent::getPlainPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlainPassword(?string $password): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlainPassword', [$password]);

        parent::setPlainPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(?string $password): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpiresAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpiresAt', []);

        return parent::getExpiresAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpiresAt(?\DateTimeInterface $date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpiresAt', [$date]);

        parent::setExpiresAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getCredentialsExpireAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCredentialsExpireAt', []);

        return parent::getCredentialsExpireAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCredentialsExpireAt(?\DateTimeInterface $date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCredentialsExpireAt', [$date]);

        parent::setCredentialsExpireAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastLogin(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastLogin', []);

        return parent::getLastLogin();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastLogin(?\DateTimeInterface $time): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastLogin', [$time]);

        parent::setLastLogin($time);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmailVerificationToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmailVerificationToken', []);

        return parent::getEmailVerificationToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmailVerificationToken(?string $verificationToken): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmailVerificationToken', [$verificationToken]);

        parent::setEmailVerificationToken($verificationToken);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordResetToken(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordResetToken', []);

        return parent::getPasswordResetToken();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordResetToken(?string $passwordResetToken): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordResetToken', [$passwordResetToken]);

        parent::setPasswordResetToken($passwordResetToken);
    }

    /**
     * {@inheritDoc}
     */
    public function isCredentialsNonExpired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isCredentialsNonExpired', []);

        return parent::isCredentialsNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonExpired(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonExpired', []);

        return parent::isAccountNonExpired();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocked(bool $locked): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocked', [$locked]);

        parent::setLocked($locked);
    }

    /**
     * {@inheritDoc}
     */
    public function isAccountNonLocked(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isAccountNonLocked', []);

        return parent::isAccountNonLocked();
    }

    /**
     * {@inheritDoc}
     */
    public function hasRole(string $role): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasRole', [$role]);

        return parent::hasRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function addRole(string $role): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addRole', [$role]);

        parent::addRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function removeRole(string $role): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeRole', [$role]);

        parent::removeRole($role);
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function isPasswordRequestNonExpired(\DateInterval $ttl): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isPasswordRequestNonExpired', [$ttl]);

        return parent::isPasswordRequestNonExpired($ttl);
    }

    /**
     * {@inheritDoc}
     */
    public function getPasswordRequestedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPasswordRequestedAt', []);

        return parent::getPasswordRequestedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setPasswordRequestedAt(?\DateTimeInterface $date): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPasswordRequestedAt', [$date]);

        parent::setPasswordRequestedAt($date);
    }

    /**
     * {@inheritDoc}
     */
    public function isVerified(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isVerified', []);

        return parent::isVerified();
    }

    /**
     * {@inheritDoc}
     */
    public function getVerifiedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVerifiedAt', []);

        return parent::getVerifiedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setVerifiedAt(?\DateTimeInterface $verifiedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVerifiedAt', [$verifiedAt]);

        parent::setVerifiedAt($verifiedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getOAuthAccounts(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOAuthAccounts', []);

        return parent::getOAuthAccounts();
    }

    /**
     * {@inheritDoc}
     */
    public function getOAuthAccount(string $provider): ?\Sylius\Component\User\Model\UserOAuthInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOAuthAccount', [$provider]);

        return parent::getOAuthAccount($provider);
    }

    /**
     * {@inheritDoc}
     */
    public function addOAuthAccount(\Sylius\Component\User\Model\UserOAuthInterface $oauth): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addOAuthAccount', [$oauth]);

        parent::addOAuthAccount($oauth);
    }

    /**
     * {@inheritDoc}
     */
    public function serialize(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'serialize', []);

        return parent::serialize();
    }

    /**
     * {@inheritDoc}
     */
    public function unserialize($serialized): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unserialize', [$serialized]);

        parent::unserialize($serialized);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(?\DateTimeInterface $createdAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt(): ?\DateTimeInterface
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(?\DateTimeInterface $updatedAt): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function isEnabled(): bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isEnabled', []);

        return parent::isEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled(?bool $enabled): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function enable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'enable', []);

        parent::enable();
    }

    /**
     * {@inheritDoc}
     */
    public function disable(): void
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'disable', []);

        parent::disable();
    }

}
