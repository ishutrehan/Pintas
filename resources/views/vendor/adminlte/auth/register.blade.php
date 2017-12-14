<div style="height: 710px;background-image:url('{{ asset('/img/login.JPG') }}');border-radius: 5px;position:relative">
@extends('adminlte::layouts.auth')

@section('htmlheader_title')
    Register
@endsection

@section('content')
<br>
<body class="hold-transition register-page">
    <div id="app" v-cloak>
        <div class="register-box">
            <div class="panel panel-primary">
                <div class="register-logo panel-heading">
                    <a href="{{ url('/home') }}"><span style="color: white;"><h3><b>REGISTER FOR QUOTATION</b></h3></span></a>
                </div>

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

                <div class="register-box-body">
                    <p class="login-box-msg">{{ trans('adminlte_lang::message.registermember') }}</p>

                    <register-form></register-form>

                    @include('adminlte::auth.partials.social_login')

                    <hr>
                    <a href="{{ url('/login') }}" class="text-center">{{ trans('adminlte_lang::message.membreship') }}</a>
                </div><!-- /.form-box -->
            </div>    
        </div><!-- /.register-box -->
    </div>

    @include('adminlte::layouts.partials.scripts_auth')

    @include('adminlte::auth.terms')

</body>

@endsection
