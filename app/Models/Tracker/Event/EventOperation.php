<?php

namespace App\Models\Tracker\Event;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class EventOperation extends Model
{
    use HasFactory;

    public function event(): BelongsTo
    {
        return $this->belongsTo(Event::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(EventOperationType::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(EventOperationStatus::class);
    }
}
