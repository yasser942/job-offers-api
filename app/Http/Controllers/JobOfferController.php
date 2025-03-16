<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobOfferRequest;
use App\Http\Requests\UpdateJobOfferRequest;
use App\Services\JobOfferService;
use App\Http\Resources\JobOfferResource;

class JobOfferController extends Controller
{
    protected $service;

    public function __construct(JobOfferService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $jobOffers = $this->service->getAllJobOffers();
        return JobOfferResource::collection($jobOffers);
    }

    public function store(StoreJobOfferRequest $request)
    {
        $validated = $request->validated();
        $jobOffer = $this->service->createJobOffer($validated);
        return new JobOfferResource($jobOffer);
    }

    public function show($id)
    {
        $jobOffer = $this->service->getJobOffer($id);
        return new JobOfferResource($jobOffer);
    }

    public function update(UpdateJobOfferRequest $request, $id)
    {
        $validated = $request->validated();
        $jobOffer = $this->service->updateJobOffer($id, $validated);
        return new JobOfferResource($jobOffer);
    }

    public function destroy($id)
    {
        $this->service->deleteJobOffer($id);
        return response()->json(null, 204);
    }
}