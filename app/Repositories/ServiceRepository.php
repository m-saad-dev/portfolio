<?php

namespace App\Repositories;

use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;

class ServiceRepository implements ServiceRepositoryInterface
{
    protected $model;
    
    public function __construct(Service $model)
    {
        $this->model = $model;
    }

    public function getAllServices()
    {
        return $this->model->paginate(6);
    }

    public function createService($request)
    {
        $this->model->create($request->validated());
    }
    
    public function getServiceById($serviceId)
    {
        return $this->model->findOrFail($serviceId);
    }
    
    public function updateService($request, $serviceId)
    {
        $this->getServiceById($serviceId)->update([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
    }
    
    public function deleteService($serviceId)
    {
        $this->getServiceById($serviceId)->delete();
    }
    
}
