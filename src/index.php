<?php
namespace Cellar;
require __DIR__ . '/../vendor/autoload.php';
$container = \DI\ContainerBuilder::buildDevContainer();

$userManager = $container->get('Cellar\Classes\UserManager');

$userManager->register('bdonberger@gmail.com', 'yes');
?>
