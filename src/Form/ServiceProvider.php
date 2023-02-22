<?php

namespace Cblink\Service\Form\Form;

use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['form'] = function ($pimple){
            return new Client($pimple);
        };
    }
}