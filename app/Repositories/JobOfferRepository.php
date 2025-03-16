<?php


namespace App\Repositories;

use App\Repositories\Interfaces\JobOfferRepositoryInterface;
use App\Models\JobOffer;

class JobOfferRepository implements JobOfferRepositoryInterface
{
    protected $model;

    public function __construct(JobOffer $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->with('eligibilityCriterion')->get();
    }

    public function find($id)
    {
        return $this->model->with('eligibilityCriterion')->findOrFail($id);
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function update($id, array $data)
    {
        $record = $this->model->findOrFail($id);
        $record->update($data);
        return $record;
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}
