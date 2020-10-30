@php
    if ($user->role->name == 'booker'){
        $layouts = 'accountant';
    }
    else{
        $layouts = $user->role->name;
    }
@endphp
@extends('layouts.'.$layouts)
@section('title-block') {{$product->name}} @endsection
@section('tab')
                <div class="container">
                    <div class="modal-header">
                        <div class="d-flex flex-column">
                            <h5 class="mr-auto">Редактировать товар</h5>
                        </div>
                    </div>
                    <form action="{{route('product.update', $product->id)}}" method="post">
                        @csrf
                        <div class="modal-body">
                            <div class="d-flex modal-add-product-box1">
                                <div class="d-flex flex-column mr-4 w-50">
                                    <label for="productName">Название</label>
                                    <input required type="text" name="name" id="productName" class="form-control" value="{{$product->name??''}}">
                                    <label for="productName">Количество</label>
                                    <input required type="number" id="productQuantity" class="form-control" name="quantity" value="{{$product->quantity??''}}">
                                    <label for="productPrice">Стоимость продажи</label>
                                    <input required type="number" name="cost" id="productPrice" class="form-control" value="{{$product->cost??''}}">
                                </div>
                                <div class="d-flex flex-column  w-50">
                                    <label for="productWarehouse">Склад</label>
                                    <select required class="custom-select" name="stock_id" id="productWarehouse">
                                        @foreach(\App\Models\Stock::all() as $stock)
                                            <option @if($product->stock_id??'' == $stock->id) selected @endif value="{{$stock->id}}">{{$stock->name}}</option>
                                        @endforeach
                                    </select>
                                    <label for="productUnit">Единица измерения</label>
                                    <select required class="custom-select" name="measure" id="productUnit">
                                        <option {{($product->measure == '1')?'selected':''}} value="1">шт</option>
                                        <option {{($product->measure == '10')?'selected':''}} value="10">по 10</option>
                                        <option  {{($product->measure == '100')?'selected':''}} value="100">по 100</option>
                                    </select>
                                    <label for="productDate">Дата</label>
                                    <input required type="date" name="date" id="productDate" class="form-control" value="{{$product->date??''}}">
                                </div>
                            </div>
                            <div class="d-flex flex-column modal-add-product-box2">
                                <div class="d-flex">
                                    <div class="d-flex flex-column mr-4 w-50">
                                        <label for="productCode">Код</label>
                                        <input required type="number" name="code" id="productCode" class="form-control" value="{{$product->code??''}}">
                                    </div>
                                    <div class="d-flex flex-column w-50">
                                        <label for="productArticle">Артикул</label>
                                        <input required type="number" name="articule" id="productArticle" class="form-control" value="{{$product->articule??''}}">
                                    </div>
                                </div>
                                <div class="d-flex flex-column">
                                    <label for="productBarcode">Штрих-код</label>
                                    <input required type="number" name="barcode" id="productBarcode" class="form-control" value="{{$product->barcode??''}}">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a href="{{route(Auth::user()->role->name.'.stock')}}"  class="btn btn-cancel">Назад</a>
                            <button type="submit" class="btn btn-primary">Редактировать</button>
                        </div>
                    </form>
                </div>
@endsection
