<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8c7d8507570c8d523b6f381d3e88e07f
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8c7d8507570c8d523b6f381d3e88e07f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8c7d8507570c8d523b6f381d3e88e07f::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
