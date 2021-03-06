<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7c380ce2c8949ef2b4bf58e1abbd8b1e
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'Models\\User' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
        'C' => 
        array (
            'Controllers\\HomeController' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit7c380ce2c8949ef2b4bf58e1abbd8b1e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
