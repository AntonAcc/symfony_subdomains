<?php
/**
 * @author Anton Acc <me@anton-a.cc>
 */
declare(strict_types=1);

namespace ModuleTwoBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;

class ModuleTwoBundle extends AbstractBundle
{
    public function loadExtension(
        array $config,
        ContainerConfigurator $containerConfigurator,
        ContainerBuilder $containerBuilder
    ): void {
        $containerConfigurator->import(__DIR__ . '/../config/services.yaml');
    }
}
