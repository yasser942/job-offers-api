<?php

namespace App\Services;

use App\Repositories\Interfaces\JobOfferRepositoryInterface;

class JobOfferService
{
    protected $repository;

    public function __construct(JobOfferRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function getAllJobOffers()
    {
        return $this->repository->all();
    }

    public function getJobOffer($id)
    {
        return $this->repository->find($id);
    }

    public function createJobOffer(array $data)
    {
        return $this->repository->create($data);
    }

    public function updateJobOffer($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    public function deleteJobOffer($id)
    {
        return $this->repository->delete($id);
    }
}