<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite84df942c5dad218dc385745d8fc6c7a
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite84df942c5dad218dc385745d8fc6c7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite84df942c5dad218dc385745d8fc6c7a::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
