<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfc7192b55c2d0d3f44278cbb7aae7b83
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfc7192b55c2d0d3f44278cbb7aae7b83::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfc7192b55c2d0d3f44278cbb7aae7b83::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
