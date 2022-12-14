<?php

namespace App\Models\Tracker\Activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityOperation extends Model
{
    use HasFactory;

    public function activity(): BelongsTo
    {
        return $this->belongsTo(Activity::class);
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(ActivityOperationType::class);
    }

    public function language(): BelongsTo
    {
        return $this->belongsTo(ActivityOperationLanguage::class);
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(ActivityOperationStatus::class);
    }
}
