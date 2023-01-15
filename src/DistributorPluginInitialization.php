<?php

namespace DigitalMarketingFramework\Distributor\Cache\Pardot;

use DigitalMarketingFramework\Core\PluginInitialization;
use DigitalMarketingFramework\Distributor\Cache\Pardot\Route\PardotCacheRoute;
use DigitalMarketingFramework\Distributor\Core\Route\RouteInterface;

class DistributorPluginInitialization extends PluginInitialization
{
    protected const PLUGINS = [
        RouteInterface::class => [
            PardotCacheRoute::class,
        ],
    ];
}
