<?php

namespace Quicktane\Api\Controllers;

use Quicktane\Api\Requests\CreateCategoryRequest;
use Quicktane\Core\Services\CategoryService;

class CategoryController
{
    public function create(CreateCategoryRequest $request, CategoryService $service)
    {
        $category = $service->create($request->validated());

        return $category;
    }
}