<?php

namespace Cblink\Service\Form;

use Cblink\Service\Foundation\Container;

/**
 * @property Form\Client $form
 * @property Data\Client $data
 * @property Search\Client $search
 * @property Field\Client $field
 */
class Application extends Container
{

    protected array $providers = [
        Form\ServiceProvider::class,
        Data\ServiceProvider::class,
        Search\ServiceProvider::class,
        Field\ServiceProvider::class,
    ];

}