@extends('layouts.dentist')
@section('tab')
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
@endsection
