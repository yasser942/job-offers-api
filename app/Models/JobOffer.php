<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobOffer extends Model
{
    use HasFactory;
    protected $table = 'job_offers';
    protected $primaryKey = 'job_offer_id';
    protected $fillable = [
        'career_id',
        'employer_name',
        'from_canadian_employer',
        'offer_full_time',
        'offer_non_seasonal',
        'offer_outside_quebec',
        'offer_meets_teer_requirement',
        'salary_range', 
        'contract_duration',
        'eligibility_criterion_id'
    ];

    public function eligibilityCriterion()
    {
        return $this->belongsTo(EligibilityCriterion::class, 'eligibility_criterion_id');
    }
}
