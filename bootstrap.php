<?php

include_once 'vendor/autoload.php';

$config = \Doctrine\ORM\ORMSetup::createAttributeMetadataConfiguration(
    [__DIR__ . '/src'],
    true
);

$connection = \Doctrine\DBAL\DriverManager::getConnection([
    'url' => 'mysql://root:root@localhost:3306/test?serverVersion=5.7.9'
], $config);

$entityManager = new \Doctrine\ORM\EntityManager($connection, $config);