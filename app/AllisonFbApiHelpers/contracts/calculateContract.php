<?php
namespace Allison\AllisonFbApiHelpers\contracts;
/**
 * Created by PhpStorm.
 * User: chaminda
 * Date: 7/20/16
 * Time: 3:33 PM
 */
abstract class calculateContract
{

    final public function computeSellingPrice($request)
    {

        if($request->type_id == 3){ #perfumes

            if($request->country == 'AU'){
                return  $request->cost_price * 2;

            }else if($request->country == 'NZ'){

                return $request->cost_price + ($request->cost_price * 0.15) + 500;
            }

            #default
            return $request->cost_price + 1000;


        }else{

            if($request->brand_id == 1){

                return $request->cost_price + ($request->cost_price * 0.15);

            }else if($request->brand_id == 2){

                return $request->cost_price + ($request->cost_price * 0.15) + 100;

            }

            #default
            return $request->cost_price + ($request->cost_price * 0.10);

        }





        //return $request->cost_price;
    }

}