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
                            <a class="nav-link {{(url()->current() == route('registry-notes')?'active':'')}}" href="{{route('registry-notes')}}">Записи</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'docs')?'active':'')}}" href="{{route('registry.docs')}}">Документы</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'report')?'active':'')}}" href="{{route('registry.report')}}">Отчеты</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{(str_contains(url()->current(), 'settings')?'active':'')}}" href="{{route('registry.settings')}}">Настройки</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <ul class="nav nav-pills flex-column" id="pills-tab">
                <li class="nav-item">
                    <a class="nav-link {{(url()->current() == route('registry-notes')?'active':'')}}" href="{{route('registry-notes')}}">Записи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'docs')?'active':'')}}" href="{{route('registry.docs')}}">Документы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'report')?'active':'')}}" href="{{route('registry.report')}}">Отчеты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{(str_contains(url()->current(), 'settings')?'active':'')}}" href="{{route('registry.settings')}}">Настройки</a>
                </li>
            </ul>
        </div>
        <div class="content-block">
            @include('layouts.top-bar')
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-notes" role="tabpanel"
                     aria-labelledby="pills-notes-tab">
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
@include('layouts.modals.add-patient')
@include('layouts.modals.add-entry')
@include('layouts.modals.show-info')
@include('layouts.modals.add-payment')

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
