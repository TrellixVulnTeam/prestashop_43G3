<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8231f2d2da7cf8b1157f660d58b625d6
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PrestaShop\\Module\\SampleModule\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PrestaShop\\Module\\SampleModule\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit8231f2d2da7cf8b1157f660d58b625d6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8231f2d2da7cf8b1157f660d58b625d6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8231f2d2da7cf8b1157f660d58b625d6::$classMap;

        }, null, ClassLoader::class);
    }
}
