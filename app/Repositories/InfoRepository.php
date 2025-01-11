<?php

namespace App\Repositories;

use App\Models\Information;
use App\Repositories\Contracts\InfoRepositoryInterface;

class InfoRepository implements InfoRepositoryInterface
{
    protected $model;
    
    public function __construct(Information $model)
    {
        $this->model = $model;
    }

    public function getAllInfoPieces()
    {
        return $this->model->get();
    }

    public function createInfoPiece($request)
    {
        $this->model->create($request->validated());
    }
    
    public function getInfoPieceById($InfoPieceId)
    {
        return $this->model->findOrFail($InfoPieceId);
    }
    
    public function updateInfoPiece($request, $InfoPieceId)
    {
        $this->getInfoPieceById($InfoPieceId)->update([
            'key'=> $request->key,
            'value'=> $request->value
        ]);
    }
    
    public function deleteInfoPiece($InfoPieceId)
    {
        $this->getInfoPieceById($InfoPieceId)->delete();
    }
    
}
