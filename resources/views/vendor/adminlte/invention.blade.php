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
                               <form class="form-inline">
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label">Title of Invention :  </label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label">Field of Invention : </label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                </div>

                                 <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label">Brief Description
of Invention :</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                </div>

                                  <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label" >Known Prior arts :</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                </div>


                                  <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label">Advantages over prior art :</label>
                                  <div class="col-sm-3">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                  </div>

                                    <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label">Upload relevant files :</label>
                                  <div class="col-sm-3">
                                    <input type="file" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                  </div>



                                </form>
                                </div>

                               </div>


                        
                        	
                        	<div class="row">
				            	<div class="col-md-12 text-center">
						            <button type="submit" class="btn btn-success ">
		                                Next
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