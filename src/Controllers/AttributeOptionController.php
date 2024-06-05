<?php

namespace Quicktane\Api\Controllers;

use Illuminate\Http\Request;
use Quicktane\Api\Resources\AttributeResource;
use Quicktane\Core\Product\Services\AttributeOptionService;
use Quicktane\Core\Product\Services\AttributeService;

class AttributeOptionController
{
    public function collection(AttributeOptionService $service)
    {
        return AttributeResource::collection($service->collection());
    }

    public function collectionForAttribute(
        Request $request,
        AttributeService $attributeService,
        AttributeOptionService $service
    ) {
        $attribute = $attributeService->find($request->route('id'));

        return AttributeResource::collection($service->getForAttribute($attribute));
    }
}
