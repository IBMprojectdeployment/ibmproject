<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit83c1b4502fc91022179d7282f3fff9c9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit83c1b4502fc91022179d7282f3fff9c9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit83c1b4502fc91022179d7282f3fff9c9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit83c1b4502fc91022179d7282f3fff9c9::$classMap;

        }, null, ClassLoader::class);
    }
}