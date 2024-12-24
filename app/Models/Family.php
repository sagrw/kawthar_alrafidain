<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Database\Eloquent\Relations\BelongsTo;
use illuminate\Database\Eloquent\Relations\HasMany;

class Family extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "governorate",
        "survay_date",
        "deceased_name",
        "birth_date",
        "academic_achievement",
        "profession",
        "death_date",
        "death_status",
        "current_residence",
        "phone_number",
        "widowed_name",
        "widowed_burth_date",
        "widowed_academic_achievement",
        "widowed_profession",
        "deceased_salary",
        "deceased_salary_value",
        "mony_sources",
        "sources_type",
        "mony_value",
        "family_assistance",
        "entity_name",
        "assistance_value",
        "family_house",
        "rent_value",
        "renter_name",
        "living_status",
        "wife_living_with",
        "family_patient",
        "patient_name",
        "disease_type",
        "families_in_house",
        "orphans_family_count",
        "sponsored_orphans_count",
        "orphans_type",
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Orphans(): HasMany
    {
        return $this->hasMany(Orphans::class);
    }
}
