<<<<<<< HEAD
@extends('layouts.master')

@section('title')
    نظام إدارة المستودعات
@endsection

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">تسجيل مستخدم جديد</h3>
                </div>
                <div class="panel-body">
                    <div class="messages">
                        <!--//////////////////////////////////////////////////////////////////
                        ///////////TO DO LOGIN ERROR MESSAGES/////////////////////////////
                        //////////////////////////////////////////////////////////////////-->
                    </div>
                    <form class="form-horizontal" action="{{ route('signup') }}" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">البريد الإلكتروني</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="البريد الإلكتروني">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">اسم المستخدم</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="username" id="username" placeholder="اسم المستخدم">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passsword" class="col-sm-2 control-label"> كلمة المرور </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="passsword" placeholder="كلمة المرور">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i>
                                تسجيل
                            </button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">تسجيل الدخول</h3>
                </div>
                <div class="panel-body">
                    <div class="messages">
                        <!--//////////////////////////////////////////////////////////////////
                        ///////////TO DO LOGIN ERROR MESSAGES/////////////////////////////
                        //////////////////////////////////////////////////////////////////-->
                    </div>
                    <form class="form-horizontal" action="{{ route('signin') }}" method="post">
                        <fieldset>
                            <div class="form-group">
                                <label for="email" class="col-sm-2 control-label">البريد الإلكتروني</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text" name="email" id="email" placeholder="البريد الإلكتروني">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passsword" class="col-sm-2 control-label"> كلمة المرور </label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="password" name="password" id="passsword" placeholder="كلمة المرور">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-log-in"></i>
                            دخول
                            </button>
                            <input type="hidden" name="_token" value="{{ Session::token() }}">
                        </fieldset>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
=======
<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
    </body>
</html>
>>>>>>> 03fa06c8ee2de980812edf2bfa3018ef238d2e49
