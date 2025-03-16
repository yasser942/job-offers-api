<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EligibilityCriterion extends Model
{
    use HasFactory;
    protected $table = 'eligibility_criteria';
    protected $primaryKey = 'criterion_id';
    protected $fillable = [
        'criterion_name',
        'criterion_code',
        'ineligibility_description',
        'default_eligible'
    ];

    public function jobOffers()
    {
        return $this->hasMany(JobOffer::class, 'eligibility_criterion_id');
    }
}
