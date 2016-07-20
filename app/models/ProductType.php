<?php

namespace Allison\models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    protected $table = 'product_types';

    public function products()
    {
        return $this->hasMany('Allison\models\Product');
    }

    public function productTypesUnique()
    {
        return $this->hasMany('Allison\models\ProductTypeUnique');
    }

    public static function listTypes()
    {
        $types_obj = ProductType::all();
        $types = array();

        foreach($types_obj as $type){
            $types[$type->id] = $type->name;
        }

        return $types;
    }
}
