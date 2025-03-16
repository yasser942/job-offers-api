<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\EligibilityCriterion;
class EligibilityCriterionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $criteria = [
            [
                'criterion_name' => 'Canadian Employer',
                'criterion_code' => 'CAN_EMPLOYER',
                'ineligibility_description' => 'Employer is not based in Canada.',
                'default_eligible' => true,
            ],
            [
                'criterion_name' => 'Full-Time Position',
                'criterion_code' => 'FULL_TIME',
                'ineligibility_description' => 'Job offer is not full-time.',
                'default_eligible' => true,
            ],
            [
                'criterion_name' => 'Non-Seasonal Job',
                'criterion_code' => 'NON_SEASONAL',
                'ineligibility_description' => 'Job is seasonal or temporary.',
                'default_eligible' => true,
            ],
            [
                'criterion_name' => 'Outside Quebec',
                'criterion_code' => 'OUTSIDE_QC',
                'ineligibility_description' => 'Job is located within Quebec.',
                'default_eligible' => true,
            ],
            [
                'criterion_name' => 'TEER Compliance',
                'criterion_code' => 'TEER_COMPLIANT',
                'ineligibility_description' => 'Job does not meet TEER requirements.',
                'default_eligible' => true,
            ],
        ];

        foreach ($criteria as $criterion) {
            EligibilityCriterion::create($criterion);
        }
    }
}
