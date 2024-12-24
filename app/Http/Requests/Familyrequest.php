<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Familyrequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "governorate" => 'required | string',
            "survay_date" => 'required | date',
            "deceased_name" => 'required | string',
            "birth_date" => 'required | date',
            "academic_achievement" => 'required | string',
            "profession" => 'required | string',
            "death_date" => 'required | date',
            "death_status" => 'required | string',
            "current_residence" => 'required | string',
            "phone_number" => 'required | string',
            "widowed_name" => 'required | string',
            "widowed_burth_date" => 'required | date',
            "widowed_academic_achievement" => 'required | string',
            "widowed_profession" => 'required | string',
            "deceased_salary" => 'required | string',
            "deceased_salary_value" => 'required | string',
            "mony_sources" => 'required | string',
            "sources_type" => 'required | string',
            "mony_value" => 'required | string',
            "family_assistance" => 'required | string',
            "entity_name" => 'required | string',
            "assistance_value" => 'required | string',
            "family_house" => 'required | string',
            "rent_value" => 'required | string',
            "renter_name" => 'required | string',
            "living_status" => 'required | string',
            "wife_living_with" => 'required |',
            "family_patient" => 'required | string',
            "patient_name" => 'required | string',
            "disease_type" => 'required | string',
            "families_in_house" => 'required | string',
            "orphans_family_count" => 'required | string',
            "sponsored_orphans_count" => 'required | string',
            "orphans_type" => 'required | string',
        ];
    }
}
