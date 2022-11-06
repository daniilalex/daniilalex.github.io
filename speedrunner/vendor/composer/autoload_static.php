<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit43fc6752989ccfde7434254bf85e8c7c
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'D' => 
        array (
            'Dan\\Speed\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Dan\\Speed\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit43fc6752989ccfde7434254bf85e8c7c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit43fc6752989ccfde7434254bf85e8c7c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit43fc6752989ccfde7434254bf85e8c7c::$classMap;

        }, null, ClassLoader::class);
    }
}