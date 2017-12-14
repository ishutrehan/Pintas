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
	                	<form method="POST" action="">
                        {{ csrf_field() }}
						    <table class="table table-hover table-dark">
						    	<tr>
							      	<th>No</th>
							      	<th>Category</th>
							      	<th>Life Cycle</th>
							      	<th>Service Type</th>
							      	<th>Country</th>
							      	<th>Action</th>
						    	</tr>
								
							</table>
	  					</form>	
	  				</div>
	  			</div>
	  		</div>
	  	</div>				
	</div>	
</div>	
@endsection

