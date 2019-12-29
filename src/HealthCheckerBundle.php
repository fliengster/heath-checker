<?php
declare(strict_types=1);

namespace cp\HealthCheckBundle;

use cp\HealthCheckBundle\DependencyInjection\Compiler\HealthServicePath;
use cp\HealthCheckBundle\Service\HealthInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class HealthCheckerBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addCompilerPass(new HealthServicePath());
        $container->registerForAutoconfiguration(HealthInterface::class)->addTag(HealthInterface::TAG);
    }
}
