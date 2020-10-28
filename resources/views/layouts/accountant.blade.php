@extends('layouts.app')
@push('js')
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Year', 'Задолженности', 'Общая сумма выплат'],
                ['2004',  1000,      400],
                ['2005',  1170,      460],
                ['2006',  660,       1120],
                ['2007',  1030,      540]
            ]);

            var options = {
                title: 'Текущие продажи',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

            chart.draw(data, options);
        }
    </script>
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(drawMaterial);

        function drawMaterial() {
            var data = new google.visualization.DataTable();
            data.addColumn('timeofday', 'Учет посещений ');
            data.addColumn('number', 'Запланированные');
            data.addColumn('number', 'Отмененные');

            data.addRows([
                [{v: [8, 0, 0], f: '8 am'}, 1, .25],
                [{v: [9, 0, 0], f: '9 am'}, 2, .5],
                [{v: [10, 0, 0], f:'10 am'}, 3, 1],
                [{v: [11, 0, 0], f: '11 am'}, 4, 2.25],
                [{v: [12, 0, 0], f: '12 pm'}, 5, 2.25],
                [{v: [13, 0, 0], f: '1 pm'}, 6, 3],
                [{v: [14, 0, 0], f: '2 pm'}, 7, 4],
                [{v: [15, 0, 0], f: '3 pm'}, 8, 5.25],
                [{v: [16, 0, 0], f: '4 pm'}, 9, 7.5],
                [{v: [17, 0, 0], f: '5 pm'}, 10, 10],
            ]);

            var options = {
                title: 'Учет посещений',
                hAxis: {
                    title: 'Time of Day',
                    format: 'h:mm a',
                    viewWindow: {
                        min: [7, 30, 0],
                        max: [17, 30, 0]
                    }
                },
                vAxis: {
                    title: 'Rating (scale of 1-10)'
                }
            };

            var materialChart = new google.charts.Bar(document.getElementById('chart_div'));
            materialChart.draw(data, options);
        }
    </script>
    @endpush
@section('content')
<div class="container-fluid">
    <span class="d-sm-none d-block position-absolute" style="font-size:30px;cursor:pointer; left: 4%;"
          onclick="openNav()">&#9776;
    </span>
    <div class="d-flex vh-100">
        <div class="d-sm-flex d-none desk menu-block justify-content-center">
            <div class="w-50 mt-3">
                <a href=""><h5 class="logo-max"><span>Denta</span>CRM</h5></a>
                <div class="menu">
                    <ul class="nav nav-pills flex-column" id="pills-tab">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-statistics-tab" data-toggle="pill" href="#pills-statistics"
                               role="tab" aria-controls="pills-statistics" aria-selected="true">Статистика</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-documents-tab" data-toggle="pill" href="#pills-documents"
                               role="tab" aria-controls="pills-documents" aria-selected="false">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-warehouse-tab" data-toggle="pill" href="#pills-warehouse"
                               role="tab" aria-controls="pills-warehouse" aria-selected="false">Склад</a>
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
                    <a class="nav-link active" id="pills-statistics-tab" onclick="closeNav()" data-toggle="pill" href="#pills-statistics"
                       role="tab" aria-controls="pills-statistics" aria-selected="true">Статистика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-documents-tab" onclick="closeNav()" data-toggle="pill" href="#pills-documents"
                       role="tab" aria-controls="pills-documents" aria-selected="false">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-warehouse-tab" onclick="closeNav()" data-toggle="pill" href="#pills-warehouse"
                       role="tab" aria-controls="pills-warehouse" aria-selected="false">Склад</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-reports-tab" onclick="closeNav()" data-toggle="pill" href="#pills-reports"
                       role="tab" aria-controls="pills-reports" aria-selected="false">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="pills-settings-tab" onclick="closeNav()" data-toggle="pill" href="#pills-settings"
                       role="tab" aria-controls="pills-settings" aria-selected="false">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="content-block">
            @include('layouts.top-bar')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-statistics" role="tabpanel" aria-labelledby="pills-statistics-tab">
                    @yield('tab')
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
                            <button class="btn">
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
                </div>
                <div class="tab-pane fade" id="pills-warehouse" role="tabpanel" aria-labelledby="pills-warehouse-tab">
                    <h3 class="page-name mt-4">Склад</h3>
                    <div class="d-flex flex-column warehouse-block">
                        <div class="d-flex mt-4">
                            <button class="btn btn-secondary">Фильтр</button>
                            <button type="button" class="btn btn-primary appointment-btn" data-toggle="modal" data-target="#modalAddProduct">Добавить товар</button>
                        </div>
                        <div class="d-flex mt-4">
                            <div class="d-flex flex-column">
                                <label for="warehouseProduct">Товары</label>
                                <select class="custom-select" id="warehouseProduct">
                                    <option selected value="1">Выберите</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="warehouse1">Склад</label>
                                <select class="custom-select" id="warehouse1">
                                    <option selected value="1">Выберите</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column">
                                <label for="warehouseSort">Сортировать</label>
                                <select class="custom-select" id="warehouseSort">
                                    <option selected value="1">По дате</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <table class="table table-borderless mt-4">
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
                            <tr>
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <p>Перчатки</p>
                                        <small><span>Код:</span> 001</small>
                                        <small><span>Артикул:</span> 123543</small>
                                        <small><span>Штрих-код:</span> 100200</small>
                                    </div>
                                </th>
                                <td>Основной</td>
                                <td>25 ₸</td>
                                <td>№ 765410</td>
                                <td>998 шт.</td>
                                <td>27.01.2020</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn p-0 mr-3"><img src="../img/edit1.svg" alt=""></button>
                                        <button class="btn p-0"><img src="../img/x-grey.svg" alt=""></button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="d-flex flex-column">
                                        <p>Перчатки</p>
                                        <small><span>Код:</span> 001</small>
                                        <small><span>Артикул:</span> 123543</small>
                                        <small><span>Штрих-код:</span> 100200</small>
                                    </div>
                                </th>
                                <td>Основной</td>
                                <td>25 ₸</td>
                                <td>№ 765410</td>
                                <td>998 шт.</td>
                                <td>27.01.2020</td>
                                <td>
                                    <div class="d-flex">
                                        <button class="btn p-0 mr-3"><img src="../img/edit1.svg" alt=""></button>
                                        <button class="btn p-0"><img src="../img/x-grey.svg" alt=""></button>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
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
@include('layouts.modals.add-patient')
@include('layouts.modals.add-entry')
@include('layouts.modals.show-info')
@include('layouts.modals.add-payment')
@include('layouts.modals.add-product')
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
<script src="/scripts/script.js"></script>
@endsection
