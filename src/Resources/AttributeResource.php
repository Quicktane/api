<?php

namespace Quicktane\Api\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Quicktane\Core\Product\Models\Attribute;

class AttributeResource extends JsonResource
{
    /**
     * @var Attribute
     */
    public $resource;

    public function toArray(Request $request)
    {
        return [
            'id'   => $this->resource->id,
            'name' => $this->resource->name,
            'slug' => $this->resource->slug,
            'type' => $this->resource->type,
        ];
    }
}
