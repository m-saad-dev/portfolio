<?php

namespace App\Repositories\Contracts;

interface ServiceRepositoryInterface
{
    public function getAllServices();
    public function createService($request);
    public function getServiceById($serviceId);
    public function updateService($request, $serviceId);
    public function deleteService($serviceId);
}
