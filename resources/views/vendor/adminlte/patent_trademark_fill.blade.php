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
            
            <div class="col-md-12">
              <h3>Filing Information</h3>
              <div class="row">              <div class="col-sm-2 pull-right">
                <button type="submit" class="btn btn-primary" id="applicant">Add Applicant</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
              <div class="loop_add">
                <form method="get" action="{{ URL::to('payment') }}">
                  {{ csrf_field() }}
                  <div class="input_fields_wrap2">
                    <div class="row col-md-12">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">No. of Applicants: </label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">Applicant First name :</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;"> Middle Name :</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;"> Last name :</label>
                        <div class="col-sm-2">
                          <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">Address of currespondence :</label>
                        <div class="col-sm-3">
                          <textarea></textarea>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="input_fields_clone2">
                  </div>
                  <div class="row">
                    <div class="form-group row col-md-12">
                      <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">Assignee :</label>
                      <div class="col-sm-3">
                        <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                      </div>
                    </div>
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-success ">
                      Next
                      </button>&nbsp;&nbsp;&nbsp;&nbsp;
                      <button type="submit" class="btn btn-success " value="reset">
                      Contact Us
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              </div>
            </div>
            
            
            
          </div>
          
        </div>
        
      </div>
    </div>
  </div>
</div>
</div>
@endsection