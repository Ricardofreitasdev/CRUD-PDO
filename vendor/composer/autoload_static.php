<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb386f1cb6794e2dd4330e421c5c33b4a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb386f1cb6794e2dd4330e421c5c33b4a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb386f1cb6794e2dd4330e421c5c33b4a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}