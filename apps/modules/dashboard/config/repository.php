<?php

use Kun\Dashboard\Infrastructure\Persistence\SqlServerAnnouncementRepository;
use Kun\Dashboard\Infrastructure\Persistence\SqlServerProvinceRepository;
use Kun\Dashboard\Infrastructure\Persistence\SqlServerRegencyRepository;
use Kun\Dashboard\Infrastructure\Persistence\SqlServerUserRepository;

$di->set('sqlServerUserRepository', function() use ($di) {
    return new SqlServerUserRepository($di->get('db'));
});

$di->set('sqlServerAnnouncementRepository', function() use ($di) {
    return new SqlServerAnnouncementRepository($di->get('db'));
});

$di->set('sqlServerProvinceRepository', function() use ($di) {
    return new SqlServerProvinceRepository($di->get('db'));
});

$di->set('sqlServerRegencyRepository', function() use ($di) {
    return new SqlServerRegencyRepository($di->get('db'));
});