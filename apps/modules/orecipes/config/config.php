<?php

use Phalcon\Config;

return new Config(
    [
        'database' => [
            'adapter' => getenv('ORECIPES_DB_ADAPTER'),
            'host' => getenv('ORECIPES_DB_HOST'),
            'username' => getenv('ORECIPES_DB_USERNAME'),
            'password' => getenv('ORECIPES_DB_PASSWORD'),
            'dbname' => getenv('ORECIPES_DB_NAME'),
        ], 

        'mail' => [
            'driver' => getenv('ORECIPES_MAIL_DRIVER'),
            'cacheDir' => APP_PATH . "/cache/mail/",
            'fromName' => getenv('ORECIPES_MAIL_FROM_NAME'),
            'fromEmail' => getenv('ORECIPES_MAIL_FROM_EMAIL'),
            'smtp' => [
                'server'    => getenv('ORECIPES_MAIL_SMTP_HOST'),
                'port'      => getenv('ORECIPES_MAIL_SMTP_PORT'),
                'username'  => getenv('ORECIPES_MAIL_SMTP_USERNAME'),
                'password'  => getenv('ORECIPES_MAIL_SMTP_PASSWORD'),
            ],
        ],
    ]
);
