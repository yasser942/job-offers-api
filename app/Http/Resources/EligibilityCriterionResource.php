<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EligibilityCriterionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'criterion_id' => $this->criterion_id,
            'criterion_name' => $this->criterion_name,
            'criterion_code' => $this->criterion_code,
            'ineligibility_description' => $this->ineligibility_description,
            'default_eligible' => $this->default_eligible,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
