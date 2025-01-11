<?php

namespace App\Repositories\Contracts;

interface PortfolioRepositoryInterface
{
    public function getAllPortfolios();
    public function createPortfolio($request);
    public function getPortfolioById($serviceId);
    public function updatePortfolio($request, $serviceId);
    public function deletePortfolio($serviceId);
}
