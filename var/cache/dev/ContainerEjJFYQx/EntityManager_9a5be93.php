<?php

namespace ContainerEjJFYQx;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfde6d = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializerb1d0d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesb65c6 = [
        
    ];

    public function getConnection()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getConnection', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getMetadataFactory', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getExpressionBuilder', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'beginTransaction', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->beginTransaction();
    }

    public function getCache()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getCache', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getCache();
    }

    public function transactional($func)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'transactional', array('func' => $func), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'commit', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->commit();
    }

    public function rollback()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'rollback', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getClassMetadata', array('className' => $className), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'createQuery', array('dql' => $dql), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'createNamedQuery', array('name' => $name), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'createQueryBuilder', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'flush', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'clear', array('entityName' => $entityName), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->clear($entityName);
    }

    public function close()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'close', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->close();
    }

    public function persist($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'persist', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'remove', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'refresh', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'detach', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'merge', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'contains', array('entity' => $entity), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getEventManager', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getConfiguration', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'isOpen', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getUnitOfWork', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getProxyFactory', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'initializeObject', array('obj' => $obj), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'getFilters', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'isFiltersStateClean', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'hasFilters', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return $this->valueHolderfde6d->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializerb1d0d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfde6d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfde6d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfde6d->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__get', ['name' => $name], $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        if (isset(self::$publicPropertiesb65c6[$name])) {
            return $this->valueHolderfde6d->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde6d;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfde6d;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde6d;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfde6d;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__isset', array('name' => $name), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde6d;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfde6d;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__unset', array('name' => $name), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfde6d;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfde6d;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__clone', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        $this->valueHolderfde6d = clone $this->valueHolderfde6d;
    }

    public function __sleep()
    {
        $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, '__sleep', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;

        return array('valueHolderfde6d');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerb1d0d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerb1d0d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializerb1d0d && ($this->initializerb1d0d->__invoke($valueHolderfde6d, $this, 'initializeProxy', array(), $this->initializerb1d0d) || 1) && $this->valueHolderfde6d = $valueHolderfde6d;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfde6d;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfde6d;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
