<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2f928cdadd2d02f7d0f4a754b273223a
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'megastruktur\\' => 13,
        ),
        'N' => 
        array (
            'Ngenius\\NgeniusCommon\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'megastruktur\\' => 
        array (
            0 => __DIR__ . '/..' . '/megastruktur/phone-country-codes/src',
        ),
        'Ngenius\\NgeniusCommon\\' => 
        array (
            0 => __DIR__ . '/..' . '/ngenius/ngenius-common/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2f928cdadd2d02f7d0f4a754b273223a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2f928cdadd2d02f7d0f4a754b273223a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2f928cdadd2d02f7d0f4a754b273223a::$classMap;

        }, null, ClassLoader::class);
    }
}
