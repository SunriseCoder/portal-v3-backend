<?php

namespace App\Http\Resources\Tracker\Activity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityOperationTypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  Request  $request
     * @return array
     */
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'groupId' => $this->group_id,
            'code' => $this->code,
            'name' => $this->name,
            'position' => $this->position,
        ];
    }
}
