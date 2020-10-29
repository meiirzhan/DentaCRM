@extends('layouts.accountant')

@section('title-block') Статистика @endsection

@section('tab')
    <h3 class="page-name mt-4">Статистика</h3>
    <div class="d-flex flex-column statistics-block">
        <div class="d-flex statistics-bar justify-content-center">
            <a href="">Сегодня</a>
            <a href="">Вчера</a>
            <a href="">Неделя</a>
            <a href="">Месяц</a>
            <a href="">Свой период</a>
        </div>
        <div class="d-flex flex-sm-row flex-column justify-content-around mt-3">
            <div class="d-flex mr-2 chart">
                <div id="curve_chart" style="width: 550px; height: 375px"></div>
            </div>
            <div class="d-flex mt-3 mt-sm-0 chart">
                <div id="chart_div" style="width: 550px; height: 375px;"></div>
            </div>
        </div>
        <div class="d-flex flex-column statistics-table">
            <div class="d-flex">
                <div class="d-flex mr-auto">
                    <a href="">Топ услуг</a>
                    <a href="">Топ врачей</a>
                </div>
                <a style="color: #0275D8;" href="">Просмотреть все</a>
            </div>
            <div class="d-flex mt-4">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Наименование</th>
                        <th scope="col">Этот месяц</th>
                        <th scope="col">Прошлый месяц</th>
                        <th scope="col">В общем</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">Анестезия</th>
                        <td>2</td>
                        <td>15</td>
                        <td>54</td>
                    </tr>
                    <tr>
                        <th scope="row">Протезирование</th>
                        <td>6</td>
                        <td>8</td>
                        <td>67</td>
                    </tr>
                    <tr>
                        <th scope="row">Установка пломбы</th>
                        <td>11</td>
                        <td>32</td>
                        <td>119</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
