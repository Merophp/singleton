<?php
namespace Merophp\Singleton;

abstract class Singleton implements SingletonInterface
{
    use SingletonTrait;

	/**
     * Prevent cloning
     */
	protected function __clone()
    {}

	/**
	 * Prevent instantiating from outside
     */
	protected function __construct()
    {}
}
