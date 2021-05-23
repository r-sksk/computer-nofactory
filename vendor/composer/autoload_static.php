<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6da9a88517848d03a861591fef2f3846
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Practice\\' => 9,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Practice\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit6da9a88517848d03a861591fef2f3846::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6da9a88517848d03a861591fef2f3846::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6da9a88517848d03a861591fef2f3846::$classMap;

        }, null, ClassLoader::class);
    }
}