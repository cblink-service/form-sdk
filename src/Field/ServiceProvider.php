<?php

namespace Cblink\Service\Form\Field;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['field'] = function ($pimple){
            return new Client($pimple);
        };
    }
}