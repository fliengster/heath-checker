<?php
declare(strict_types=1);

namespace cp\HealthCheckBundle\Service;

use cp\HealthCheckBundle\Entity\HealthDataInterface;

interface HealthInterface
{
    public const TAG = 'health.service';

    public function getName(): string;
    public function getHealthInfo(): HealthDataInterface;
}
