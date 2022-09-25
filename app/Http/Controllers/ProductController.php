<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function index(Request $request)
    {
        $product_id = $request->input('product_id');

        if ($product_id == "") {
            return view('errors.error_505');
        }
        $product = Product::where('id', $product_id)->first();

        return view('product')
            ->with('product', $product);

    }

    public function add_product(Request $request)
    {
        return view('add_product');
    }

    public function create_product(Request $request)
    {
        $description = $request->input('name');
        $img = 'img text';
        $code = 23134466788;

        $category_id = 1;
        $vendor_id = 1;
        $sale = 0;
        $price = 100;
        $count_status = 60;

//
        $product = new Product();
        $product->description = $description;
        $product->code = $code;

        $product->category_id = $category_id;
        $product->vendor_id = $vendor_id;
        $product->img = $img;
        $product->sale = $sale;
        $product->price = $price;
        $product->count_status = $count_status;

        $product->save();


    }

    public function updatet_product()
    {
        $update_product = Product::get();
        return view('update_product')
            ->with('update_product', $update_product);

    }

    public function update_product()
    {

        return view('update_product');

    }

//Обновление товара
    public function ajax_update_product(Request $request)
    {

//        $img = time() . '.' . $request->img->extension();
//        $request->img->move(public_path('img_product'), $img);
//        $name = 1;
        $name = $request->input('description');
//
//        $id_product = 1;
        $id_product = $request->input('id_product');
        $product = Product::where('id', $id_product)->first();
        $product->description = $name;
//        $product->img = $img;
        $product->save();
//
        return json_encode([
            "code"=>1,
            "data"=>$name,
        ]);
    }
    //

}

