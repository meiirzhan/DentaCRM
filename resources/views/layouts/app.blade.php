<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <link href="https://node_modules/air-datepicker/dist/css/datepicker.min.css" rel="stylesheet" type="text/css">
    <script src="https://node_modules/jquery/dist/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://node_modules/air-datepicker/dist/js/datepicker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    @stack('js')
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.time-picker/latest/tui-time-picker.css">
    <link rel="stylesheet" type="text/css" href="https://uicdn.toast.com/tui.date-picker/latest/tui-date-picker.css">
    <link rel="stylesheet" type="text/css" href="/dist/tui-calendar.css">
    <link rel="stylesheet" type="text/css" href="/css/default.css">
    <link rel="stylesheet" type="text/css" href="/css/icons.css">
    @stack('css')
    <title>@yield('title-block')</title>
</head>
<body>
    @yield('content')
</body>
</html>
