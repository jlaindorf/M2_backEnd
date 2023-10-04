<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite24555ee3978db2d8309448f3b8bd270
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'A' => 
        array (
            'Api\\Atendimento\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Api\\Atendimento\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite24555ee3978db2d8309448f3b8bd270::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite24555ee3978db2d8309448f3b8bd270::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite24555ee3978db2d8309448f3b8bd270::$classMap;

        }, null, ClassLoader::class);
    }
}