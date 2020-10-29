@php
    if (str_contains(url()->current(), 'booker')){
        $layouts = 'accountant';
    }
    else if(str_contains(url()->current(), 'dentist')){
        $layouts = 'dentist';
    }
    else if(str_contains(url()->current(), 'registry')){
        $layouts = 'registry';
    }
@endphp
@extends('layouts.'.$layouts)
@section('title-block') Настройки @endsection
@section('tab')
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
    @endsection
