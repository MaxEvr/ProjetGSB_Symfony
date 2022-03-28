<?php

namespace ContainerJ0g1zOn;
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder21cb7 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer842f2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesea43c = [
        
    ];

    public function getConnection()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getConnection', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getMetadataFactory', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getExpressionBuilder', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'beginTransaction', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getCache', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getCache();
    }

    public function transactional($func)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'transactional', array('func' => $func), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'wrapInTransaction', array('func' => $func), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'commit', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->commit();
    }

    public function rollback()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'rollback', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getClassMetadata', array('className' => $className), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'createQuery', array('dql' => $dql), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'createNamedQuery', array('name' => $name), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'createQueryBuilder', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'flush', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'clear', array('entityName' => $entityName), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->clear($entityName);
    }

    public function close()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'close', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->close();
    }

    public function persist($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'persist', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'remove', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'refresh', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'detach', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'merge', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getRepository', array('entityName' => $entityName), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'contains', array('entity' => $entity), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getEventManager', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getConfiguration', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'isOpen', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getUnitOfWork', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getProxyFactory', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'initializeObject', array('obj' => $obj), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'getFilters', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'isFiltersStateClean', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'hasFilters', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return $this->valueHolder21cb7->hasFilters();
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

        $instance->initializer842f2 = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder21cb7) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder21cb7 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder21cb7->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__get', ['name' => $name], $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        if (isset(self::$publicPropertiesea43c[$name])) {
            return $this->valueHolder21cb7->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21cb7;

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

        $targetObject = $this->valueHolder21cb7;
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
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21cb7;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder21cb7;
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
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__isset', array('name' => $name), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21cb7;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder21cb7;
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
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__unset', array('name' => $name), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder21cb7;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder21cb7;
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
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__clone', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        $this->valueHolder21cb7 = clone $this->valueHolder21cb7;
    }

    public function __sleep()
    {
        $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, '__sleep', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;

        return array('valueHolder21cb7');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer842f2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer842f2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer842f2 && ($this->initializer842f2->__invoke($valueHolder21cb7, $this, 'initializeProxy', array(), $this->initializer842f2) || 1) && $this->valueHolder21cb7 = $valueHolder21cb7;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder21cb7;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder21cb7;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
