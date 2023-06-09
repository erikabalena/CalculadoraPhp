<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0ed63f5ccbdc2b97ea289c03d6faf684
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'APP\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'APP\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0ed63f5ccbdc2b97ea289c03d6faf684::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0ed63f5ccbdc2b97ea289c03d6faf684::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0ed63f5ccbdc2b97ea289c03d6faf684::$classMap;

        }, null, ClassLoader::class);
    }
}
