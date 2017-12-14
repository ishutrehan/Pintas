<div style="height: 662px;background-image:url('{{ asset('/img/login.JPG') }}');border-radius: 5px;position:relative">
@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Log in
@endsection

@section('content')
<br><br>
<body class="hold-transition login-page">
    <div id="app" v-cloak>
        <div class="login-box">
            
            <div class="panel panel-primary">
                <div class="login-logo panel-heading">
                    <a href="{{ url('/home') }}"><span style="color: white;"><h3><b>IPHALL</b></h3></span></a>
                </div><!-- /.login-logo -->

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
                    <p class="login-box-msg"> {{ trans('adminlte_lang::message.siginsession') }} </p>

                    
                    
                    <login-form name="{{ config('auth.providers.users.field','email') }}"
                                domain="{{ config('auth.defaults.domain','') }}"></login-form>

                    @include('adminlte::auth.partials.social_login')

                    <hr>
                    <a href="{{ url('/password/reset') }}">{{ trans('adminlte_lang::message.forgotpassword') }}</a><br>
                    <a href="{{ url('/register') }}" class="text-center">{{ trans('adminlte_lang::message.registermember') }}</a>
                </div>
            </div>    
        </div>
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
