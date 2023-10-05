<?php

/**
 * @author Anton Acc <me@anton-a.cc>
 */
declare(strict_types=1);

namespace ModuleOneBundle\Routing;

use Symfony\Component\Config\Loader\Loader;
use Symfony\Component\Routing\RouteCollection;

class RoutingLoader extends Loader
{
    public function load($resource, string $type = null): RouteCollection
    {
        $routes = new RouteCollection();

        $resource = __DIR__ . '/../../config/routes.yaml';
        $type = 'yaml';

        $importedRoutes = $this->import($resource, $type);

        $routes->addCollection($importedRoutes);

        return $routes;
    }

    public function supports($resource, string $type = null): bool
    {
        return 'module_one' === $type;
    }
}
