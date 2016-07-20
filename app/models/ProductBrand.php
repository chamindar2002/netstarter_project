<?php

namespace Allison\models;

use Illuminate\Database\Eloquent\Model;

class ProductBrand extends Model
{
    protected $table = 'product_brands';

    public function products()
    {
        return $this->hasMany('Allison\models\Product');
    }

    public static function listBrands(){

        $brands_obj = ProductBrand::all();
        $brands = array();

        foreach($brands_obj as $brand){
            $brands[$brand->id] = $brand->name;
        }

        return $brands;
    }
}
