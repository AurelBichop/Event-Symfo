<?php

use App\DependencyInjection\EventCompilerPass;
use App\Listener\OrderEmailsSubscriber;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\EventDispatcher\EventDispatcher;
use App\Listener\OrderSmsListener;

require __DIR__ . '/../vendor/autoload.php';

$container = new ContainerBuilder();


$loader = new YamlFileLoader($container,new FileLocator(__DIR__));

$loader->load('services.yaml');

$container->addCompilerPass(new EventCompilerPass);

$container->compile();
