@extends('layouts.accountant')
@section('title-block') Склад @endsection
@section('tab')
    <h3 class="page-name mt-4">Склад</h3>
    <div class="d-flex flex-column warehouse-block">
        <div class="d-flex mt-4">
            <button class="btn btn-secondary">Фильтр</button>
            <button type="button" class="btn btn-primary appointment-btn" data-toggle="modal" data-target="#modalAddProduct">Добавить товар</button>
        </div>
        <div class="d-flex flex-sm-row flex-column mt-4">
            <div class="d-flex flex-column mt-3 mt-sm-0">
                <label for="warehouseProduct">Товары</label>
                <select class="custom-select" id="warehouseProduct">
                    <option selected value="1">Выберите</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="d-flex flex-column mt-3 mt-sm-0">
                <label for="warehouse1">Склад</label>
                <select class="custom-select" id="warehouse1">
                    <option selected value="1">Выберите</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
            <div class="d-flex flex-column mt-3 mt-sm-0">
                <label for="warehouseSort">Сортировать</label>
                <select class="custom-select" id="warehouseSort">
                    <option selected value="1">По дате</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </div>
        </div>
        <table class="table table-responsive-xl table-borderless mt-4">
            <thead>
            <tr>
                <th scope="col">НАИМЕНОВАНИЕ</th>
                <th scope="col">СКЛАДЫ</th>
                <th scope="col">СТОИМОСТЬ ЕД.</th>
                <th scope="col">НОМЕР ПОСТАВКИ</th>
                <th scope="col">ОСТАТОК</th>
                <th scope="col">ДАТА</th>
                <th scope="col">ДЕЙСТВИЯ</th>
            </tr>
            </thead>
            <tbody>
            @foreach(\App\Models\Product::all() as $product)
                <tr>
                    <th scope="row">
                        <div class="d-flex flex-column">
                            <p>{{$product->name??''}}</p>
                            <small><span>Код:</span> {{$product->code??''}}</small>
                            <small><span>Артикул:</span> {{$product->articule??''}}</small>
                            <small><span>Штрих-код:</span> {{$product->barcode??''}}</small>
                        </div>
                    </th>
                    <td>{{$product->stock->name??''}}</td>
                    <td>{{$product->cost??''}} ₸</td>
                    <td>№ {{$product->id}}</td>
                    <td>{{$product->quantity??''}} шт.</td>
                    <td>{{date("d.m.Y", strtotime($product->date))??''}}</td>
                    <td>
                        <div class="d-flex">
                            <button class="btn p-0 mr-3"><img src="../img/edit1.svg" alt=""></button>
                            <button onclick="window.location='{{route('product.delete', $product->id)}}'" class="btn p-0"><img src="../img/x-grey.svg" alt=""></button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection
