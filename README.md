# Introduction

Singleton class for the Merophp Framework.

## Installation

Via composer:

<code>
composer require merophp/singleton
</code>

## Basic Usage

<pre><code>use Merophp\Singleton\Singleton;
use Merophp\Singleton\SingletonTrait;
use Merophp\Singleton\SingletonInterface;

class MySingleton extends Singleton
{
}

$mySingleton = MySingleton::getInstance();

//or use the singleton trait

class MySecondSingleton extends SingletonInterface
{
   use SingletonTrait;
}

$mySecondSingleton = MySecondSingleton::getInstance();
</code></pre>
