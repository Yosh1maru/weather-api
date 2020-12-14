<?php

namespace App\Api\Controller;

use App\Api\Dto\CityAddDto;
use App\Domain\Service\CityService;
use Symfony\Component\HttpFoundation\Response;

class ApiCityController
{
    /**
     * @var CityService $cityService
     */
    private CityService $cityService;

    /**
     * @param CityService $cityService
     */
    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    /**
     * @param string $cityName
     *
     * @return Response
     */
    public function indexAction(string $cityName): Response
    {
        return new Response($cityName);
    }

    /**
     * @param CityAddDto $entryDto
     */
    public function addCityAction(CityAddDto $entryDto)
    {
        $this->cityService->addCity($entryDto);
    }
}