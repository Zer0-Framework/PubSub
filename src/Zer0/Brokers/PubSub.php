<?php

namespace Zer0\Brokers;

use PHPDaemon\Core\ClassFinder;
use Zer0\Config\Interfaces\ConfigInterface;

/**
 * Class PubSub
 * @package Zer0\Brokers
 */
class PubSub extends Base
{
    /**
     * @param ConfigInterface $config
     * @return \Zer0\PubSub\Pools\Base
     */
    public function instantiate(ConfigInterface $config): \Zer0\PubSub\Pools\Base
    {
        $class = ClassFinder::find($config->type, ClassFinder::getNamespace(\Zer0\PubSub\Pools\Base::class), '~');
        return new $class($config, $this->app);
    }

    /**
     * @param string $name
     * @param bool $caching
     * @return \Zer0\PubSub\Pools\Base
     */
    public function get(string $name = '', bool $caching = true): \Zer0\PubSub\Pools\Base
    {
        return parent::get($name, $caching);
    }
}
