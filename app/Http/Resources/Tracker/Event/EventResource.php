<?php

namespace App\Http\Resources\Tracker\Event;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
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
            'typeId' => $this->type_id,
            'name' => $this->name,
            'startDate' => $this->start_date,
            'endDate' => $this->end_date,
        ];
    }
}
