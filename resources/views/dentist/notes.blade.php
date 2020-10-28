@extends('layouts.dentist')

@section('title-block') Записи @endsection

@section('tab')
    <div class="d-none option-box">
        <div class="d-flex flex-column mr-auto">
            <div class="d-flex flex-sm-row flex-column status align-items-start align-items-sm-center">
                <div class="d-flex align-items-center">
                    <span class="green-dot"></span>
                    <p>Подтверждены</p>
                </div>
                <div class="d-flex align-items-center ml-sm-3 ml-0 mt-sm-0 mt-2">
                    <span class="purple-dot"></span>
                    <p>Текущие</p>
                </div>
                <div class="d-flex align-items-center ml-sm-3 ml-0 mt-sm-0 mt-2">
                    <span class="pink-dot"></span>
                    <p>Не подтверждены</p>
                </div>
            </div>
            <div class="d-flex calendar-box">
                <div>
                    <input id="my-element" class="datepicker-here date" name="calendar"
                           placeholder="Выбрать дату">
                </div>
                <div>
                    <div id="carouselContent" data-interval="false" class="carousel day-carousel"
                         data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active text-center p-4">
                                <p>Сегодня</p>
                            </div>
                            <div class="carousel-item text-center p-4">
                                <p>Завтра</p>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselContent" role="button"
                           data-slide="prev">
                            <span class="carousel-control-prev-icon prev-btn" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselContent" role="button"
                           data-slide="next">
                            <span class="carousel-control-next-icon next-btn" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-none align-items-center">
            <button type="button" class="btn btn-primary appointment-btn" data-toggle="modal" data-target="#modalAddPatient">Добавить пациента</button>
            <button type="button" class="btn btn-primary appointment-btn" data-toggle="modal" data-target="#modalAddEntry">Добавить запись</button>
            <button type="button" class="btn btn-primary appointment-btn" data-toggle="modal" data-target="#modalShowInfo">Информация о клиенте</button>
        </div>
    </div>
    <div class="d-flex scrolling-wrapper">
        <div id="lnb">
            <div class="lnb-new-schedule">
                <button id="btn-new-schedule" type="button" class="btn btn-default btn-block lnb-new-schedule-btn" data-toggle="modal">
                    Новая запись</button>
            </div>
            <div id="lnb-calendars" class="lnb-calendars">
                <div>
                    <div class="lnb-calendars-item">
                        <label>
                            <input class="tui-full-calendar-checkbox-square" type="checkbox" value="all" checked>
                            <span></span>
                            <strong>Посмотреть все</strong>
                        </label>
                    </div>
                </div>
                <div id="calendarList" class="lnb-calendars-d1">
                </div>
            </div>
        </div>
        <div id="right">
            <div id="menu">
            <span class="dropdown">
                <button id="dropdownMenu-calendarType" class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="true">
                    <i id="calendarTypeIcon" class="calendar-icon ic_view_month" style="margin-right: 4px;"></i>
                    <span id="calendarTypeName">Dropdown</span>&nbsp;
                    <i class="calendar-icon tui-full-calendar-dropdown-arrow"></i>
                </button>
                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu-calendarType">
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-daily">
                            <i class="calendar-icon ic_view_day"></i>День
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weekly">
                            <i class="calendar-icon ic_view_week"></i>Неделя
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-monthly">
                            <i class="calendar-icon ic_view_month"></i>Месяц
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks2">
                            <i class="calendar-icon ic_view_week"></i>2 недели
                        </a>
                    </li>
                    <li role="presentation">
                        <a class="dropdown-menu-title" role="menuitem" data-action="toggle-weeks3">
                            <i class="calendar-icon ic_view_week"></i>3 недели
                        </a>
                    </li>
                </ul>
            </span>
                <span id="menu-navi">
                <button type="button" class="btn btn-default btn-sm move-today" data-action="move-today">Сегодня</button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-prev">
                    <i class="calendar-icon ic-arrow-line-left" data-action="move-prev"></i>
                </button>
                <button type="button" class="btn btn-default btn-sm move-day" data-action="move-next">
                    <i class="calendar-icon ic-arrow-line-right" data-action="move-next"></i>
                </button>
            </span>
                <span id="renderRange" class="render-range"></span>
            </div>
            <div id="calendar"></div>
        </div>
    </div>
@endsection
