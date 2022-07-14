<?php

namespace Container7qbgEPF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/src/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderb5fa0 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer14b75 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties1bbbf = [
        
    ];

    public function getConnection()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getConnection', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getMetadataFactory', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getExpressionBuilder', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'beginTransaction', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getCache', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getCache();
    }

    public function transactional($func)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'transactional', array('func' => $func), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'wrapInTransaction', array('func' => $func), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'commit', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->commit();
    }

    public function rollback()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'rollback', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getClassMetadata', array('className' => $className), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'createQuery', array('dql' => $dql), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'createNamedQuery', array('name' => $name), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'createQueryBuilder', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'flush', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'clear', array('entityName' => $entityName), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->clear($entityName);
    }

    public function close()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'close', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->close();
    }

    public function persist($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'persist', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'remove', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'refresh', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'detach', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'merge', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getRepository', array('entityName' => $entityName), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'contains', array('entity' => $entity), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getEventManager', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getConfiguration', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'isOpen', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getUnitOfWork', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getProxyFactory', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'initializeObject', array('obj' => $obj), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'getFilters', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'isFiltersStateClean', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'hasFilters', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return $this->valueHolderb5fa0->hasFilters();
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

        $instance->initializer14b75 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderb5fa0) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderb5fa0 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderb5fa0->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__get', ['name' => $name], $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        if (isset(self::$publicProperties1bbbf[$name])) {
            return $this->valueHolderb5fa0->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5fa0;

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

        $targetObject = $this->valueHolderb5fa0;
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
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5fa0;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderb5fa0;
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
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__isset', array('name' => $name), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5fa0;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderb5fa0;
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
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__unset', array('name' => $name), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderb5fa0;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderb5fa0;
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
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__clone', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        $this->valueHolderb5fa0 = clone $this->valueHolderb5fa0;
    }

    public function __sleep()
    {
        $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, '__sleep', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;

        return array('valueHolderb5fa0');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer14b75 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer14b75;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer14b75 && ($this->initializer14b75->__invoke($valueHolderb5fa0, $this, 'initializeProxy', array(), $this->initializer14b75) || 1) && $this->valueHolderb5fa0 = $valueHolderb5fa0;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderb5fa0;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderb5fa0;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
