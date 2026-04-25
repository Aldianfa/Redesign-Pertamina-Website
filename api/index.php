<?php

$_SERVER['SCRIPT_NAME'] = '/index.php';

if (!is_dir('/tmp/bootstrap-cache')) {
    mkdir('/tmp/bootstrap-cache', 0777, true);
}

putenv('APP_CONFIG_CACHE=/tmp/bootstrap-cache/config.php');
putenv('APP_SERVICES_CACHE=/tmp/bootstrap-cache/services.php');
putenv('APP_PACKAGES_CACHE=/tmp/bootstrap-cache/packages.php');

require __DIR__.'/../public/index.php';