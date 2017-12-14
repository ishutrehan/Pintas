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
                        	<form method="POST" action="{{ URL::to('portal') }}">
                        	{{ csrf_field() }}
                        	<div class="col-md-12">
                        	<h3>PORTAL FOR ONLINE IP FILING</h3>

                        	<div class="table-responsive">
                        	<table border="1px" class="table">
                        	<thead>
                        	
                        	</thead>
                        	
                        		  <?php
                                          echo "<pre>";
                                          print_r($value);
                                          die;
                                      ?>               		
                        		 	                		 		                		 
		              
                        	</table>
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

                        	</div>
                        	</form>
                        </div>
	                	   
			        </div>    
				</div>
			</div>	
		</div>
	</div>
@endsection