<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit08ed56bf2b9e9432af13c140e1fabb21
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Iolivieri\\Iopackage\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Iolivieri\\Iopackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit08ed56bf2b9e9432af13c140e1fabb21::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit08ed56bf2b9e9432af13c140e1fabb21::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit08ed56bf2b9e9432af13c140e1fabb21::$classMap;

        }, null, ClassLoader::class);
    }
}
