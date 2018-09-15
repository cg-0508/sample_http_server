<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9980faa1c2cbe1d958a8ac978d26b467
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'shs\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'shs\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9980faa1c2cbe1d958a8ac978d26b467::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9980faa1c2cbe1d958a8ac978d26b467::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}