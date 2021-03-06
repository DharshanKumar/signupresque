<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf2282042308fce551432447eca7a931e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
        ),
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'ResqueStatus' => 
            array (
                0 => __DIR__ . '/..' . '/kamisama/resque-status/src',
            ),
            'ResqueScheduler' => 
            array (
                0 => __DIR__ . '/..' . '/kamisama/php-resque-ex-scheduler/lib',
            ),
            'Resque' => 
            array (
                0 => __DIR__ . '/..' . '/kamisama/php-resque-ex/lib',
            ),
        ),
        'M' => 
        array (
            'MonologInit' => 
            array (
                0 => __DIR__ . '/..' . '/kamisama/monolog-init/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf2282042308fce551432447eca7a931e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf2282042308fce551432447eca7a931e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf2282042308fce551432447eca7a931e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
