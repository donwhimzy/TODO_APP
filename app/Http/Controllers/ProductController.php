<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function createproduct(){
        return view('products.create_product');
    }

    public function storeproduct(Request $request){
        // echo "you";
        $Product = new Product;

        // $Product ->product_name="LG TELEVISION";
        // $Product ->price = 120000;
        // $Product -> quantity = 5 ;
        // $Product ->discount = 0 ;
        // $Product -> colour = "black" ;
        // $Product -> description = "this one na baba";
        // $Product -> save();

        $Product ->product_name= $request -> prod_name;
        $Product ->price = $request -> prod_price;
        $Product -> quantity = $request -> prod_quantity;
        $Product -> discount = $request -> prod_discount;
        $Product ->colour = $request -> prod_colour;
        $Product ->description = $request -> prod_description;
        $Product ->product_code ='E21@'.rand(100,5000000);
        $Product -> save();

        return redirect()-> route('index');
    }

    public function indexproduct(){
        // $allProduct = Product::all();
        $allProduct = Product::latest()->get();
        return view('products.index_product',compact("allProduct"));
    }

    public function editproduct($code){
        //  Product::find($code);
        $specificProduct = Product::where('product_code',$code)->first();

        return view('products.edit_product',compact('specificProduct'));
    }

    public function updateproduct($code,Request $request){
        // dd('yes');
        // dd($code);
        // return view('products.index_product');
        $specificProduct = Product::where('product_code',$code)->first();
        $specificProduct ->update([

            'product_name'=> $request -> prod_name,
            'price' => $request -> prod_price,
            'quantity' => $request -> prod_quantity,
            'discount' => $request -> prod_discount,
            'colour' => $request -> prod_colour,
            'description' => $request -> prod_description,
        ]);

        return redirect()->route('index');
    }

    public function deleteproduct($code){

        $specificProduct = Product::where('product_code',$code)->first();
        $specificProduct->delete();
        return redirect()->back();
    }

}
