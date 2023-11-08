<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitbb2041a453792ec15f1bf6e6f2d4aaad
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitbb2041a453792ec15f1bf6e6f2d4aaad', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitbb2041a453792ec15f1bf6e6f2d4aaad', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitbb2041a453792ec15f1bf6e6f2d4aaad::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
