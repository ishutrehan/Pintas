<div style="height: 662px;background-image:url('{{ asset('/img/photo1.PNG') }}');border-radius: 5px;position:relative">
@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Password recovery
@endsection

@section('content')
<br>
<body class="login-page">
    <div id="app">

        <div class="login-box">
            <div class="panel panel-primary">    
                <div class="login-logo panel-heading">
                    <a href="{{ url('/home') }}"><span style="color: white;"><h3><b>PINTAS.ASIA</b></h3></span></a>
                </div><!-- /.login-logo -->

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> {{ trans('adminlte_lang::message.someproblems') }}<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="login-box-body">
                    <p class="login-box-msg">Reset Password</p>

                    <email-reset-password-form></email-reset-password-form>

                    <hr>
                    <a href="{{ url('/login') }}">Log in</a><br>
                    <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>

                </div><!-- /.login-box-body -->
            </div>    
        </div><!-- /.login-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    <script>
        $(function () {
            $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
            });
        });
    </script>
</body>

@endsection
