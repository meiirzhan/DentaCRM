<div class="modal fade" id="modalAddPayment" tabindex="-1" role="dialog" aria-labelledby="modalAddPaymentLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="mb-4 mr-auto">Добавить оплату</h5>
                    <div class="d-flex">
                        <p class="modal-procedure-type">Стоматология (Муратова А.К.)</p>
                        <p>Запись на 12.06.2020 г. (12:30 - 13:00)</p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column">
                    <div class="row payment-details-row mt-2">
                        <div class="col-1"><p>№</p></div>
                        <div class="col-4"><p>Наименование</p></div>
                        <div class="col"><p>Кол.</p></div>
                        <div class="col"><p>Цена</p></div>
                        <div class="col-3"><p>Сумма к оплате (тг)</p></div>
                    </div>
                    <div class="row mt-2 payment-details-row1">
                        <div class="col-1"><p>1</p></div>
                        <div class="col-4"><p>Первичная консультация</p></div>
                        <div class="col"><p>1</p></div>
                        <div class="col"><p>2 000 тг</p></div>
                        <div class="col-3"><p>2000</p></div>
                    </div>
                </div>
                <div class="d-flex mt-3">
                    <div class="d-flex flex-column mr-auto">
                        <label class="mr-sm-2 payment-method" for="inlineFormCustomSelect">Способ оплаты</label>
                        <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                            <option selected>Наличные</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column justify-content-between res-box">
                        <h6>Итог</h6>
                        <h6>22 000 тенге</h6>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary">Оплатить
                </button>
            </div>
        </div>
    </div>
</div>
