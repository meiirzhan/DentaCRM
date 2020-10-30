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
                            <a class="nav-link {{(url()->current() == route('booker.block')?'active':'')}}" href="{{route('booker.block')}}">Статистика</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'docs')?'active':'')}}" href="{{route('booker.docs')}}">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'stock')?'active':'')}}" href="{{route('booker.stock')}}">Склад</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'report')?'active':'')}}" href="{{route('booker.report')}}">Отчеты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'settings')?'active':'')}}" href="{{route('booker.settings')}}">Настройки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="nav nav-pills flex-column" id="pills-tab">
                <li class="nav-item">
                    <a class="nav-link {{(url()->current() == route('booker.block')?'active':'')}}" href="{{route('booker.block')}}">Статистика</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'docs')?'active':'')}}" href="{{route('booker.docs')}}">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'stock')?'active':'')}}" href="{{route('booker.stock')}}">Склад</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'report')?'active':'')}}" href="{{route('booker.report')}}">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'settings')?'active':'')}}" href="{{route('booker.settings')}}">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="content-block">
            @include('layouts.top-bar')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-statistics" role="tabpanel" aria-labelledby="pills-statistics-tab">
                    @yield('tab')
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
