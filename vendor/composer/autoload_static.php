<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7be95ee9621bdf3a978e77aab46cd4e1
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit7be95ee9621bdf3a978e77aab46cd4e1::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}
