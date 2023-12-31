<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc798c1186434b6a0e576f984cba8ef43
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tossn\\ThumbCreator\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tossn\\ThumbCreator\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitc798c1186434b6a0e576f984cba8ef43::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc798c1186434b6a0e576f984cba8ef43::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc798c1186434b6a0e576f984cba8ef43::$classMap;

        }, null, ClassLoader::class);
    }
}
