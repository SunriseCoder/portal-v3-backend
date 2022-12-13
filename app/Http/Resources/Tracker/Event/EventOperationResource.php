<?php

namespace App\Http\Resources\Tracker\Event;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventOperationResource extends JsonResource
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
            'eventId' => $this->event_id,
            'typeId' => $this->type_id,
            'statusId' => $this->status_id,
            'summary' => $this->summary,
        ];
    }
}
