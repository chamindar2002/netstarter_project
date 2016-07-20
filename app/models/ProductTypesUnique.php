<?php

namespace Allison\models;

use Illuminate\Database\Eloquent\Model;

class ProductTypesUnique extends Model
{

    protected $table = 'product_types_unique';

    public function productTypes()
    {
        return $this->belongsTo('Allison\models\ProductTypes');
    }

}
