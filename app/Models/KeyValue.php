<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KeyValue extends Model
{
    protected $fillable = ['key_id','value','recorded_at'];

    public function key(): BelongsTo
    {
        return $this->belongsTo(Key::class);
    }
}
