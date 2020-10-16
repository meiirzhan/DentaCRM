<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://node_modules/air-datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="https://node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://node_modules/air-datepicker/dist/js/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
    <link rel="stylesheet" type="text/css" href="/dist/tui-calendar.css">
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/icons.css">
    <title>@yield('title-block')</title>
</head>
<body>
<div class="container-fluid">
    <span class="d-sm-none d-block position-absolute" style="font-size:30px;cursor:pointer; left: 4%;"
          onclick="openNav()">&#9776;</span>
    <div class="d-flex vh-100">
        <div class="d-sm-flex d-none desk menu-block justify-content-center">
            <div class="w-50 mt-3">
                <a href=""><h5 class="logo-max"><span>Denta</span>CRM</h5></a>
                <div class="menu">
                    <ul class="nav nav-pills flex-column" id="pills-tab">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-notes-tab" data-toggle="pill" href="#pills-notes"
                               role="tab" aria-controls="pills-notes" aria-selected="true">Записи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-documents-tab" data-toggle="pill" href="#pills-documents"
                               role="tab" aria-controls="pills-documents" aria-selected="false">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-reports-tab" data-toggle="pill" href="#pills-reports"
                               role="tab" aria-controls="pills-reports" aria-selected="false">Отчеты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-settings-tab" data-toggle="pill" href="#pills-settings"
                               role="tab" aria-controls="pills-settings" aria-selected="false">Настройки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="nav nav-pills flex-column" id="pills-tab">
                <li class="nav-item">
                    <a class="nav-link active" id="pills-notes-tab" onclick="closeNav()" data-toggle="pill"
                       href="#pills-notes"
                       role="tab" aria-controls="pills-notes" aria-selected="true">Записи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-documents-tab" onclick="closeNav()" data-toggle="pill"
                       href="#pills-documents"
                       role="tab" aria-controls="pills-documents" aria-selected="false">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-reports-tab" onclick="closeNav()" data-toggle="pill"
                       href="#pills-reports"
                       role="tab" aria-controls="pills-reports" aria-selected="false">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-settings-tab" onclick="closeNav()" data-toggle="pill"
                       href="#pills-settings"
                       role="tab" aria-controls="pills-settings" aria-selected="false">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="content-block">
            <div class="d-flex flex-sm-row flex-column">
                <h6 class="branch-address mr-auto order-sm-1 order-2">Филиал №1, пр. Абая</h6>
                <div class="d-flex order-sm-2 order-1 justify-content-end">
                    <a href="{{ route('registry-cabinet') }}">
                    <div class="d-flex user-info">
                        <img src="/img/avatar.svg" class="avatar" alt="Paris">
                            <div class="d-flex flex-column align-items-center justify-content-center user-information">
                                <p class="user-name">Адиева М. Б.</p>
                                <p>Администратор</p>
                            </div>
                    </div>
                    </a>
                    <div class="bell">
                        <button class="btn">
                            <img src="/img/bell-on.svg" alt="">
                        </button>
                    </div>
                    <div class="logout">
                        <button class="btn">
                            <img src="/img/logout.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-notes" role="tabpanel"
                     aria-labelledby="pills-notes-tab">
                    @yield('content')
                </div>
                <div class="tab-pane fade" id="pills-documents" role="tabpanel" aria-labelledby="pills-documents-tab">
                    <h3 class="page-name mt-4">Документы</h3>
                    <div class="d-flex flex-column documents-block">
                        <div class="d-flex documents-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Форма №037-1/у</h6>
                                <p class="mb-0 mr-auto">Листок ортопеда</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button type="button" class="btn" data-toggle="collapse" data-target="#collapseExample"
                                    aria-expanded="false" aria-controls="collapseExample">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex documents-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Форма №037/у</h6>
                                <p class="mb-0 mr-auto">Листок стоматолога</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex documents-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Форма №039-4/у</h6>
                                <p class="mb-0 mr-auto">Сводная ведомость ортопеда</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex documents-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Форма №037-1/у</h6>
                                <p class="mb-0 mr-auto">Сводная ведомость терапевта и хирурга</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                    </div>
                    <div class="collapse" id="collapseExample">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident.
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-reports" role="tabpanel" aria-labelledby="pills-reports-tab">
                    <h3 class="page-name mt-4">Отчеты</h3>
                    <div class="d-flex flex-column reports-block">
                        <div class="d-flex reports-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по бухгалтерии</h6>
                                <p class="mb-0 mr-auto">Подробный отчет учета бухгалтерии</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex reports-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по пациентам</h6>
                                <p class="mb-0 mr-auto">Подробный отчет по пациентам</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex reports-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по складу</h6>
                                <p class="mb-0 mr-auto">Подробный отчет по скаду</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex reports-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по сотрудникам</h6>
                                <p class="mb-0 mr-auto">Подробный отчет по сотрудникам</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex reports-box">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по услугам</h6>
                                <p class="mb-0 mr-auto">Подробный отчет по услугам</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                        <div class="d-flex reports-box-end">
                            <div class="d-flex flex-column mr-auto">
                                <h6 class="mb-0">Отчет по маркетингу</h6>
                                <p class="mb-0 mr-auto">Подробный отчет по маркетингу</p>
                            </div>
                            <button class="btn">
                                <img src="/img/print.svg" alt="">
                            </button>
                            <button class="btn">
                                <img src="/img/eye.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-settings" role="tabpanel" aria-labelledby="pills-settings-tab">
                    <h3 class="page-name mt-4">Настройки</h3>
                    <div class="d-flex flex-wrap align-items-end justify-content-start settings-block">
                        <div class="d-flex flex-column settings-box mr-sm-4 mr-0">
                            <div class="d-flex settings-part1">
                                <h6>Настройки аккаунта</h6>
                            </div>
                            <div class="d-flex flex-column settings-part2">
                                <a href=""><h6>Профиль</h6></a>
                                <a href=""><h6>Уведомления</h6></a>
                                <a href=""><h6>Сотрудники</h6></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column settings-box mr-sm-4 mr-0 mt-4">
                            <div class="d-flex settings-part1">
                                <h6>Информация о компании</h6>
                            </div>
                            <div class="d-flex flex-sm-row flex-column">
                                <div class="d-flex flex-column settings-part2">
                                    <a href=""><h6>О компании</h6></a>
                                    <a href=""><h6>Адреса филиалов</h6></a>
                                    <a href=""><h6>Статистика</h6></a>
                                </div>
                                <div class="d-flex flex-column settings-part2 ml-sm-5 ml-0">
                                    <a href=""><h6>Отчеты</h6></a>
                                    <a href=""><h6>Документы</h6></a>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex flex-column settings-box mt-4">
                            <div class="d-flex settings-part1">
                                <h6>Помощь</h6>
                            </div>
                            <div class="d-flex flex-column settings-part2">
                                <a href=""><h6>Как пользоваться?</h6></a>
                                <a href=""><h6>Как вести учет?</h6></a>
                                <a href=""><h6>Сотрудники</h6></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{{--Modals--}}
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
<div class="modal fade" id="modalAddEntry" tabindex="-1" role="dialog" aria-labelledby="modalAddEntryLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <div class="d-flex flex-column">
                    <h5 class="modal-title" id="modalAddEntryLabel">Добавить запись</h5>
                    <p class="entry-date-text">Запись на 12.06.2020 г. (12:30 - 13:00)</p>
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
<div class="modal fade" id="modalShowInfo" tabindex="-1" role="dialog" aria-labelledby="addShowInfoLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <p class="mr-2">Врач: Колесникова М. Е.</p>
                <p class="mr-auto">(09:30 - 10:30)</p>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="d-flex show-info-part2 justify-content-between">
                    <div class="d-flex flex-column">
                        <p><span class="font-weight-bold mr-1">Пациент: </span>Нурлыбаев Талгат Болатович</p>
                        <p><span class="font-weight-bold mr-1">Телефон:  </span>+7(777)123-56-78</p>
                        <p><span class="font-weight-bold mr-1">Направление: </span>Самонаправленный</p>
                        <p><span class="font-weight-bold mr-1">Запись: </span>09:30 - 10:30</p>
                        <p><span class="font-weight-bold mr-1">Врач: </span>Колесникова Мария Евгеньевна</p>
                        <p><span class="font-weight-bold mr-1">Процедура: </span>Первичный осмотр</p>
                        <p><span class="font-weight-bold mr-1">Жалобы: </span>В профилактических целях</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <h6>Не подтвержден</h6>
                        <button class="btn">Изменить запись</button>
                        <button class="btn">Оплата</button>
                        <button class="btn">Подтвердить</button>
                        <button class="btn">Удалить</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

<script src="https://uicdn.toast.com/tui.code-snippet/v1.5.2/tui-code-snippet.min.js"></script>
<script src="https://uicdn.toast.com/tui.time-picker/v2.0.3/tui-time-picker.min.js"></script>
<script src="https://uicdn.toast.com/tui.date-picker/v4.0.3/tui-date-picker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/chance/1.0.13/chance.min.js"></script>
<script src="/dist/tui-calendar.js"></script>
<script src="/scripts/data/calendars.js"></script>
<script src="/scripts/data/schedules.js"></script>
<script src="/scripts/app.js"></script>
<script src="/scripts/script.js"></script>
{{--<script>--}}

{{--    var cal = new tui.Calendar('#calendar', {--}}

{{--        // 'day', 'week', 'month'--}}
{{--        defaultView: 'day',--}}

{{--        // shows the milestone and task in weekly, daily view--}}
{{--        taskView: true,--}}

{{--        // shows the all day and time grid in weekly, daily view--}}
{{--        scheduleView: true,--}}

{{--        // template options--}}
{{--        template: {--}}
{{--            milestone: function(schedule) {--}}
{{--                return '<span style="color:red;"><i class="fa fa-flag"></i> ' + schedule.title + '</span>';--}}
{{--            },--}}
{{--            milestoneTitle: function() {--}}
{{--                return 'Milestone';--}}
{{--            },--}}
{{--            task: function(schedule) {--}}
{{--                return '&nbsp;&nbsp;#' + schedule.title;--}}
{{--            },--}}
{{--            taskTitle: function() {--}}
{{--                return '<label><input type="checkbox" />Task</label>';--}}
{{--            },--}}
{{--            allday: function(schedule) {--}}
{{--                return schedule.title + ' <i class="fa fa-refresh"></i>';--}}
{{--            },--}}
{{--            alldayTitle: function() {--}}
{{--                return 'All Day';--}}
{{--            },--}}
{{--            time: function(schedule) {--}}
{{--                return schedule.title + ' <i class="fa fa-refresh"></i>' + schedule.start;--}}
{{--            }--}}
{{--        },--}}
{{--        week: {--}}
{{--            daynames: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],--}}
{{--            startDayOfWeek: 0,--}}
{{--            narrowWeekend: true--}}
{{--        },--}}
{{--        month: {--}}
{{--            daynames: ['Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб', 'Вс'],--}}
{{--            startDayOfWeek: 0,--}}
{{--            narrowWeekend: true--}}
{{--        },--}}

{{--        // list of Calendars that can be used to add new schedule--}}
{{--        calendars: [],--}}

{{--        // whether use default creation popup or not--}}
{{--        useCreationPopup: true,--}}

{{--        // whether use default detail popup or not--}}
{{--        useDetailPopup: true--}}

{{--    });--}}

{{--</script>--}}
</body>
</html>
