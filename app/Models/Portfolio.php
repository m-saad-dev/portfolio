<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Portfolio extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $table = "portfolios";
    protected $fillable = [
        'name',
        'type',
        'date'
    ];
}
