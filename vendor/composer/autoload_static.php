<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitffa84b83efe623ae627f8b66873f3d20
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'VcrHtml\\Html\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'VcrHtml\\Html\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitffa84b83efe623ae627f8b66873f3d20::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitffa84b83efe623ae627f8b66873f3d20::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitffa84b83efe623ae627f8b66873f3d20::$classMap;

        }, null, ClassLoader::class);
    }
}