<?php

namespace Zer0\Brokers;

use PHPDaemon\Core\ClassFinder;
use Zer0\Config\Interfaces\ConfigInterface;

/**
 * Class PubSubAsync
 * @package Zer0\Brokers
 */
class PubSubAsync extends Base
{
    /**
     * @var string
     */
    protected $broker = 'PubSub';

    /**
     * @var bool
     */
    protected $caching = false;

    /**
     * @param ConfigInterface $config
     * @return \Zer0\PubSub\Pools\BaseAsync
     */
    public function instantiate(ConfigInterface $config): \Zer0\PubSub\Pools\BaseAsync
    {
        $class = ClassFinder::find($config->type . 'Async', ClassFinder::getNamespace(\Zer0\PubSub\Pools\BaseAsync::class), '~');
        return new $class($config, $this->app);
    }
    
    /**
     * @param string $name
     * @param bool $caching
     * @return \Zer0\PubSub\Pools\BaseAsync
     */
    public function get(string $name = '', bool $caching = true): \Zer0\PubSub\Pools\BaseAsync
    {
        return parent::get($name, $caching);
    }
}
