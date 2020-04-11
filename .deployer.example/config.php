<?php

namespace Deployer;

set('mysql_database', 'demo-app');
set('mysql_password', 'root');
set('git_username', 'MyName');
set('git_email', 'myemail@example.com');
set('swap_memory_size', '2048');
set('application', 'my-app');
set('application_name', 'MyApp');
set('domain', 'my-domain.com'); // The domain name which points to your server IP
set('email', 'myemail@example.com');
set('repository', 'git@github.com:laravel/laravel.git');
set('keep_releases', 5);
set('composer_options', 'install --no-dev');

inventory(__DIR__ . '/.hosts.yml');
