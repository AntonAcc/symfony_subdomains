<?php

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $routeList = [
            ['module_one', 'domain1.test.com'],
            ['module_two', 'domain2.test.com'],
        ];
        $resource = '.';
        foreach ($routeList as [$type, $host]) {
            $routes->import($resource, $type)->host($host);
        }
    }
}
