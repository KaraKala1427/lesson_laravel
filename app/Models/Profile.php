<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    public function user(): BelongsTo // One to One
    {
        return $this->belongsTo(User::class);
    }
}
