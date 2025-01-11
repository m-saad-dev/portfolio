<?php

namespace App\Repositories;

use App\Models\Portfolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;

class PortfolioRepository implements PortfolioRepositoryInterface
{
    protected $model;
    
    public function __construct(Portfolio $model)
    {
        $this->model = $model;
    }

    public function getAllPortfolios()
    {
        return $this->model->paginate(6);
    }

    public function createPortfolio($request)
    {
        $portfolio =  $this->model->create($request->validated());
        if (isset($portfolio) && $request->hasFile('image')) {
            $this->addImage( $portfolio, $request->image , 'images');
        }
    }
    
    public function getPortfolioById($portfolioId)
    {
        return $this->model->findOrFail($portfolioId);
    }
    
    public function updatePortfolio($request, $portfolioId)
    {
        $portfolio = $this->getPortfolioById($portfolioId);
        $portfolio->update([
            'name'=> $request->name,
            'type'=> $request->type,
            'date'=> $request->date
        ]);
        // dd($request->type);
        $portfolio->refresh();
        if ($request->hasFile('image')) {
            $this->addImage( $portfolio, $request->image , 'images');
        }
    }
    
    public function addImage(Portfolio $portfolio, $image , $collectionName)
    {
        $portfolio->clearMediaCollection($collectionName);
        $portfolio->addMedia($image)->toMediaCollection($collectionName);
    }
    
    public function deletePortfolio($portfolioId)
    {
        $this->getPortfolioById($portfolioId)->delete();
    }
    
}
