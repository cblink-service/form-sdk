<?php

namespace Cblink\Service\Form;

use Cblink\Service\Foundation\Container;
use Hyperf\Utils\Collection;

/**
 * @property-read Collection $config
 * @property-read \GuzzleHttp\Client $client
 * @property-read \Cblink\Service\Foundation\AccessToken $access_token
 *
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
        Kernel\ServiceProvider::class,
    ];

}