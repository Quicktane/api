<?php

namespace Quicktane\Api\Controllers;

use Illuminate\Http\Request;
use Quicktane\Api\Requests\CreateAttributeRequest;
use Quicktane\Api\Requests\UpdateAttributeRequest;
use Quicktane\Api\Resources\AttributeResource;
use Quicktane\Core\Product\Dto\CreateAttributeDto;
use Quicktane\Core\Product\Dto\UpdateAttributeDto;
use Quicktane\Core\Product\Managers\AttributeManager;
use Quicktane\Core\Product\Services\AttributeService;

class AttributeController
{
    public function find(Request $request, AttributeService $service)
    {
        return AttributeResource::make($service->find($request->route('id')));
    }

    public function list(AttributeService $service)
    {
        return AttributeResource::collection($service->list());
    }

    public function collection(AttributeService $service)
    {
        return AttributeResource::collection($service->collection());
    }

    public function create(CreateAttributeRequest $request, AttributeManager $service)
    {
        $attribute = $service->create(CreateAttributeDto::fromRequest($request));

        return AttributeResource::make($attribute);
    }

    public function update(
        UpdateAttributeRequest $request,
        AttributeService $service,
        AttributeManager $manager
    ) {
        $attribute = $service->find($request->route('id'));

        $attribute = $manager->update($attribute, UpdateAttributeDto::fromRequest($request));

        return AttributeResource::make($attribute);
    }
}
