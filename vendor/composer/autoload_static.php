<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit777fae19d45df2c267d87d6ebc65c8c6
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
        'c' => 
        array (
            'core\\' => 5,
        ),
        'C' => 
        array (
            'ClanCats\\Hydrahon\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/core',
        ),
        'ClanCats\\Hydrahon\\' => 
        array (
            0 => __DIR__ . '/..' . '/clancats/hydrahon/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit777fae19d45df2c267d87d6ebc65c8c6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit777fae19d45df2c267d87d6ebc65c8c6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit777fae19d45df2c267d87d6ebc65c8c6::$classMap;

        }, null, ClassLoader::class);
    }
}
