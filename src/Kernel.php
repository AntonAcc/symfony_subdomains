<?php

namespace App;

use App\Entity\ModuleRoute;
use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    protected function configureRoutes(RoutingConfigurator $routes): void
    {
        $em = $this->container->get('doctrine.orm.default_entity_manager');
        $repository = $em->getRepository(ModuleRoute::class);
        $moduleRouteList = $repository->findAll();

        $resource = '.';
        /** @var ModuleRoute $moduleRoute */
        foreach ($moduleRouteList as $moduleRoute) {
            $routes->import($resource, $moduleRoute->getRouteType())->host($moduleRoute->getHost());
        }
    }
}
