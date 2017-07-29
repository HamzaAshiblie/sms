<!DOCTYPE html>
<html dir="rtl">
<head>
    <title>@yield('title')</title>
    <link href="{{URL::to('src/css/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::to('src/css/bootstrap/css/bootstrap-theme.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('src/plugins/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('src/plugins/fullcalendar/fullcalendar.print.css'),array('media' => 'print')}}">
</head>
<body>
    @include('includes.header')
    <div class="container">
        @yield('content')
    </div>

    <link rel="stylesheet" href="{{URL::to('src/plugins/moment/moment.min.js')}}">
    <link rel="stylesheet" href="{{URL::to('src/plugins/fullcalendar/fullcalendar.min.js')}}">
</body>
</html>
