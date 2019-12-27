<?php
declare(strict_types=1);

namespace cp\HealthCheckBundle\Entity;

class CommonHealthChecker implements HealthDataInterface
{
    private $status;
    private $additionalInfo = [];

    public function __construct(int $status)
    {
        $this->setStatus($status);
    }

    public function setStatus(int $status)
    {
        $this->status = $status;
    }

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setAdditionalInfo(array $additionalInfo)
    {
        $this->additionalInfo = $additionalInfo;
    }

    public function getAdditionalInfo(): array
    {
        return $this->additionalInfo;
    }
}
