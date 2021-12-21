<?php
namespace Merophp\Singleton;

interface SingletonInterface
{
    public static function getInstance(): SingletonInterface;
}
