<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateJobOfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'career_id' => 'sometimes|integer',
            'employer_name' => 'sometimes|string|max:255',
            'from_canadian_employer' => 'sometimes|boolean',
            'offer_full_time' => 'sometimes|boolean',
            'offer_non_seasonal' => 'sometimes|boolean',
            'offer_outside_quebec' => 'sometimes|boolean',
            'offer_meets_teer_requirement' => 'sometimes|boolean',
            'salary_range' => 'sometimes|nullable|string|max:100',
            'contract_duration' => 'sometimes|nullable|integer|min:1',
            'eligibility_criterion_id' => 'sometimes|nullable|exists:eligibility_criteria,criterion_id'
        ];
    }
}