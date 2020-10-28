<div class="modal fade" id="modalAddPatient" tabindex="-1" role="dialog" aria-labelledby="modalAddPatientLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalAddPatientLabel">Добавить пациента</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column add-patient-input">
                    <div class="d-flex">
                        <div class="d-flex flex-column justify-content-between">
                            <input type="text" class="form-control" placeholder="Ф. И. О.">
                            <input type="date" class="form-control">
                            <input type="tel" class="form-control" placeholder="Номер телефона">
                            <input type="email" class="form-control" placeholder="Email">
                            <select class="custom-select mr-sm-2">
                                <option selected>Организация</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="custom-select mr-sm-2">
                                <option selected>Вид бонусов</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="d-flex flex-column">
                            <input type="text" class="form-control" placeholder="ИИН">
                            <input type="text" class="form-control" placeholder="Адрес">
                            <input type="text" class="form-control" placeholder="Дополнительный номер">
                            <select class="custom-select mr-sm-2">
                                <option selected>Категория пациента</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                            <select class="custom-select mr-sm-2">
                                <option selected>Прайс-лист</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</div>
