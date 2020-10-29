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
@section('title-block') Отчеты @endsection
@section('tab')
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
    @endsection
