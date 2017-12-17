<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Market extends Model
{
    protected $fillable = ['market', 'company_name', 'stock_type', 'price'];
}
