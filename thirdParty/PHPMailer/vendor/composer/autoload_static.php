<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite800a85a32dabdb6136d0b697a5941c0
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite800a85a32dabdb6136d0b697a5941c0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite800a85a32dabdb6136d0b697a5941c0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
