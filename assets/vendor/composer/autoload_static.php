<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbb2041a453792ec15f1bf6e6f2d4aaad
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Precision15\\Assets\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Precision15\\Assets\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitbb2041a453792ec15f1bf6e6f2d4aaad::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbb2041a453792ec15f1bf6e6f2d4aaad::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbb2041a453792ec15f1bf6e6f2d4aaad::$classMap;

        }, null, ClassLoader::class);
    }
}
