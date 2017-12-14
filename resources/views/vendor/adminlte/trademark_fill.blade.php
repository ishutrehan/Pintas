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
                          <h3>For TM filing</h3>

                          <div class="table-responsive">
                          <table border="1px" class="table">
                          <thead>
                          
                          </thead>
                          
                                                                   
                  
                          </table>
                          
                          </div>  

                            <div class="row">
                               <form method="get" action="{{ URL::to('payment') }}">
                        	{{ csrf_field() }}
                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">Total number of Classes :</label>
                                  <div class="col-sm-2">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="staticEmail" class="col-sm-6 col-form-label" style="text-align: right;">No. of TM designs :</label>
                                  <div class="col-sm-2">
                                    <input type="text" class="form-control-plaintext" id="staticEmail" value="">
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


                                </form>
                               </div>

                        	</div>
                        
                        </div>
	                	   
			        </div>    
				</div>
			</div>	
		</div>
	</div>
@endsection