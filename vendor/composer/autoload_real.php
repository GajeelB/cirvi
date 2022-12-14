<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitd20c9e08d3795c6cea3cb60a9b3c0dab
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

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInitd20c9e08d3795c6cea3cb60a9b3c0dab', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitd20c9e08d3795c6cea3cb60a9b3c0dab', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitd20c9e08d3795c6cea3cb60a9b3c0dab::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInitd20c9e08d3795c6cea3cb60a9b3c0dab::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequired20c9e08d3795c6cea3cb60a9b3c0dab($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequired20c9e08d3795c6cea3cb60a9b3c0dab($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
