<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit13d2baeceed919458d890960f9e02137
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tugas\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tugas\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit13d2baeceed919458d890960f9e02137::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit13d2baeceed919458d890960f9e02137::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
