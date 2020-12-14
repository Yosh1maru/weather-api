<?php

namespace App\Domain\Service;

use App\Api\Dto\CityAddDto;
use App\Domain\Manager\CityManager;

class CityService
{
    private CityManager $cityManager;

    public function __construct(CityManager $cityManager)
    {
        $this->cityManager = $cityManager;
    }

    public function addCity(CityAddDto $addDto)
    {
        //use $cityManager to save data to DB
    }
}