<!DOCTYPE html>
<!--
Landing page based on Pratt: http://blacktie.co/demo/pratt/
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }} ">
    <meta name="author" content="Sergi Tur Badenas - acacha.org">

    <meta property="og:title" content="Adminlte-laravel" />
    <meta property="og:type" content="website" />
    <meta property="og:description" content="Adminlte-laravel - {{ trans('adminlte_lang::message.landingdescription') }}" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org/" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x600.png" />
    <meta property="og:image" content="http://demo.adminlte.acacha.org/img/AcachaAdminLTE600x314.png" />
    <meta property="og:sitename" content="demo.adminlte.acacha.org" />
    <meta property="og:url" content="http://demo.adminlte.acacha.org" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:site" content="@acachawiki" />
    <meta name="twitter:creator" content="@acacha1" />

    <title>PINTAS.ASIA</title> <!-- {{ trans('adminlte_lang::message.landingdescriptionpratt') }} -->

    <!-- Custom styles for this template -->
    <link href="{{ asset('/css/all-landing.css') }}" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>

</head>

<body data-spy="scroll" data-target="#navigation" data-offset="50">

<div id="app" v-cloak>
    <!-- Fixed navbar -->
    <div id="navigation" class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>IPHALL</b></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ url('home') }}" class="smoothScroll">{{ trans('adminlte_lang::message.home') }}</a></li>
                    <!-- <li><a href="#desc" class="smoothScroll">{{ trans('adminlte_lang::message.description') }}</a></li>
                    <li><a href="#showcase" class="smoothScroll">{{ trans('adminlte_lang::message.showcase') }}</a></li>
                    <li><a href="#contact" class="smoothScroll">{{ trans('adminlte_lang::message.contact') }}</a></li> -->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">{{ trans('adminlte_lang::message.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('adminlte_lang::message.register') }}</a></li>
                    @else
                        <li><a href="/home"><b style="text-transform: uppercase;">{{ Auth::user()->name }}</b></a></li>
                    @endif
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </div>


    <section id="home" name="home">
        <div id="headerwrap">
            <div class="container">
                <div class="row centered">
                    <!-- <div class="col-lg-12">
                        <h1>Acacha <b><a href="https://github.com/acacha/adminlte-laravel">adminlte-laravel</a></b></h1>
                        <h3>A <a href="https://laravel.com/">Laravel</a> {{ trans('adminlte_lang::message.laravelpackage') }}
                            scaffolding/boilerplate {{ trans('adminlte_lang::message.to') }} <a href="https://almsaeedstudio.com/preview">AdminLTE</a> {{ trans('adminlte_lang::message.templatewith') }}
                            <a href="http://getbootstrap.com/">Bootstrap</a> 3.0 {{ trans('adminlte_lang::message.and') }} <a href="http://blacktie.co/demo/pratt/">Pratt</a> Landing page</h3>
                        <h3><a href="{{ url('/register') }}" class="btn btn-lg btn-success">{{ trans('adminlte_lang::message.gedstarted') }}</a></h3>
                    </div> -->
                    <div class="col-lg-2">
                        <h5>{{ trans('adminlte_lang::message.amazing') }}</h5>
                        <p>{{ trans('adminlte_lang::message.basedadminlte') }}</p>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow1.png') }}">
                    </div>
                    <div class="col-lg-8">
                        <img class="img-responsive" src="{{ asset('/img/pintas.jpg') }}" alt="">
                    </div>
                    <div class="col-lg-2">
                        <br>
                        <img class="hidden-xs hidden-sm hidden-md" src="{{ asset('/img/arrow2.png') }}">
                        <h5>{{ trans('adminlte_lang::message.awesomepackaged') }}</h5>
                        <p>... {{ trans('adminlte_lang::message.by') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a> {{ trans('adminlte_lang::message.at') }} <a href="http://acacha.org">acacha.org</a> {{ trans('adminlte_lang::message.readytouse') }}</p>
                    </div>
                </div><br><br><br>
            </div> <!--/ .container -->
        </div><!--/ #headerwrap -->
    </section>

<!--     <section><br><br><br>
        <div class="container">
            <div class="col-md-12">
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Category</label><br>
                    <select id="category" class="form-control">
                      <option>Select One</option>
                      <option value="trademark">Trademark</option>
                      <option value="patent">Patent</option>
                      <option value="industrial design">Industrial Design</option>
                      <option value="copyright">Copyright</option>
                    </select>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label>Life Cycle</label>
                    <br>
                    <input type="radio" onclick="filterSelection('patent1')" name="life_cycle"> Pre-Filing<br>
                    <input type="radio" onclick="filterSelection('patent2')" name="life_cycle"> Filing<br>
                    <input type="radio" onclick="filterSelection('patent3')" name="life_cycle"> Post-Filing<br>
                  </div>
                </div>

                <div class="col-md-3">
                  <div class="form-group">
                    <label>Service Type</label>
                    <br>
                    <select id="service_type" class="form-control">
                      <option>Select one</option>
                      <option class="filterDiv patent1">Searching</option>
                      <option class="filterDiv patent1">Drafting</option>
                      <option class="filterDiv patent2">Patent Filing</option>
                      <option class="filterDiv patent3">Prosecution</option>
                      <option class="filterDiv patent3">Grant</option>
                      <option class="filterDiv patent3">Annuity</option>
                      <option class="filterDiv patent3">Renewal</option>
                    </select>
                  </div>
                </div>
                
                <div class="col-md-3">
                  <div class="form-group">
                    <label>Country</label>
                    <br>
                    <select id="service_type" class="form-control">
                      <option>Select one</option>
                      <option type="checkbox" value="malaysia">Malaysia</option>
                      <option type="checkbox" value="brunie">Brunie</option>
                      <option type="checkbox" value="singapore">Singapore</option>
                      <option type="checkbox" value="china">China</option>
                    </select>
                  </div>
                </div>
            </div>
        </div>    
    </section><br><br><br> -->

    <!-- <section id="desc" name="desc"> -->
        <!-- INTRO WRAP -->
        <!-- <div id="intro">
            <div class="container">
                <div class="row centered">
                    <h1>{{ trans('adminlte_lang::message.designed') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro01.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.community') }}</h3>
                        <p>{{ trans('adminlte_lang::message.see') }} <a href="https://github.com/acacha/adminlte-laravel">{{ trans('adminlte_lang::message.githubproject') }}</a>, {{ trans('adminlte_lang::message.post') }} <a href="https://github.com/acacha/adminlte-laravel/issues">{{ trans('adminlte_lang::message.issues') }}</a> {{ trans('adminlte_lang::message.and') }} <a href="https://github.com/acacha/adminlte-laravel/pulls">{{ trans('adminlte_lang::message.pullrequests') }}</a></p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro02.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.schedule') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{ asset('/img/intro03.png') }}" alt="">
                        <h3>{{ trans('adminlte_lang::message.monitoring') }}</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <br>
                <hr> -->
            <!-- </div> / .container  -->
        <!-- </div>/ #introwrap  -->

        <!-- FEATURES WRAP -->
        <!-- <div id="features">
            <div class="container">
                <div class="row">
                    <h1 class="centered">{{ trans('adminlte_lang::message.whatnew') }}</h1>
                    <br>
                    <br>
                    <div class="col-lg-6 centered">
                        <img class="centered" src="{{ asset('/img/mobile.png') }}" alt="">
                    </div>

                    <div class="col-lg-6">
                        <h3>{{ trans('adminlte_lang::message.features') }}</h3>
                        <br> -->
                        <!-- ACCORDION -->
                        <!-- <div class="accordion ac" id="accordion2">
                            <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                                        {{ trans('adminlte_lang::message.design') }}
                                    </a>
                                </div> --><!-- /accordion-heading -->
                                <!-- <div id="collapseOne" class="accordion-body collapse in">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p> -->
                                    <!-- </div>/accordion-inner -->
                                <!-- </div>/collapse -->
                            <!-- </div>/accordion-group -->
                            <!-- <br> -->

                            <!-- <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                                        {{ trans('adminlte_lang::message.retina') }}
                                    </a>
                                </div>
                                <div id="collapseTwo" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div> --><!-- /accordion-inner -->
                                <!-- </div>/collapse -->
                            <!-- </div>/accordion-group -->
                            <!-- <br> -->

                            <!-- <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                                        {{ trans('adminlte_lang::message.support') }}
                                    </a>
                                </div>
                                <div id="collapseThree" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div> --><!-- /accordion-inner -->
                                <!-- </div>/collapse -->
                            <!-- </div>/accordion-group -->
                            <!-- <br> -->

                            <!-- <div class="accordion-group">
                                <div class="accordion-heading">
                                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
                                        {{ trans('adminlte_lang::message.responsive') }}
                                    </a>
                                </div>
                                <div id="collapseFour" class="accordion-body collapse">
                                    <div class="accordion-inner">
                                        <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    </div> --><!-- /accordion-inner -->
                                <!-- </div>/collapse -->
                            <!-- </div>/accordion-group -->
                            <!-- <br> -->
                        <!-- </div>Accordion -->
                    <!-- </div> -->
                <!-- </div> -->
            <!-- </div>/ .container  -->
        <!-- </div> --><!--/ #features -->
    <!-- </section> -->

    <!-- <section id="showcase" name="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered">{{ trans('adminlte_lang::message.screenshots') }}</h1>
                <br>
                <div class="col-lg-8 col-lg-offset-2">
                    <div id="carousel-example-generic" class="carousel slide"> -->
                        <!-- Indicators -->
                        <!-- <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        </ol> -->

                        <!-- Wrapper for slides -->
                        <!-- <div class="carousel-inner">
                            <div class="item active">
                                <img src="{{ asset('/img/item-01.png') }}" alt="">
                            </div>
                            <div class="item">
                                <img src="{{ asset('/img/item-02.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <br>
            <br> -->
        <!-- </div> --><!-- /container -->
    <!-- </section> -->

    <!-- <section id="contact" name="contact">
        <div id="footerwrap">
            <div class="container">
                <div class="col-lg-5">
                    <center><h3><u>{{ trans('adminlte_lang::message.address') }}</u></h3>
                    <p>
                        Av. Greenville 987,<br/>
                        New York,<br/>
                        90873<br/>
                        United States
                    </p></center>
                </div> -->

                <!-- <div class="col-lg-7">
                    <center><h3><u>{{ trans('adminlte_lang::message.dropus') }}</u></h3>
                    <br>
                    <form role="form" action="#" method="post" enctype="plain">
                        <div class="form-group">
                            <label for="name1">{{ trans('adminlte_lang::message.yourname') }}</label>
                            <input type="name" name="Name" class="form-control" id="name1" placeholder="{{ trans('adminlte_lang::message.yourname') }}">
                        </div>
                        <div class="form-group">
                            <label for="email1">{{ trans('adminlte_lang::message.emailaddress') }}</label>
                            <input type="email" name="Mail" class="form-control" id="email1" placeholder="{{ trans('adminlte_lang::message.enteremail') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('adminlte_lang::message.yourtext') }}</label>
                            <textarea class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-large btn-success">{{ trans('adminlte_lang::message.submit') }}</button>
                    </form>
                </div></center>
            </div>
        </div>
    </section> -->
    <footer>
        <div id="c">
            <div class="container">
                <p>
                    <!-- <a href="https://github.com/acacha/adminlte-laravel"></a><b>admin-lte-laravel</b></a>. {{ trans('adminlte_lang::message.descriptionpackage') }}.<br/> -->
                    <center><strong><span style="color: white;">Copyright &copy; Pintas.Asia 2017</span></strong></center> <!-- <a href="http://acacha.org">Acacha.org</a>.</strong> {{ trans('adminlte_lang::message.createdby') }} <a href="http://acacha.org/sergitur">Sergi Tur Badenas</a>. {{ trans('adminlte_lang::message.seecode') }} <a href="https://github.com/acacha/adminlte-laravel">Github</a>
                    <br/>
                    AdminLTE {{ trans('adminlte_lang::message.createdby') }} Abdullah Almsaeed <a href="https://almsaeedstudio.com/">almsaeedstudio.com</a>
                    <br/>
                    Pratt Landing Page PROVA {{ trans('adminlte_lang::message.createdby') }} <a href="http://www.blacktie.co">BLACKTIE.CO</a> -->
                </p>

            </div>
        </div>
    </footer>

</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ url (mix('/js/app-landing.js')) }}"></script>
<script>
    $('.carousel').carousel({
        interval: 3500
    })
</script>
</body>
</html>
