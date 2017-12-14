@extends('adminlte::layouts.app')
@section('htmlheader_title')
{{ trans('adminlte_lang::message.home') }}
@endsection
@section('main-content')
<div class="container">
  <div class="row">
    <div class="col-md-11 col-md-offset-0">
      <div class="panel panel-primary">
        <div class="panel-heading" style="text-align: center">IPHALL</div>
        <div class="panel-body">
          <div class="row">
            <form method="POST">
              {{ csrf_field() }}
              <div class="col-md-12">
                <h3>Filing Information</h3>
                <div class="row">
                  <div class="loop_add">
                  <div class="col-md-12">
                    <form class="form-inline">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label">NAME :  </label>
                        <div class="col-sm-3">
                          <p>{{ Auth::user()->name }}</p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label">NO. OF SERVICES :</label>
                        <div class="col-sm-3">
                          <p><?= $seletd; ?></p>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label">TOTAL AMOUNT :</label>
                        <div class="col-sm-3">
                          <p>$ <?php
                            $tot = 0;
                            foreach ($value['price'] as $key => $value) {
                            $tot = $tot + $value[0];
                            }
                            echo $tot;
                          ?></p>
                        </div>
                      </div>
                      
                      
                    </div>
                    </div>
                    
                  </form>
                </div>
              </div>
              
              
              <div class="row">
                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-success ">
                  AGREE & PAY
                  </button>&nbsp;&nbsp;&nbsp;&nbsp;
                  <button type="submit" class="btn btn-success " value="reset">
                  Contact Us
                  </button>
                </div>
              </div>
              
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection