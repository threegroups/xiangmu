<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
<<<<<<< HEAD
            'dsn' => 'mysql:host=127.0.0.1;dbname=project',
=======
            'dsn' => 'mysql:host=localhost;dbname=project',
>>>>>>> efdedffeb6789ce36dd9618f95538edfd89cf9ca
            'username' => 'root',
            'password' => 'root',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
