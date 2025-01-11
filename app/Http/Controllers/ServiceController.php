<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceRequest;
use App\Models\Service;
use App\Repositories\Contracts\ServiceRepositoryInterface;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected  $repository;
    public function __construct(ServiceRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $services = $this->repository->getAllServices();
        return view('admin.services.index', compact('services'));
    }
    public function create()
    {
        return view("admin.services.create");
    }

    public function edit(Service $service)
    {
        return view("admin.services.edit", compact("service"));
    }

    public function store(ServiceRequest $request)
    {
        $this->repository->createService($request);
        return view("admin.services.create");
    }
    public function update(ServiceRequest $request, Service $service)
    {
        $this->repository->updateService($request, $service->id);
        $service->refresh();
        return view("admin.services.edit", compact("service"));
    }
    public function destroy(Service $service)
    {
        $this->repository->deleteService( $service->id);
        $services = $this->repository->getAllServices();
        return view("admin.services.index", compact("services"));
    }
}
