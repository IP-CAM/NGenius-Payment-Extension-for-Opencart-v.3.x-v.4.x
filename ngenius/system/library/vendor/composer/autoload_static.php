<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0169cf49ddd10f2e103e95a217747df6
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ngenius\\NgeniusCommon\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0169cf49ddd10f2e103e95a217747df6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0169cf49ddd10f2e103e95a217747df6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0169cf49ddd10f2e103e95a217747df6::$classMap;

        }, null, ClassLoader::class);
    }
}
