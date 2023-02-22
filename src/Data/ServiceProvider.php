<?php

namespace Cblink\Service\Form\Data;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['data'] = function ($pimple){
            return new Client($pimple);
        };
    }
}