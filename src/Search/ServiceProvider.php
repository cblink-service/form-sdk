<?php

namespace Cblink\Service\Form\Search;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['search'] = function ($pimple){
            return new Client($pimple);
        };
    }
}