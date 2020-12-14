<?php

namespace App\App\Resolver;

use App\Api\Dto\CityAddDto;
use Generator;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class CityAddDtoResolver implements ArgumentValueResolverInterface
{
    private const ROUTE = 'add_city';

    /**
     * @param Request $request
     * @param ArgumentMetadata $argument
     *
     * @return bool
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        if ($request->attributes->get('_route') === self::ROUTE) {
            return true;
        }

        return false;
    }

    public function resolve(Request $request, ArgumentMetadata $argument): Generator
    {
        //add some validation here

        yield new CityAddDto($request);
    }
}