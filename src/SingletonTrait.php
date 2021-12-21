<?php
namespace Merophp\Singleton;

use ReflectionClass;

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
     * @return object
     */
    public static function getInstance(): object
    {
        $className = get_called_class();
        $args = func_get_args();

        if (!array_key_exists($className,self::$instances)){
            if(count($args) == 0)
                self::$instances[$className] = new $className;
            else {
                $r = new ReflectionClass($className);
                self::$instances[$className] = $r->newInstanceArgs($args);
            }

        }
        return self::$instances[$className];
    }
}
