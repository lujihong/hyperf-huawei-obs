<?php

declare(strict_types=1);

namespace Obs;

use League\Flysystem\Filesystem;
use Hyperf\Filesystem\FilesystemInvoker;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                Filesystem::class => FilesystemInvoker::class,
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for HyperfFlysystem.',
                    'source' => __DIR__ . '/../publish/file.php',
                    'destination' => BASE_PATH . '/config/autoload/file.php',
                ],
            ],
        ];
    }
}
