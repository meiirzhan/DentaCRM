@php
$point = $user->level/100;
switch ((int)$point){
    case 0:
        $level = 'Начальный';
    break;
    case 1:
        $level = 'Средний';
    break;
    case 2:
        $level = 'Продвинутый';
    break;
    default:
        $level = 'Эксперт';
}
@endphp
@extends('layouts.dentist')
@section('title-block') Личный кабинет @endsection
@section('tab')
<h3 class="page-name mt-4">Личный кабинет</h3>
<div class="d-flex flex-sm-row flex-column personal-cabinet-block">
    <div class="d-flex flex-column personal-cabinet-box1">
        <div class="d-flex">
            <img src="{{asset('/storage/'.$user->avatar)}}" alt="Avatar" class="avatar-lg">
            <div class="d-flex flex-column ml-4">
                <h5>{{$user->name}} {{$user->lastname??''}} {{$user->middlename??''}}</h5>
                <h6>{{$user->role->display_name}}</h6>
            </div>
        </div>

        <form action="{{route('user.update')}}" method="post">
            @csrf
            <div class="d-flex flex-sm-row flex-column mt-3">
                <div class="d-flex flex-column mr-3">
                    <label for="userFullName">Фамилия</label>
                    <input required name="lastname" type="text" id="userFullName" class="form-control" value="{{$user->lastname??''}}">
                    <label for="userFullName">Имя</label>
                    <input required name="name" type="text" id="userFullName" class="form-control" value="{{$user->name??''}}">
                    <label for="birthDate">Отчество</label>
                    <input required name="middlename" type="text" id="birthDate" class="form-control" value="{{$user->middlename??''}}">
                </div>
                <div class="d-flex flex-column">
                    <label for="birthDate">Дата рождения</label>
                    <input type="date" name="birthday" id="birthDate" class="form-control" value="{{$user->birthday}}">
                    <label for="userEmail">E-mail</label>
                    <input type="email" name="email" id="userEmail" class="form-control" value="{{$user->email??''}}">
                    <label for="userTel">Телефон</label>
                    <input type="tel" name="phone" id="userTel" class="form-control phone_mask" value="{{$user->phone??''}}">
                </div>
            </div>
            <div class="d-flex flex-column">
            <button class="btn btn-success mt-4">Сохранить</button>
        </div>
        </form>
    </div>
    <div class="d-flex flex-column personal-cabinet-box2 mt-sm-0 mt-3">
        <h5>{{$level}} ({{$user->level%100}}%)</h5>
        <div class="d-flex flex-column">
            <div class="progress level-bar-lg">
                <div class="progress-bar" role="progressbar" style="width: {{$user->level%100}}%" aria-valuenow="{{$user->level%100}}"
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
                @foreach(json_decode($user->certificates)??[] as $c)
                    <img src="{{asset('/storage/'.$c)}}" width="150" height="90" alt="cert">
                    @endforeach
            </div>
            <div class="d-flex mt-4 justify-content-center">
                <form id="img-form" enctype="multipart/form-data" method="post" action="{{route('user.image')}}">
                    @csrf
                    <input onchange="document.getElementById('img-form').submit();" id="images" hidden required type="file" accept=".jpg, .jpeg, .png" class="form-control" name="images[]" multiple>
                    <button onclick="document.getElementById('images').click();" type="button" class="btn btn-primary">Добавить сертификат</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
