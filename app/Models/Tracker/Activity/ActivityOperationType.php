<?php

namespace App\Models\Tracker\Activity;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ActivityOperationType extends Model
{
    use HasFactory;

    public function group(): BelongsTo
    {
        return $this->belongsTo(ActivityOperationTypeGroup::class);
    }
}
