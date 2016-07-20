<?php

namespace Allison\models;

use Illuminate\Database\Eloquent\Model;

class ProductUnique extends Model
{
    protected $table = 'product_unique';

    public function products()
    {
        return $this->belongsTo('Allison\models\Product');
    }
}
