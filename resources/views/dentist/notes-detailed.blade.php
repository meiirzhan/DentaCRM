@extends('layouts.dentist')

@section('title-block') Записи @endsection

@section('content')
    <h3 class="client-name">Иванов Иван</h3>
    <div class="d-flex flex-sm-row flex-column client-info-block">
        <div class="d-flex flex-column client-info-block1">
            <div class="d-flex mx-3 block1">
                <h6 class="client-information mr-auto">Информация о клиенте</h6>
                <button class="btn p-0">
                    <div class="d-flex">
                        <img class="edit" src="/img/edit.svg" alt="Редактировать">
                        <p>Редактировать</p>
                    </div>
                </button>
            </div>
            <div class="d-flex justify-content-between patient-data-block px-3 py-3 mt-3">
                <div class="d-flex flex-column patient-data1">
                    <p>ИИН</p>
                    <p>Дата рождения</p>
                    <p>Номер телефона</p>
                    <p>Дополнительный номер</p>
                    <p>E-mail</p>
                    <p>Адрес</p>
                    <p>Категория пациента</p>
                    <p>Организация</p>
                    <p>Прайс-лист</p>
                    <p>Вид бонусов</p>
                    <p>Источник информации</p>
                </div>
                <div class="d-flex flex-column text-right patient-data2">
                    <p>950418301038</p>
                    <p>18.09.2019</p>
                    <p>+7 777 626 2211</p>
                    <p>+7 707 222 1123</p>
                    <p>ivan.kz@gmail.com</p>
                    <p>Актобе, пр. Абая 12</p>
                    <p>Пациент</p>
                    <p>Частный</p>
                    <p>Основной</p>
                    <p>Без бонусов</p>
                    <p>Не известно</p>
                </div>
            </div>
            <h6 class="client-information mr-auto ml-3 mt-4">Примечания</h6>
            <div class="d-flex justify-content-between flex-column notes-block">
                <p class="notes-text">Сказала, что хочет оплатит через каспи голд</p>
                <p>Жамбылова А.К. 18 мая 2020 г.</p>
            </div>
            <h6 class="client-information mr-auto ml-3 mt-4">Добавить примечание</h6>
            <div class="d-flex justify-content-between flex-column notes-block">
                <input type="text" placeholder="...">
            </div>
            <div class="d-flex justify-content-end btn-save">
                <button class="btn btn-success">
                    Сохранить
                </button>
            </div>
        </div>
        <div class="d-flex flex-column client-info-block2 mt-5 mt-sm-0">
            <div class="d-flex client-info-block2-bar">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-note-tab" data-toggle="pill" role="tab"
                           href="#pills-note" aria-controls="pills-note" aria-selected="true">Записи</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-payment-tab" data-toggle="pill" role="tab"
                           href="#pills-payment" role="tab" aria-controls="pills-payment"
                           aria-selected="false">Оплаты</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-medical-card-tab" data-toggle="pill"
                           role="tab" href="#pills-medical-card" role="tab" aria-controls="pills-medical-card"
                           aria-selected="false">Лечебная карта</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-files-tab" data-toggle="pill"
                           role="tab" href="#pills-files" role="tab" aria-controls="pills-files"
                           aria-selected="false">Файлы</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-materials-tab" data-toggle="pill"
                           role="tab" href="#pills-materials" role="tab" aria-controls="pills-materials"
                           aria-selected="false">Материалы</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content flag" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-note" role="tabpanel"
                     aria-labelledby="pills-note-tab">
                    <div class="d-flex flex-column client-info-box px-3 py-3 mt-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="m-0 procedure-type">Стоматология (Муратова А.К.)</p>
                            <div class="d-flex align-items-center edit">
                                <p class="m-0">Запись на 12.06.2020 г. (12:30 - 13:00)</p>
                                <button class="btn p-0 ml-3 d-flex align-items-start">
                                    <img class="edit" src="/img/edit.svg" alt="Редактировать">
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="red-dot"></span>
                                <p>Не оплачен</p>
                            </div>
                        </div>
                        <div class="row payment-details-row mt-2">
                            <div class="col-1"><p>№</p></div>
                            <div class="col-4"><p>Наименование</p></div>
                            <div class="col"><p>Кол.</p></div>
                            <div class="col"><p>Цена</p></div>
                            <div class="col"><p>Оплачено</p></div>
                            <div class="col"><p>К Оплате</p></div>
                        </div>
                        <div class="row mt-2 payment-details-row1">
                            <div class="col-1"><p>1</p></div>
                            <div class="col-4"><p>Первичная консультация</p></div>
                            <div class="col"><p>1</p></div>
                            <div class="col"><p>2 000 тг</p></div>
                            <div class="col"><p>0 тг.</p></div>
                            <div class="col"><p>2 000 тг.</p></div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <p class="mr-auto m-0 write-who">Записал: Жамбылова А.К.</p>
                            <p class="m-0 mr-4">ИТОГ: 2 000 тг.</p>
                            <button type="button" style="width: 110px" class="btn btn-success appointment-btn" data-toggle="modal" data-target="#modalAddPayment">Оплатить</button>
                        </div>
                    </div>
                    <h6 class="client-information mr-auto ml-3 mt-4">История записей</h6>
                    <div class="d-flex flex-column client-info-box px-3 py-3 mt-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="m-0 procedure-type">Рентгенолог (Алиев К.И.)</p>
                            <div class="d-flex align-items-center edit">
                                <p class="m-0">Запись на 18.06.2020 г. (12:30 - 13:00)</p>
                                <button class="btn p-0 ml-3 d-flex align-items-start">
                                    <img class="edit" src="/img/edit.svg" alt="Редактировать">
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="success-dot"></span>
                                <p>Оплачен</p>
                            </div>
                        </div>
                        <div class="row payment-details-row mt-2">
                            <div class="col-1"><p>№</p></div>
                            <div class="col-4"><p>Наименование</p></div>
                            <div class="col"><p>Кол.</p></div>
                            <div class="col"><p>Цена</p></div>
                            <div class="col"><p>Оплачено</p></div>
                            <div class="col"><p>К Оплате</p></div>
                        </div>
                        <div class="row mt-2 payment-details-row1">
                            <div class="col-1"><p>1</p></div>
                            <div class="col-4"><p>Первичная консультация</p></div>
                            <div class="col"><p>1</p></div>
                            <div class="col"><p>2 000 тг</p></div>
                            <div class="col"><p>0 тг.</p></div>
                            <div class="col"><p>2 000 тг.</p></div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <p class="mr-auto m-0 write-who">Записал: Жамбылова А.К.</p>
                            <p class="m-0 mr-4">ИТОГ: 2 000 тг.</p>
                            <button class="btn btn-outline-secondary" disabled>
                                Оплачено
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-payment" role="tabpanel"
                     aria-labelledby="pills-payment-tab">
                    <div class="d-flex flex-column client-info-box px-3 py-3 mt-3">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="m-0 procedure-type">Рентгенолог (Алиев К.И.)</p>
                            <div class="d-flex align-items-center edit">
                                <p class="m-0">Запись на 18.06.2020 г. (12:30 - 13:00)</p>
                                <button class="btn p-0 ml-3 d-flex align-items-start">
                                    <img class="edit" src="/img/edit.svg" alt="Редактировать">
                                </button>
                            </div>
                            <div class="d-flex align-items-center">
                                <span class="success-dot"></span>
                                <p>Оплачено</p>
                            </div>
                        </div>
                        <div class="row payment-details-row mt-2">
                            <div class="col-1"><p>№</p></div>
                            <div class="col-4"><p>Наименование</p></div>
                            <div class="col"><p>Кол.</p></div>
                            <div class="col"><p>Цена</p></div>
                            <div class="col"><p>Оплачено</p></div>
                            <div class="col"><p>К Оплате</p></div>
                        </div>
                        <div class="row mt-2 payment-details-row1">
                            <div class="col-1"><p>1</p></div>
                            <div class="col-4"><p>Первичная консультация</p></div>
                            <div class="col"><p>1</p></div>
                            <div class="col"><p>2 000 тг</p></div>
                            <div class="col"><p>0 тг.</p></div>
                            <div class="col"><p>2 000 тг.</p></div>
                        </div>
                        <div class="d-flex mt-3 align-items-center">
                            <p class="mr-auto m-0 write-who">Наличными</p>
                            <p class="m-0 mr-4">ИТОГ: 2 000 тг.</p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-medical-card" role="tabpanel"
                     aria-labelledby="pills-medical-card-tab">
                    <div class="d-flex flex-column attend-block ml-sm-0 ml-3 mt-3">
                        <label class="mr-sm-2" for="inlineFormCustomSelect">Посещение</label>
                        <select class="custom-select" id="inlineFormCustomSelect">
                            <option selected>18 мая 2020 г.</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="d-flex flex-column client-info-block2-bar2 mt-4">
                        <ul class="nav nav-pills" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="pills-teeth-map-tab" data-toggle="pill" role="tab"
                                   href="#pills-teeth-map" aria-controls="pills-teeth-map" aria-selected="true">Карта зубов</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-treatment-plan-tab" data-toggle="pill" role="tab"
                                   href="#pills-treatment-plan" role="tab" aria-controls="pills-treatment-plan"
                                   aria-selected="false">План лечения</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-patient-card-tab" data-toggle="pill"
                                   role="tab" href="#pills-patient-card" role="tab" aria-controls="pills-patient-card"
                                   aria-selected="false">Карта пациента</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-history-tab" data-toggle="pill"
                                   role="tab" href="#pills-history" role="tab" aria-controls="pills-history"
                                   aria-selected="false">История</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="pills-naryady-tab" data-toggle="pill"
                                   role="tab" href="#pills-naryady" role="tab" aria-controls="pills-naryady"
                                   aria-selected="false">Наряды</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-teeth-map" role="tabpanel"
                                 aria-labelledby="pills-teeth-map-tab">
                                <div class="d-flex flex-column teeth-map-block mt-3">
                                    <div class="d-flex flex-column teeth-map-box">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p>5</p>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <p>6</p>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p>1</p>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth2.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <p>2</p>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <span>8</span>
                                            <span>7</span>
                                            <span>6</span>
                                            <span>5</span>
                                            <span>4</span>
                                            <span>3</span>
                                            <span>2</span>
                                            <span>1</span>
                                            <span>1</span>
                                            <span>2</span>
                                            <span>3</span>
                                            <span>4</span>
                                            <span>5</span>
                                            <span>6</span>
                                            <span>7</span>
                                            <span>8</span>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p>4</p>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <p>3</p>
                                        </div>
                                        <div class="d-flex justify-content-center align-items-center">
                                            <p>5</p>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth3.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <button class="btn p-0"><img src="../../img/teeth.svg" alt=""></button>
                                            <p>6</p>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-4">
                                        <span class="red-dot2"></span>
                                        <p>Есть даные</p>
                                        <span class="yellow-dot"></span>
                                        <p>Есть даные</p>
                                    </div>
                                    <div class="d-flex flex-sm-row flex-column mt-2 p-sm-0 p-3">
                                        <div class="d-flex flex-column mr-4">
                                            <h5>Зуб №24</h5>
                                            <label for="teethState">Состояние</label>
                                            <select type="text" id="teethState" class="custom-select">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="d-flex align-items-end mt-sm-0 mt-4">
                                            <button class="btn btn-success">Сохранить</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-treatment-plan" role="tabpanel"
                                 aria-labelledby="pills-treatment-plan-tab">
                                <div class="d-flex flex-column treatment-plan-block">
                                    <div class="d-flex flex-sm-row flex-column align-items-sm-end align-items-start treatment-plan-box mt-4">
                                        <div class="d-flex flex-column ml-sm-0 ml-3 mr-3">
                                            <label class="mr-sm-2" for="stage">Этап</label>
                                            <select class="custom-select" id="stage">
                                                <option selected value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-column mt-3 mt-sm-0 ml-sm-0 ml-3 mr-3">
                                            <label class="mr-sm-2" for="quantity">Количество</label>
                                            <select class="custom-select" id="quantity">
                                                <option selected value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <p class="mb-1 ml-sm-0 ml-3 mr-3 mt-3 mt-sm-0">X</p>
                                        <div class="d-flex flex-column ml-sm-0 ml-3 mr-3 mt-3 mt-sm-0">
                                            <label class="mr-sm-2" for="nameSelect">Наименование</label>
                                            <select class="custom-select" id="nameSelect">
                                                <option selected value="Первичный (2000 тг.)">Первичный (2000 тг.)</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-column ml-sm-0 ml-3 mr-3 mt-3 mt-sm-0">
                                            <label for="inputTeeth">Зубы</label>
                                            <input type="text" class="form-control" id="inputTeeth">
                                        </div>
                                        <button class="btn d-flex align-items-end ml-sm-0 ml-3 p-0 mt-3 mt-sm-0">
                                            <img src="../../img/trash.svg" alt="trash">
                                        </button>
                                    </div>
                                    <div class="d-flex flex-sm-row flex-column mt-3">
                                        <button class="btn add-service-btn mr-auto ml-sm-0 ml-3">
                                            + Добавить еще услугу
                                        </button>
                                        <button class="btn btn-success mt-3 mt-sm-0 ml-sm-0 ml-3">
                                            Сохранить
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-patient-card" role="tabpanel"
                                 aria-labelledby="pills-patient-card-tab">
                                <div class="d-flex flex-column patient-card-block mt-4">
                                    <div class="d-flex flex-column mt-2 p-3 p-sm-3">
                                        <h5>Диагнозы</h5>
                                        <div class="d-flex flex-sm-row flex-column">
                                            <div class="d-flex flex-column mr-3">
                                                <label class="mr-sm-2" for="teethQuantity">Зубы</label>
                                                <select class="custom-select" id="teethQuantity">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mt-sm-0 mt-3">
                                                <label class="mr-sm-2" for="diagnoses">Диагнозы</label>
                                                <select class="custom-select" id="diagnoses">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-sm-row flex-column mt-3">
                                            <button class="btn add-another-btn mr-auto">
                                                + Добавить еще диагноз
                                            </button>
                                            <button class="btn btn-success mt-sm-0 mt-3">
                                                Сохранить
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mt-4 p-3 p-sm-3">
                                        <h5>Жалобы</h5>
                                        <div class="d-flex flex-sm-row flex-column">
                                            <div class="d-flex flex-column mr-3">
                                                <label class="mr-sm-2" for="teethQuantity2">Зубы</label>
                                                <select class="custom-select" id="teethQuantity2">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mr-3 mt-sm-0 mt-3">
                                                <label class="mr-sm-2" for="complaints">Жалобы</label>
                                                <select class="custom-select" id="complaints">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mt-sm-0 mt-3">
                                                <label class="mr-sm-2" for="disease_dev">Развитие заболевания</label>
                                                <select class="custom-select" id="disease_dev">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3 flex-sm-row flex-column">
                                            <button class="btn add-another-btn mr-auto">
                                                + Добавить жалобу
                                            </button>
                                            <button class="btn btn-success mt-sm-0 mt-3">
                                                Сохранить
                                            </button>
                                        </div>
                                    </div>
                                    <div class="d-flex flex-column mt-4 p-3 p-sm-3">
                                        <h5>Аллергия</h5>
                                        <div class="d-flex flex-sm-row flex-column">
                                            <div class="d-flex flex-column mr-3">
                                                <label class="mr-sm-2" for="teethQuantity3">Зубы</label>
                                                <select class="custom-select" id="teethQuantity3">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mr-3 mt-sm-0 mt-3">
                                                <label class="mr-sm-2" for="complaints2">Жалобы</label>
                                                <select class="custom-select" id="complaints2">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mt-sm-0 mt-3">
                                                <label class="mr-sm-2" for="disease_dev2">Развитие заболевания</label>
                                                <select class="custom-select" id="disease_dev2">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-3 flex-sm-row flex-column">
                                            <button class="btn add-another-btn mr-auto">
                                                + Добавить жалобу
                                            </button>
                                            <button class="btn btn-success mt-sm-0 mt-3">
                                                Сохранить
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-history" role="tabpanel"
                                 aria-labelledby="pills-history-tab">
                                <div class="d-flex flex-column history-block mt-4">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">Дата</th>
                                            <th scope="col">Услуга</th>
                                            <th scope="col">Врач</th>
                                            <th scope="col">Диагноз</th>
                                            <th scope="col">Оплачено</th>
                                            <th scope="col">Примечания</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row" class="history-date">23.09.2019</th>
                                            <td>Первичный
                                                осмотр</td>
                                            <td>Волкова М. М.</td>
                                            <td>Не выявлено</td>
                                            <td>7 000 тг</td>
                                            <td>Нет</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-naryady" role="tabpanel"
                                 aria-labelledby="pills-naryady-tab">
                                <div class="d-flex flex-column naryady-block mt-4">
                                    <div class="d-flex">
                                        <button class="btn btn-success mr-3">Сканировать</button>
                                        <button class="btn btn-outline-secondary">Вручную</button>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <label style="margin-right: 170px" for="warehouse">Склад</label>
                                        <label style="margin-right: 270px" for="product">Товар</label>
                                        <label for="productQuantity">Количество</label>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex">
                                            <div class="d-flex flex-column mr-3">
                                                <select class="custom-select" id="warehouse">
                                                    <option selected value="1">Стоматология</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mr-3">
                                                <select class="custom-select" id="product">
                                                    <option selected value="1">0523   Медикамент, мл</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column mr-3">
                                                <select class="custom-select" id="productQuantity">
                                                    <option selected value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                </select>
                                            </div>
                                            <div class="d-flex align-items-end">
                                                <button class="btn p-0">
                                                    <img src="../../img/trash.svg" alt="trash">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="d-flex mt-2">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Включить в счет</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex mt-4">
                                        <button class="btn btn-outline-secondary add-another-btn mr-auto">+ Добавить еще товар</button>
                                        <button class="btn btn-success">Сохранить</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-files" role="tabpanel"
                     aria-labelledby="pills-files-tab">
                    <div class="d-flex flex-wrap files-block mt-2">
                        <div class="d-flex files-box align-items-center">
                            <img src="/img/teeth-pic.svg" alt="" class="mr-3">
                            <div class="d-flex flex-column">
                                <h6>Рентген</h6>
                                <p>24 мая 2020 г.</p>
                            </div>
                        </div>
                        <div class="d-flex files-box align-items-center">
                            <img src="/img/teeth-pic.svg" alt="" class="mr-3">
                            <div class="d-flex flex-column">
                                <h6>Рентген</h6>
                                <p>24 мая 2020 г.</p>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-column add-file mt-4 p-sm-0 p-3">
                        <h6>Добавить файлы</h6>
                        <div class="d-flex d-sm-row flex-column mt-2">
                            <div class="flex-column mr-5">
                                <label for="fileName">Наименование</label>
                                <input type="text" class="form-control" id="fileName">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlFile1">Файл</label>
                                <input type="file" class="form-control-file" id="exampleFormControlFile1">
                            </div>
                        </div>
                        <div class="d-flex mt-3">
                            <button class="btn btn-success">
                                Сохранить
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-materials" role="tabpanel"
                     aria-labelledby="pills-materials-tab">
                    <div class="materials-block mt-3">
                        <table class="table mat-table">
                            <thead>
                            <tr>
                                <th scope="col">№</th>
                                <th scope="col">Наименование</th>
                                <th scope="col">Склад</th>
                                <th scope="col">Цена</th>
                                <th scope="col">Кол.</th>
                                <th scope="col">Сумма</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td><b>NutriBiotic, Гель для зубов</b></td>
                                <td>Основной</td>
                                <td>2 800 тг</td>
                                <td>1 шт</td>
                                <td>2 800 тг</td>
                                <td>
                                    <button class="btn p-0"><img src="/img/trash.svg" alt="trash"></button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td><b>Organix South, TheraNeem Naturals</b></td>
                                <td>Основной</td>
                                <td>3 522 тг</td>
                                <td>2 шт</td>
                                <td>7 044 тг</td>
                                <td>
                                    <button class="btn p-0"><img src="/img/trash.svg" alt="trash"></button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <div class="d-flex justify-content-end pr-4">
                            <button style="width: 150px" class="btn btn-success">Добавить товар</button>
                        </div>
                        <div class="d-flex flex-column mt-4">
                            <div class="d-flex">
                                <div class="d-flex flex-column mr-auto">
                                    <label for="paymentMethod">Способ оплаты</label>
                                    <select class="custom-select mb-3" id="paymentMethod">
                                        <option selected>Наличные</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-column pr-4">
                                    <p><b>Итог</b></p>
                                    <p><b>22 000 тенге</b></p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end pr-4 mt-2">
                                <button class="btn">Отменить</button>
                                <button class="btn btn-primary">Оплатить
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('content1')
        </div>
    </div>
@endsection
