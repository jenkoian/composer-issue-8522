<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2910a8b2b77b275a5569172215835c5d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'A\\' => 2,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'A\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'A\\Foo' => __DIR__ . '/../..' . '/src/Foo.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2910a8b2b77b275a5569172215835c5d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2910a8b2b77b275a5569172215835c5d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2910a8b2b77b275a5569172215835c5d::$classMap;

        }, null, ClassLoader::class);
    }
}
