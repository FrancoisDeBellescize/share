<?php

namespace Proxies\__CG__\Application\Sonata\MediaBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Media extends \Application\Sonata\MediaBundle\Entity\Media implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', '' . "\0" . 'Application\\Sonata\\MediaBundle\\Entity\\Media' . "\0" . 'folder', 'name', 'description', 'enabled', 'providerName', 'providerStatus', 'providerReference', 'providerMetadata', 'width', 'height', 'length', 'copyright', 'authorName', 'context', 'cdnIsFlushable', 'cdnFlushAt', 'cdnStatus', 'updatedAt', 'createdAt', 'binaryContent', 'previousProviderReference', 'contentType', 'size', 'galleryHasMedias'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'Application\\Sonata\\MediaBundle\\Entity\\Media' . "\0" . 'folder', 'name', 'description', 'enabled', 'providerName', 'providerStatus', 'providerReference', 'providerMetadata', 'width', 'height', 'length', 'copyright', 'authorName', 'context', 'cdnIsFlushable', 'cdnFlushAt', 'cdnStatus', 'updatedAt', 'createdAt', 'binaryContent', 'previousProviderReference', 'contentType', 'size', 'galleryHasMedias'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Media $proxy) {
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
    public function prePersist()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'prePersist', []);

        return parent::prePersist();
    }

    /**
     * {@inheritDoc}
     */
    public function preUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'preUpdate', []);

        return parent::preUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function setBinaryContent($binaryContent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBinaryContent', [$binaryContent]);

        return parent::setBinaryContent($binaryContent);
    }

    /**
     * {@inheritDoc}
     */
    public function getBinaryContent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBinaryContent', []);

        return parent::getBinaryContent();
    }

    /**
     * {@inheritDoc}
     */
    public function getMetadataValue($name, $default = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMetadataValue', [$name, $default]);

        return parent::getMetadataValue($name, $default);
    }

    /**
     * {@inheritDoc}
     */
    public function setMetadataValue($name, $value)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMetadataValue', [$name, $value]);

        return parent::setMetadataValue($name, $value);
    }

    /**
     * {@inheritDoc}
     */
    public function unsetMetadataValue($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'unsetMetadataValue', [$name]);

        return parent::unsetMetadataValue($name);
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', [$name]);

        return parent::setName($name);
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
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnabled($enabled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnabled', [$enabled]);

        return parent::setEnabled($enabled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnabled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnabled', []);

        return parent::getEnabled();
    }

    /**
     * {@inheritDoc}
     */
    public function setProviderName($providerName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProviderName', [$providerName]);

        return parent::setProviderName($providerName);
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProviderName', []);

        return parent::getProviderName();
    }

    /**
     * {@inheritDoc}
     */
    public function setProviderStatus($providerStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProviderStatus', [$providerStatus]);

        return parent::setProviderStatus($providerStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProviderStatus', []);

        return parent::getProviderStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function setProviderReference($providerReference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProviderReference', [$providerReference]);

        return parent::setProviderReference($providerReference);
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProviderReference', []);

        return parent::getProviderReference();
    }

    /**
     * {@inheritDoc}
     */
    public function setProviderMetadata(array $providerMetadata = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProviderMetadata', [$providerMetadata]);

        return parent::setProviderMetadata($providerMetadata);
    }

    /**
     * {@inheritDoc}
     */
    public function getProviderMetadata()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProviderMetadata', []);

        return parent::getProviderMetadata();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidth($width)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidth', [$width]);

        return parent::setWidth($width);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidth()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidth', []);

        return parent::getWidth();
    }

    /**
     * {@inheritDoc}
     */
    public function setHeight($height)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHeight', [$height]);

        return parent::setHeight($height);
    }

    /**
     * {@inheritDoc}
     */
    public function getHeight()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHeight', []);

        return parent::getHeight();
    }

    /**
     * {@inheritDoc}
     */
    public function setLength($length)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLength', [$length]);

        return parent::setLength($length);
    }

    /**
     * {@inheritDoc}
     */
    public function getLength()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLength', []);

        return parent::getLength();
    }

    /**
     * {@inheritDoc}
     */
    public function setCopyright($copyright)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCopyright', [$copyright]);

        return parent::setCopyright($copyright);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopyright()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopyright', []);

        return parent::getCopyright();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorName($authorName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorName', [$authorName]);

        return parent::setAuthorName($authorName);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorName', []);

        return parent::getAuthorName();
    }

    /**
     * {@inheritDoc}
     */
    public function setContext($context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContext', [$context]);

        return parent::setContext($context);
    }

    /**
     * {@inheritDoc}
     */
    public function getContext()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContext', []);

        return parent::getContext();
    }

    /**
     * {@inheritDoc}
     */
    public function setCdnIsFlushable($cdnIsFlushable)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCdnIsFlushable', [$cdnIsFlushable]);

        return parent::setCdnIsFlushable($cdnIsFlushable);
    }

    /**
     * {@inheritDoc}
     */
    public function getCdnIsFlushable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCdnIsFlushable', []);

        return parent::getCdnIsFlushable();
    }

    /**
     * {@inheritDoc}
     */
    public function setCdnFlushAt(\DateTime $cdnFlushAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCdnFlushAt', [$cdnFlushAt]);

        return parent::setCdnFlushAt($cdnFlushAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCdnFlushAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCdnFlushAt', []);

        return parent::getCdnFlushAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setContentType($contentType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setContentType', [$contentType]);

        return parent::setContentType($contentType);
    }

    /**
     * {@inheritDoc}
     */
    public function getContentType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getContentType', []);

        return parent::getContentType();
    }

    /**
     * {@inheritDoc}
     */
    public function getExtension()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtension', []);

        return parent::getExtension();
    }

    /**
     * {@inheritDoc}
     */
    public function setSize($size)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSize', [$size]);

        return parent::setSize($size);
    }

    /**
     * {@inheritDoc}
     */
    public function getSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSize', []);

        return parent::getSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setCdnStatus($cdnStatus)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCdnStatus', [$cdnStatus]);

        return parent::setCdnStatus($cdnStatus);
    }

    /**
     * {@inheritDoc}
     */
    public function getCdnStatus()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCdnStatus', []);

        return parent::getCdnStatus();
    }

    /**
     * {@inheritDoc}
     */
    public function getBox()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBox', []);

        return parent::getBox();
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
    public function setGalleryHasMedias($galleryHasMedias)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGalleryHasMedias', [$galleryHasMedias]);

        return parent::setGalleryHasMedias($galleryHasMedias);
    }

    /**
     * {@inheritDoc}
     */
    public function getGalleryHasMedias()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGalleryHasMedias', []);

        return parent::getGalleryHasMedias();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreviousProviderReference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreviousProviderReference', []);

        return parent::getPreviousProviderReference();
    }

    /**
     * {@inheritDoc}
     */
    public function isStatusErroneous(\Symfony\Component\Validator\ExecutionContextInterface $context)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isStatusErroneous', [$context]);

        return parent::isStatusErroneous($context);
    }

}
