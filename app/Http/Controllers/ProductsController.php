<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function addProduct(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->measure = $request->measure;
        $product->cost = $request->cost;
        $product->date = $request->date;
        $product->code = $request->code;
        $product->articule = $request->articule;
        $product->stock_id = $request->stock_id;
        $product->barcode = $request->barcode;
        $product->save();
        return redirect()->route('dentist-notes');
    }
    public function deleteProduct($id){
        Product::find($id)->delete();
        return redirect()->route('dentist-notes');
    }
}
