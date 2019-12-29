<?php
declare(strict_types=1);

namespace cp\HealthCheckBundle\Controller;

use cp\HealthCheckBundle\Service\HealthInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HealthController extends AbstractController
{
    private $healthServices;

    public function addHealthService(HealthInterface $healthService)
    {
        $this->healthServices[] = $healthService;
    }

    /**
     * @Route("/health")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getHealth()
    {
        return $this->json(array_map(function (HealthInterface $healthService) {
            $info = $healthService->getHealthInfo();
            return [
                'name' => $healthService->getName(),
                'info' => [
                    'status' => $info->getStatus(),
                    'additional_info' => $info->getAdditionalInfo()
                ]
            ];
        }, $this->healthServices));
    }
}
