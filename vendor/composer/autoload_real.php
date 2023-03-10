<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite05ce415d61f3431d0b70846ff7fa3a7
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

        spl_autoload_register(array('ComposerAutoloaderInite05ce415d61f3431d0b70846ff7fa3a7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite05ce415d61f3431d0b70846ff7fa3a7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite05ce415d61f3431d0b70846ff7fa3a7::getInitializer($loader));

        $loader->register(true);

        $includeFiles = \Composer\Autoload\ComposerStaticInite05ce415d61f3431d0b70846ff7fa3a7::$files;
        foreach ($includeFiles as $fileIdentifier => $file) {
            composerRequiree05ce415d61f3431d0b70846ff7fa3a7($fileIdentifier, $file);
        }

        return $loader;
    }
}

/**
 * @param string $fileIdentifier
 * @param string $file
 * @return void
 */
function composerRequiree05ce415d61f3431d0b70846ff7fa3a7($fileIdentifier, $file)
{
    if (empty($GLOBALS['__composer_autoload_files'][$fileIdentifier])) {
        $GLOBALS['__composer_autoload_files'][$fileIdentifier] = true;

        require $file;
    }
}
