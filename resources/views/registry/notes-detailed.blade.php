@extends('layouts.registry')

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
            <div class="d-flex justify-content-sm-start justify-content-center client-info-block2-bar">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="pills-note-tab" data-toggle="pill" role="tab"
                           href="#pills-note" aria-controls="pills-home" aria-selected="true">Записи</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="pills-payment-tab" data-toggle="pill" role="tab"
                           href="#pills-payment" role="tab" aria-controls="pills-profile"
                           aria-selected="false">Оплаты</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link disabled" id="pills-contact-tab" data-toggle="pill"
                           role="tab" href="#" role="tab" aria-controls="pills-contact"
                           aria-selected="false">Лечебная карта</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link disabled" id="pills-contact-tab" data-toggle="pill"
                           role="tab" href="#" role="tab" aria-controls="pills-contact"
                           aria-selected="false">Файлы</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link disabled" id="pills-contact-tab" data-toggle="pill"
                           role="tab" href="#" role="tab" aria-controls="pills-contact"
                           aria-selected="false">Материалы</a>
                    </li>
                </ul>
            </div>
            <div class="tab-content" id="pills-tabContent">
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
                     aria-labelledby="pills-profile-tab">
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
            </div>
            @yield('content1')
        </div>
    </div>
@endsection
