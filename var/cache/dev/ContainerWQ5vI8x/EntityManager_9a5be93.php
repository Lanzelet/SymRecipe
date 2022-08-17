<?php

namespace ContainerWQ5vI8x;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder96f72 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5862c = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties7e626 = [
        
    ];

    public function getConnection()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getConnection', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getMetadataFactory', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getExpressionBuilder', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'beginTransaction', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getCache', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'transactional', array('func' => $func), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'commit', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->commit();
    }

    public function rollback()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'rollback', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getClassMetadata', array('className' => $className), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'createQuery', array('dql' => $dql), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'createNamedQuery', array('name' => $name), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'createQueryBuilder', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'flush', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'clear', array('entityName' => $entityName), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->clear($entityName);
    }

    public function close()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'close', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->close();
    }

    public function persist($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'persist', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'remove', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'refresh', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'detach', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'merge', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'contains', array('entity' => $entity), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getEventManager', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getConfiguration', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'isOpen', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getUnitOfWork', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getProxyFactory', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'initializeObject', array('obj' => $obj), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'getFilters', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'isFiltersStateClean', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'hasFilters', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return $this->valueHolder96f72->hasFilters();
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

        $instance->initializer5862c = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config)
    {
        static $reflection;

        if (! $this->valueHolder96f72) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder96f72 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder96f72->__construct($conn, $config);
    }

    public function & __get($name)
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__get', ['name' => $name], $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        if (isset(self::$publicProperties7e626[$name])) {
            return $this->valueHolder96f72->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96f72;

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

        $targetObject = $this->valueHolder96f72;
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
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96f72;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder96f72;
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
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__isset', array('name' => $name), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96f72;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder96f72;
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
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__unset', array('name' => $name), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder96f72;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder96f72;
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
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__clone', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        $this->valueHolder96f72 = clone $this->valueHolder96f72;
    }

    public function __sleep()
    {
        $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, '__sleep', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;

        return array('valueHolder96f72');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5862c = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5862c;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5862c && ($this->initializer5862c->__invoke($valueHolder96f72, $this, 'initializeProxy', array(), $this->initializer5862c) || 1) && $this->valueHolder96f72 = $valueHolder96f72;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder96f72;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder96f72;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
