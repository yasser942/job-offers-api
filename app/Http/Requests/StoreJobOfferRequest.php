<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobOfferRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'career_id' => 'required|integer',
            'employer_name' => 'required|string|max:255',
            'from_canadian_employer' => 'required|boolean',
            'offer_full_time' => 'required|boolean',
            'offer_non_seasonal' => 'required|boolean',
            'offer_outside_quebec' => 'required|boolean',
            'offer_meets_teer_requirement' => 'required|boolean',
            'salary_range' => 'nullable|string|max:100',
            'contract_duration' => 'nullable|integer|min:1',
            'eligibility_criterion_id' => 'nullable|exists:eligibility_criteria,criterion_id'
        ];
    }
}