@extends('layouts.app')
@section('content')
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
                            <a class="nav-link {{(url()->current() == route('dentist-notes')?'active':'')}}" href="{{route('dentist-notes')}}">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'docs')?'active':'')}}" href="{{route('dentist.docs')}}">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'stock')?'active':'')}}" href="{{route('dentist.stock')}}">Склад</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'report')?'active':'')}}" href="{{route('dentist.report')}}">Отчеты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'settings')?'active':'')}}" href="{{route('dentist.settings')}}">Настройки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="nav nav-pills flex-column" id="pills-tab">
                <li class="nav-item">
                    <a class="nav-link {{(url()->current() == route('dentist-notes')?'active':'')}}" href="{{route('dentist-notes')}}">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'docs'?'active':''))}}" href="{{route('dentist.docs')}}">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'stock'?'active':''))}}" href="{{route('dentist.stock')}}">Склад</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'report'?'active':''))}}" href="{{route('dentist.report')}}">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'settings'?'active':''))}}" href="{{route('dentist.settings')}}">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="content-block">
            @include('layouts.top-bar')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-main" role="tabpanel" aria-labelledby="pills-main-tab">
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
@endsection
