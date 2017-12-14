<!-- <div style="height:557px;background-image:url('{{ asset('/img/photo2.PNG') }}');border-radius: 5px;position:relative"> -->
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        <!-- @yield('contentheader_title', 'WELCOME') -->
        <!-- <center><u><b><span style="color: black;">WELCOME TO PINTAS.ASIA</span></b></u></center> -->
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ trans('adminlte_lang::message.level') }}</a></li>
        <li class="active">{{ trans('adminlte_lang::message.here') }}</li>
    </ol>
</section>