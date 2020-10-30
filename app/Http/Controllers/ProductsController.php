<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function add(Request $request){
        $product = new Product();
        ProductsController::save($product, $request);
        return redirect()->route(Auth::user()->role->name.'.stock');
    }
    public function delete($id){
        Product::find($id)->delete();
        return redirect()->route(Auth::user()->role->name.'.stock');
    }

    public function edit($id){
        $user = Auth::user();
        $product = Product::find($id);
        return view('product.edit', compact('product', 'user'));
    }
    public function update($id, Request $request){
        $product = Product::find($id);
        ProductsController::save($product, $request);
        return redirect()->route(Auth::user()->role->name.'.stock');
    }
    public static function save($product, $request){
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
    }
}
