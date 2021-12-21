<?php
namespace Merophp\Singleton;

trait SingletonTrait
{

    /**
     * instance
     *
     * @var object
     */
    protected static $instances = [];


    /**
     * Get the singleton instance
     *
     * @return Singleton
     */
    public static function getInstance(): SingletonInterface
    {
        $className = get_called_class();

        if (!array_key_exists($className,self::$instances)){
            self::$instances[$className] = new $className;

        }
        return self::$instances[$className];

    }
}
