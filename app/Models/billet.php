<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class billet extends Model
{
    use HasFactory;

    protected $fillable = [
        'depart',
        'arrive',
        'classe',
        'heure_depart',
        'user_id',
        'tarif',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
