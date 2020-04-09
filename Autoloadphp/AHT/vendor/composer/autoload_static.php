<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0f06579c3b6701bd94a7898451c13bff
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AHT\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AHT\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0f06579c3b6701bd94a7898451c13bff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0f06579c3b6701bd94a7898451c13bff::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
