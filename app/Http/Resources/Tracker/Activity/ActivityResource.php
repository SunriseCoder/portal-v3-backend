<?php

namespace App\Http\Resources\Tracker\Activity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityResource extends JsonResource
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
            'eventId' => $this->event_id,
            'date' => $this->date,
            'name' => $this->name,
            'summary' => $this->summary,
        ];
    }
}
