<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    protected $tab = "information";
    protected $fillable = ['key', 'value'];
}
