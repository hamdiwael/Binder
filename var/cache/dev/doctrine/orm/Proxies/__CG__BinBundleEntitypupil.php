<?php

namespace Proxies\__CG__\BinBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class pupil extends \BinBundle\Entity\pupil implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'id', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'name', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'email', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'birthday', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'classes', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'iduser', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'idparent'];
        }

        return ['__isInitialized__', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'id', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'name', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'email', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'birthday', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'classes', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'iduser', '' . "\0" . 'BinBundle\\Entity\\pupil' . "\0" . 'idparent'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (pupil $proxy) {
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
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getBirthday()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBirthday', []);

        return parent::getBirthday();
    }

    /**
     * {@inheritDoc}
     */
    public function setBirthday($birthday)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBirthday', [$birthday]);

        return parent::setBirthday($birthday);
    }

    /**
     * {@inheritDoc}
     */
    public function getClasses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClasses', []);

        return parent::getClasses();
    }

    /**
     * {@inheritDoc}
     */
    public function setClasses($classes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClasses', [$classes]);

        return parent::setClasses($classes);
    }

    /**
     * {@inheritDoc}
     */
    public function getIduser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIduser', []);

        return parent::getIduser();
    }

    /**
     * {@inheritDoc}
     */
    public function setIduser($iduser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIduser', [$iduser]);

        return parent::setIduser($iduser);
    }

    /**
     * {@inheritDoc}
     */
    public function getIdparent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIdparent', []);

        return parent::getIdparent();
    }

    /**
     * {@inheritDoc}
     */
    public function setIdparent($idparent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIdparent', [$idparent]);

        return parent::setIdparent($idparent);
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
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
    }

}
