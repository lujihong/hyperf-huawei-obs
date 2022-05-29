<?php

declare(strict_types=1);

namespace Obs\Adapter;

use Hyperf\Filesystem\Contract\AdapterFactoryInterface;
use Obs\ObsClient;

class ObsAdapterFactory implements AdapterFactoryInterface
{
    public function make(array $options)
    {
        $client = new ObsClient($options, $options['enable_coroutine_handler']);
        return new ObsAdapter($client, $options['bucket'], $options['endpoint'], $options['cdn_domain'], $options['ssl_verify']);
    }
}
