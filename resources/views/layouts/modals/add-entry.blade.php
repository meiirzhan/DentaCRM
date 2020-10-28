<div class="modal fade" id="modalAddEntry" tabindex="-1" role="dialog" aria-labelledby="modalAddEntryLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="modal-title" id="modalAddEntryLabel">Добавить запись</h5>
                    <p class="entry-date-text"> Запись на 12.06.2020 г. (12:30 - 13:00)</p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex flex-column add-entry-input">
                    <div class="d-flex justify-content-between">
                        <input type="text" class="form-control" placeholder="Ф. И. О.">
                        <input type="tel" class="form-control" placeholder="Номер телефона">
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <select class="custom-select mr-sm-2">
                            <option selected>Услуга</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                        <select class="custom-select">
                            <option selected>Специалист</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-flex mt-3">
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-cancel" data-dismiss="modal">Отменить</button>
                <button type="button" class="btn btn-primary">Записать</button>
            </div>
        </div>
    </div>
</div>
