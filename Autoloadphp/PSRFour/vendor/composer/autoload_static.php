<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbe0b293cadc395a41904d858bfe104ec
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PSRFour\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PSRFour\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbe0b293cadc395a41904d858bfe104ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbe0b293cadc395a41904d858bfe104ec::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
