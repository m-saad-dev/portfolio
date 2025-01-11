<?php

namespace App\Http\Controllers;

use App\Http\Requests\PortfolioRequest;
use App\Models\Portfolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    protected  $repository;
    public function __construct(PortfolioRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
    public function index()
    {
        $portfolios = $this->repository->getAllPortfolios();
        return view('admin.portfolios.index', compact('portfolios'));
    }
    public function create()
    {
        return view("admin.portfolios.create");
    }

    public function edit(Portfolio $portfolio)
    {
        return view("admin.portfolios.edit", compact("portfolio"));
    }

    public function store(PortfolioRequest $request)
    {
        $this->repository->createPortfolio($request);
        return view("admin.portfolios.create");
    }
    public function update(PortfolioRequest $request, Portfolio $portfolio)
    {
        $this->repository->updatePortfolio($request, $portfolio->id);
        $portfolio->refresh();
        return view("admin.portfolios.edit", compact("portfolio"));
    }
    public function destroy(Portfolio $portfolio)
    {
        $this->repository->deletePortfolio( $portfolio->id);
        $portfolios = $this->repository->getAllPortfolios();
        return view("admin.portfolios.index", compact("portfolios"));
    }
}
