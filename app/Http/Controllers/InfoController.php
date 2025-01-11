<?php

namespace App\Http\Controllers;

use App\Http\Requests\InfoRequest;
use App\Models\Information;
use App\Repositories\Contracts\InfoRepositoryInterface;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    protected  $repository;
    public function __construct(InfoRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $info = $this->repository->getAllInfoPieces();
        return view('admin.info.index', compact('info'));
    }
    public function create()
    {
        return view("admin.info.create");
    }

    public function edit(Information $info)
    {
        return view("admin.info.edit")->with(["infoPiece" => $info]);
    }

    public function store(InfoRequest $request)
    {
        $this->repository->createInfoPiece($request);
        return view("admin.info.create");
    }
    public function update(InfoRequest $request, Information $info)
    {

        $this->repository->updateInfoPiece($request, $info->id);
        $info = $this->repository->getAllInfoPieces();
        return redirect(route("admin.info.index"))->with(["info" => $info]);
    }

    public function destroy($infoPieceId)
    {
        $this->repository->deleteInfoPiece( $infoPieceId);
        $info = $this->repository->getAllInfoPieces();
        return redirect(route("admin.info.index"))->with(["info" => $info]);
    }
}
