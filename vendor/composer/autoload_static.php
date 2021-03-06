<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit430a86e6e97f35128537af9b0ad96eb5
{
    public static $files = array (
        'ff53e2e2c3db89432bc44469e958241d' => __DIR__ . '/../..' . '/src/helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Text\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Text\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit430a86e6e97f35128537af9b0ad96eb5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit430a86e6e97f35128537af9b0ad96eb5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit430a86e6e97f35128537af9b0ad96eb5::$classMap;

        }, null, ClassLoader::class);
    }
}
