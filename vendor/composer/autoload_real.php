<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit11b5e90b573181bddc9b3f52b24dd81f
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

        spl_autoload_register(array('ComposerAutoloaderInit11b5e90b573181bddc9b3f52b24dd81f', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit11b5e90b573181bddc9b3f52b24dd81f', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit11b5e90b573181bddc9b3f52b24dd81f::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
