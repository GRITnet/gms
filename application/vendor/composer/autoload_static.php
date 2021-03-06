<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb5b9aae065e79a3e4e9b17198a9e2cc2
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PhpAmqpLib\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PhpAmqpLib\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-amqplib/php-amqplib/PhpAmqpLib',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'TextMagicSMS' => 
            array (
                0 => __DIR__ . '/..' . '/textmagic/smsphp/src',
            ),
        ),
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb5b9aae065e79a3e4e9b17198a9e2cc2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb5b9aae065e79a3e4e9b17198a9e2cc2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitb5b9aae065e79a3e4e9b17198a9e2cc2::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
