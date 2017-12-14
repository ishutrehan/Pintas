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
	                	
	                		<?php
	                		$country2 = $category2 = $life = $servicesub2 = "";
	                		$service2 = array();
	                		$cnt = 0;
	                		$data = array();
	                		if ($usr_serv) {
	                			$data = unserialize($usr_serv->data);
	                			$cnt = count($data['country']);
	                			$country2 = $data['country'][1][0];
	                			$category2 = $data['category'][1][0];
	                			$life = $data['life'][1][0];
	                			$service2 = $data['service'][1];
	                			$servicesub2 = $data['servicesub'][1][0];
	                		}
	                		?>
                        <div class="row">
                        	<div class="col-cus">
                        		<input type="button" class="btn btn-success pull-right add_field_button cus-btnn" name="add_service" value="ADD SERVICE" id="add_service">
                        	</div>
                        </div>
	                	<form method="POST" action="{{ URL::to('service-summary') }}">
                        	{{ csrf_field() }}
	                        <div class="input_fields_wrap">
	                        	<div class="row col-md-12">
	                        	<label class="fixlabel">1</label>
	                        	<div class="col-md-2">
				                    <div class="form-group">
				                      	<label>Country</label><br>
				                      	<select class="form-control country" id="country" name="country[1][]" required="required">
											@foreach($cou as $country)
												@if($country2 == $country->cou_name)
													<option selected value="{{$country->cou_name}}">{{$country->cou_name}}</option>
												@else
													<option value="{{$country->cou_name}}">{{$country->cou_name}}</option>	
												@endif	
											@endforeach
				                        </select>
				                    </div>
				                </div>
	                        	<div class="col-md-2">
				                    <div class="form-group">
				                    	<label for="email" class="col-md-4 control-label">Category</label>
										<select class="form-control category" id="category" name="category[1][]" required="required">
					                        <option value="">Choose One</option>
					                        @foreach($cat as $category)
						                        @if($category2 == $category->cat_name)
													<option data-id="<?= $category->id; ?>" selected value="{{$category->cat_name}}">{{$category->cat_name}}</option>
												@else
													<option data-id="<?= $category->id; ?>" value="{{$category->cat_name}}">{{$category->cat_name}}</option>	
												@endif	
											@endforeach
					                    </select>
				                    </div>
				                </div>

				                <div class="col-md-2">
				                    <div class="form-group">
				                        <label>Life Cycle</label><br>
				                        <select class="form-control cycle" id="cycle" name="life[1][]" required="required">
				                        	<option value="">Select</option>
				                        	@foreach($cyc as $cycle)
				                        		@if($life == $cycle->cyc_name)
													<option data-id="<?= $cycle->id; ?>" selected value="{{$cycle->cyc_name}}">{{$cycle->cyc_name}}</option>
												@else
													<option data-id="<?= $cycle->id; ?>" value="{{$cycle->cyc_name}}">{{$cycle->cyc_name}}</option>	
												@endif												
											@endforeach
										</select>	
				                    </div>
				                </div>

				                <div class="col-md-3">
				                    <div class="form-group">
				                        <label>Service Type</label><br>
				                        <select class="form-control service" id="service" name="service[1][]" required="required" multiple="multiple">
				                        	@if(count( $service2))
												@foreach($ser as $service)
													@if(in_array($service->ser_name, $service2) )
														<option selected value="{{$service->ser_name}}">{{$service->ser_name}}</option>
													@else
														<option value="">None</option>
													@endif													
												@endforeach	
											@endif				                        	
				                        </select>
				                    </div>
				                </div>

				                <div class="col-md-2">
				                    <div class="form-group">
				                        <label>Sub Service Type</label><br>
				                        <select class="form-control servicesub" id="servicesub" name="servicesub[1][]">
											<option value="">Select</option>				                        	
											@foreach($typ as $servicesub)
												@if($servicesub2 == $servicesub->service_type)
													<option selected value="{{$servicesub->service_type}}">{{$servicesub->service_type}}</option>
												@else
													<option value="{{$servicesub->service_type}}">{{$servicesub->service_type}}</option>
												@endif											
											@endforeach
				                        </select>
				                    </div>
				                </div>
	                        </div>
	                        </div>
	                        <div class="input_fields_clone">
	                        	<?php
	                        	if ($usr_serv && $cnt > 1) { 
	                        		$inx = 1;
	                        		foreach ($data['country'] as $key => $value) { 
	                        			if($key != 1) {
		                        			$country2 = $data['country'][$key][0];
				                			$category2 = $data['category'][$key][0];
				                			$life = $data['life'][$key][0];
				                			$service2 = implode(',', $data['service'][$key]);
				                			$servicesub2 = $data['servicesub'][$key][0];
	                        			?>
	                        			<!-- on back btn -->
	                        			<div class="row col-md-12">
				                        	<label class="fixlabel"><?=$inx; ?></label>
				                        	<div class="col-md-2">
							                    <div class="form-group">
							                      	<label>Country</label><br>
							                      	<select class="form-control country" id="country" name="country[<?=$inx; ?>][]" required="required">
														@foreach($cou as $country)
															@if($country2 == $country->cou_name)
																<option selected value="{{$country->cou_name}}">{{$country->cou_name}}</option>
															@else
																<option value="{{$country->cou_name}}">{{$country->cou_name}}</option>	
															@endif	
														@endforeach
							                        </select>
							                    </div>
							                </div>
				                        	<div class="col-md-2">
							                    <div class="form-group">
							                    	<label for="email" class="col-md-4 control-label">Category</label>
													<select class="form-control category" id="category" name="category[<?=$inx; ?>][]" required="required">
								                        <option value="">Choose One</option>
								                        @foreach($cat as $category)
									                        @if($category2 == $category->cat_name)
																<option selected value="{{$category->cat_name}}">{{$category->cat_name}}</option>
															@else
																<option value="{{$category->cat_name}}">{{$category->cat_name}}</option>	
															@endif	
														@endforeach
								                    </select>
							                    </div>
							                </div>

							                <div class="col-md-2">
							                    <div class="form-group">
							                        <label>Life Cycle</label><br>
							                        <select class="form-control cycle" id="cycle" name="life[<?=$inx; ?>][]" required="required">
							                        	@foreach($cyc as $cycle)
							                        		@if($life == $cycle->cyc_name)
																<option selected value="{{$cycle->cyc_name}}">{{$cycle->cyc_name}}</option>
															@else
																<option value="{{$cycle->cyc_name}}">{{$cycle->cyc_name}}</option>	
															@endif												
														@endforeach
													</select>	
							                    </div>
							                </div>

							                <div class="col-md-3">
							                    <div class="form-group">
							                        <label>Service Type</label><br>
							                        <select class="form-control service" id="service" name="service[<?=$inx; ?>][]" required="required" multiple="multiple">
														@foreach($ser as $service)
															@if(in_array($service->ser_name, $data['service'][$key]) )
																<option selected value="{{$service->ser_name}}">{{$service->ser_name}}</option>
															@endif													
														@endforeach
							                        </select>
							                    </div>
							                </div>

							                <div class="col-md-2">
							                    <div class="form-group">
							                        <label>Sub Service Type</label><br>
							                        <select class="form-control servicesub" id="servicesub" name="servicesub[<?=$inx; ?>][]">
														<option value="">Select</option>				                        	
														@foreach($typ as $servicesub)
															@if($servicesub2 == $servicesub->service_type)
																<option selected value="{{$servicesub->service_type}}">{{$servicesub->service_type}}</option>
															@else
																<option value="{{$servicesub->service_type}}">{{$servicesub->service_type}}</option>
															@endif											
														@endforeach
							                        </select>
							                    </div>
							                </div>
				                        </div>		
	                        		<?php }
	                        		$inx++;
	                        		}
	                        	}
	                        	?>
	                        </div>	
				            <div class="row">
				            	<div class="col-md-12 text-center">
						            <button type="submit" class="btn btn-success ">
		                                NEXT
		                            </button>&nbsp;&nbsp;&nbsp;&nbsp;
		                            <button type="button" class="btn btn-success " value="reset" id="reset">
		                                RESET
		                            </button>
	                            </div>
				            </div>
				        </form>    
			        </div>    
				</div>
			</div>	
		</div>
	</div>
@endsection