
<div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="modalAddProductLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="mr-auto">Добавить товар</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('product.add')}}" method="post">
                @csrf
                <div class="modal-body modal-add-product">
                    <div class="d-flex modal-add-product-box1">
                        <div class="d-flex flex-column mr-4">
                            <label for="productName">Название</label>
                            <input type="text" name="name" id="productName" class="form-control" value="">
                            <label for="productName">Количество</label>
                            <input type="number" id="productQuantity" class="form-control" name="quantity" value="">
                            <label for="productPrice">Стоимость продажи</label>
                            <input type="number" name="cost" id="productPrice" class="form-control">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="productWarehouse">Склад</label>
                            <select class="custom-select" name="stock_id" id="productWarehouse">
                                @foreach(\App\Models\Stock::all() as $stock)
                                    <option selected value="{{$stock->id}}">{{$stock->name}}</option>
                                @endforeach
                            </select>
                            <label for="productUnit">Единица измерения</label>
                            <select class="custom-select" name="measure" id="productUnit">
                                <option value="шт" selected>шт</option>
                                <option value="по 10" selected>по 10</option>
                                <option value="по 100" selected>по 100</option>
                            </select>
                            <label for="productDate">Дата</label>
                            <input type="date" name="date" id="productDate" class="form-control" >
                        </div>
                    </div>
                    <div class="d-flex flex-column modal-add-product-box2">
                        <div class="d-flex">
                            <div class="d-flex flex-column mr-4">
                                <label for="productCode">Код</label>
                                <input type="number" name="code" id="productCode" class="form-control">
                            </div>
                            <div class="d-flex flex-column">
                                <label for="productArticle">Артикул</label>
                                <input type="number" name="articule" id="productArticle" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex flex-column">
                            <label for="productBarcode">Штрих-код</label>
                            <input type="number" name="barcode" id="productBarcode" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-cancel" data-dismiss="modal">Отменить</button>
                    <button type="submit" class="btn btn-primary">Добавить
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="modal fade" id="modalAddProduct" tabindex="-1" role="dialog" aria-labelledby="modalAddProductLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="mr-auto">Добавить товар</h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-add-product">
                <div class="d-flex modal-add-product-box1">
                    <div class="d-flex flex-column mr-4">
                        <label for="productName">Название</label>
                        <input type="text" id="productName" class="form-control">
                        <label for="productName">Количество</label>
                        <input type="text" id="productQuantity" class="form-control">
                        <label for="productPrice">Стоимость продажи</label>
                        <input type="text" id="productPrice" class="form-control">
                    </div>
                    <div class="d-flex flex-column">
                        <label for="productWarehouse">Склад</label>
                        <select class="custom-select" id="productWarehouse">
                            <option selected>шт</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="productUnit">Единица измерения</label>
                        <select class="custom-select" id="productUnit">
                            <option selected>шт</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <label for="productDate">Дата</label>
                        <input type="date" id="productDate" class="form-control">
                    </div>
                </div>
                <div class="d-flex flex-column modal-add-product-box2">
                    <div class="d-flex">
                        <div class="d-flex flex-column mr-4">
                            <label for="productCode">Код</label>
                            <input type="number" id="productCode" class="form-control">
                        </div>
                        <div class="d-flex flex-column">
                            <label for="productArticle">Артикул</label>
                            <input type="number" id="productArticle" class="form-control">
                        </div>
                    </div>
                    <div class="d-flex flex-column">
                        <label for="productBarcode">Штрих-код</label>
                        <input type="number" id="productBarcode" class="form-control">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary">Добавить
                </button>
            </div>
        </div>
    </div>
</div>
