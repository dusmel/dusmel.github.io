<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03f0e3b502cab732f0abffd3cdd276be
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit03f0e3b502cab732f0abffd3cdd276be::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03f0e3b502cab732f0abffd3cdd276be::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}