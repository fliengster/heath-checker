<?php
declare(strict_types=1);

namespace cp\HealthCheckBundle\Entity;

interface HealthDataInterface
{
    public const STATUS_OK = 1;
    public const STATUS_WARNING = 2;
    public const STATUS_ERROR = 3;

    public function getStatus(): int;
    public function getAdditionalInfo(): array;
}
