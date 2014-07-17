<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AddRememberTokenToUsersTable' => $baseDir . '/app/database/migrations/2014_07_16_075748_add_rememberToken_to_users_table.php',
    'App\\Modules\\Core\\ServiceProvider' => $baseDir . '/app/modules/core/ServiceProvider.php',
    'App\\Modules\\ServiceProvider' => $baseDir . '/app/modules/ServiceProvider.php',
    'App\\Modules\\Transaction\\ServiceProvider' => $baseDir . '/app/modules/transaction/ServiceProvider.php',
    'BaseController' => $baseDir . '/app/controllers/BaseController.php',
    'CreateCustomersTable' => $baseDir . '/app/database/migrations/2014_07_15_160250_create_customers_table.php',
    'CreateTransactionsTable' => $baseDir . '/app/database/migrations/2014_07_15_161131_create_transactions_table.php',
    'CreateUsersTable' => $baseDir . '/app/database/migrations/2014_07_15_110459_create_users_table.php',
    'Customer' => $baseDir . '/app/models/Customer.php',
    'DatabaseSeeder' => $baseDir . '/app/database/seeds/DatabaseSeeder.php',
    'IlluminateQueueClosure' => $vendorDir . '/laravel/framework/src/Illuminate/Queue/IlluminateQueueClosure.php',
    'SessionHandlerInterface' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/SessionHandlerInterface.php',
    'SessionsController' => $baseDir . '/app/controllers/SessionsController.php',
    'Symfony\\Component\\HttpFoundation\\Resources\\stubs\\FakeFile' => $vendorDir . '/symfony/http-foundation/Symfony/Component/HttpFoundation/Resources/stubs/FakeFile.php',
    'TestCase' => $baseDir . '/app/tests/TestCase.php',
    'Transaction' => $baseDir . '/app/models/Transanction.php',
    'TransactionsController' => $baseDir . '/app/modules/transaction/controller/TransactionsController.php',
    'User' => $baseDir . '/app/models/User.php',
    'UsersController' => $baseDir . '/app/controllers/UsersController.php',
    'Whoops\\Module' => $vendorDir . '/filp/whoops/src/deprecated/Zend/Module.php',
    'Whoops\\Provider\\Zend\\ExceptionStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/ExceptionStrategy.php',
    'Whoops\\Provider\\Zend\\RouteNotFoundStrategy' => $vendorDir . '/filp/whoops/src/deprecated/Zend/RouteNotFoundStrategy.php',
);
