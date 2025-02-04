<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6cddd625262a8bf096d2edee761a8c98
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'GraphQL\\' => 8,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'GraphQL\\' => 
        array (
            0 => __DIR__ . '/..' . '/webonyx/graphql-php/src',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6cddd625262a8bf096d2edee761a8c98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6cddd625262a8bf096d2edee761a8c98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6cddd625262a8bf096d2edee761a8c98::$classMap;

        }, null, ClassLoader::class);
    }
}
