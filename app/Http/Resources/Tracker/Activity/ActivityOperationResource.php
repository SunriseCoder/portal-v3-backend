<?php

namespace App\Http\Resources\Tracker\Activity;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ActivityOperationResource extends JsonResource
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
            'activityId' => $this->activity_id,
            'typeId' => $this->type_id,
            'languageId' => $this->language_id,
            'statusId' => $this->status_id,
            'summary' => $this->summary,
        ];
    }
}
