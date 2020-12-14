<?php

namespace App\Api\Dto;

use Symfony\Component\HttpFoundation\Request;

class CityAddDto
{
    /**
     * @var null|string $city
     */
    private ?string $city;

    /**
     * @var null|string $country
     */
    private ?string $country;

    /**
     * @param Request $request
     */
    public function __construct(Request $request)
    {
        $requestData = json_decode($request->getContent(), true);

        $this->city = $requestData['city'] ?? null;
        $this->country = $requestData['country'] ?? null;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }
}