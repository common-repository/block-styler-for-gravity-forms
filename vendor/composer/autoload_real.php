<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc4081b2efb71e415c36c2a4b305b8ab1
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

        spl_autoload_register(array('ComposerAutoloaderInitc4081b2efb71e415c36c2a4b305b8ab1', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc4081b2efb71e415c36c2a4b305b8ab1', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc4081b2efb71e415c36c2a4b305b8ab1::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
