<?php

namespace Allison\models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product_master';

    public function fbProfile()
    {
        return $this->hasOne('Allison\models\ProductType');
    }

    public function children()
    {
        return $this->hasMany('Allison\models\ProductUnique');
    }

    public function brands()
    {
        return $this->belongsTo('Allison\models\ProductBrand','id');
    }




}
