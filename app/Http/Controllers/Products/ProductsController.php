<?php

namespace Allison\Http\Controllers\Products;

use Allison\models\ProductBrand;
use Allison\models\ProductsMedia;
use Allison\models\ProductType;
use Allison\models\Product;

use Illuminate\Http\Request;

use Allison\Http\Requests;
use Allison\Http\Controllers\Controller;

#temp
use Input;
//use Validator;
use Redirect;
use Session;
use Image;
use URL;
use Response;
use File;

use Event;

use Validator;

use Allison\AllisonFbApiHelpers\helpers\calculator;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function listcategories()
    {
        $types = ProductType::all();

        return view('products.categories_list', compact('types'));

    }

    public function listproducts($id)
    {

        $products = Product::where('type_id', $id)->orderBy('id', 'desc')->get();


        return view('products.products_list', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('productsmedia.create');
        $brands = ProductBrand::listBrands();
        $types = ProductType::listTypes();
        return view('products.create', compact('brands', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'product_code' => 'required',
            'brand_id' => 'required',
            'cost_price' => 'required|numeric'
        ]);


        if ($validator->fails()) {
            return redirect('products/create')
                ->withErrors($validator)
                ->withInput();
        }else{

            $cal = new calculator();

            $product = new Product();
            $product->name = $request->name;
            $product->product_code = $request->product_code;
            $product->short_description = $request->short_description;
            $product->cost_price = $request->cost_price;
            $product->selling_price = $cal->computeSellingPrice($request);
            $product->brand_id = $request->brand_id;
            $product->type_id = $request->type_id;


            if ($product->save()) {
                Session::flash('alert-success','Saved Successfully');

                return redirect('products/create');
            }


        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }



    public function generateUniqueFileName(){
        return md5(date('Y-m-d H:i:s:u'));
    }

    public static function thumbview_media_path()
    {
        return storage_path().'/ad-images/thumb_images/';
    }

    public static function fullview_media_path()
    {
        return storage_path().'/ad-images/full_images/';
    }
}
