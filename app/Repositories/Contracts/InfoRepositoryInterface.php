<?php

namespace App\Repositories\Contracts;

interface InfoRepositoryInterface
{
    public function getAllInfoPieces();
    public function createInfoPiece($request);
    public function getInfoPieceById($serviceId);
    public function updateInfoPiece($request, $serviceId);
    public function deleteInfoPiece($serviceId);
}
