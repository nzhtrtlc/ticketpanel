<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc7d6ed55854e6aa7b1e3908dde20653f
{
    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitc7d6ed55854e6aa7b1e3908dde20653f::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
