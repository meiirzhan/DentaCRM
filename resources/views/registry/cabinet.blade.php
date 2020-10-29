@extends('layouts.registry')

@section('title-block') Личный кабинет @endsection
@section('tab')
<h3 class="page-name mt-4">Личный кабинет</h3>
<div class="d-flex flex-sm-row flex-column personal-cabinet-block">
    <div class="d-flex flex-column personal-cabinet-box1">
        <div class="d-flex">
            <img src="../img/avatar.svg" alt="Avatar" class="avatar-lg">
            <div class="d-flex flex-column ml-4">
                <h5>Адиева Марал Болатовна</h5>
                <h6>Стоматолог-ортодонт</h6>
            </div>
        </div>
        <div class="d-flex flex-sm-row flex-column mt-3">
            <div class="d-flex flex-column mr-3">
                <label for="userFullName">Ф. И. О.</label>
                <input type="text" id="userFullName" class="form-control">
                <label for="userTel">Телефон</label>
                <input type="tel" id="userTel" class="form-control">
            </div>
            <div class="d-flex flex-column">
                <label for="birthDate">Дата рождения</label>
                <input type="date" id="birthDate" class="form-control">
                <label for="userEmail">E-mail</label>
                <input type="email" id="userEmail" class="form-control">
            </div>
        </div>
        <div class="d-flex flex-column">
            <button class="btn btn-success mt-4">Сохранить</button>
        </div>
    </div>
    <div class="d-flex flex-column personal-cabinet-box2 mt-sm-0 mt-3">
        <h5>Начальный (50%)</h5>
        <div class="d-flex flex-column">
            <div class="progress level-bar-lg">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
        <div class="d-flex level-description">
            <p>Для перехода на следующий уровень Вам требуется 200 часов отработки, а также загрузить 1
                сертификат по повышению квалификации.</p>
        </div>
        <div class="d-flex flex-column certificates-box">
            <p>Сертификаты</p>
            <div class="d-flex flex-wrap">
                <img src="../img/certificate1.svg" width="150" height="90" alt="">
                <img src="../img/certificate2.svg" width="150" height="90" alt="">
                <img src="../img/certificate3.svg" width="150" height="90" alt="">
                <img src="../img/certificate4.svg" width="150" height="90" alt="">
                <img src="../img/certificate5.svg" width="150" height="90" alt="">
                <img src="../img/certificate6.svg" width="150" height="90" alt="">
            </div>
            <div class="d-flex mt-4 justify-content-center">
                <button class="btn btn-primary">Добавить сертификат</button>
            </div>
        </div>
    </div>
</div>
@endsection
