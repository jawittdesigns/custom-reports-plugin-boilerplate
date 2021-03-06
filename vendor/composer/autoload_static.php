<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc947162961a57d235a48178fb8997417
{
    public static $prefixLengthsPsr4 = array (
        'M' =>
        array (
            'CustomReports\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'CustomReports\\' =>
        array (
            0 => __DIR__ . '/../..' . '/includes/classes',
        ),
    );

    public static $classMap = array (
        'CustomReports\\Includes\\Classes\\DashboardPage' => __DIR__ . '/../..' . '/includes/classes/DashboardPage.php',
        'CustomReports\\Includes\\Classes\\Reports\\Listrak' => __DIR__ . '/../..' . '/includes/classes/reports/Listrak.php',
        'CustomReports\\Includes\\Classes\\Reports\\ListrakCustomers' => __DIR__ . '/../..' . '/includes/classes/reports/ListrakCustomers.php',
        'CustomReports\\Includes\\Classes\\Reports\\ListrakOrderItems' => __DIR__ . '/../..' . '/includes/classes/reports/ListrakOrderItems.php',
        'CustomReports\\Includes\\Classes\\Reports\\ListrakOrders' => __DIR__ . '/../..' . '/includes/classes/reports/ListrakOrders.php',
        'CustomReports\\Includes\\Classes\\Reports\\ListrakProducts' => __DIR__ . '/../..' . '/includes/classes/reports/ListrakProducts.php',
        'CustomReports\\Includes\\Classes\\Reports\\Orders' => __DIR__ . '/../..' . '/includes/classes/reports/Orders.php',
        'CustomReports\\Includes\\Classes\\Reports\\Posts' => __DIR__ . '/../..' . '/includes/classes/reports/Posts.php',
        'CustomReports\\Includes\\Classes\\Reports\\ProductImages' => __DIR__ . '/../..' . '/includes/classes/reports/ProductImages.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc947162961a57d235a48178fb8997417::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc947162961a57d235a48178fb8997417::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitc947162961a57d235a48178fb8997417::$classMap;

        }, null, ClassLoader::class);
    }
}
