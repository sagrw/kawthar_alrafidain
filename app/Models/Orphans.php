<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;


class Orphans extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "birth_date",
        "academic_achievement",
        "hobbies",
        "guarantor_name",
        "mediator",
        "bail_amount",
        "notes",
    ];

    public function Family(): BelongsTo
    {
        return $this->belongsTo(Family::class);
    }
}
