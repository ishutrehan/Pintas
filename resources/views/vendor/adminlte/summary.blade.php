@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
<style type="text/css">
      .cus-table, .table {
            margin-bottom: 0px !important;
      }
</style>
	 <div class="container">
    	<div class="row">
       		<div class="col-md-11 col-md-offset-0">
	            <div class="panel panel-primary">
	                <div class="panel-heading" style="text-align: center">IPHALL</div>
	                <div class="panel-body">
                        <div class="row">        
                              <?php
                                    $uni_arr = array_unique($arr);
                              ?>  
                        	<div class="col-md-12">
                        	<h3>SUMMARY OF SELECTED SERVICES</h3>
                        	<div class="table-responsive">
                              <form method="get" action="{{ URL::to('portal') }}">
                                    <?php
                                    $last = "";
                                    foreach ($uni_arr as $ukey => $uval) {
                                          $data = "";
                                          $total = 0;
                                          foreach ($arr as $akey => $aval) {
                                                if($uval == $aval) {
                                                      $category = $summary_data['category'][$akey][0];
                                                      $life = $summary_data['life'][$akey][0];
                                                      $service = implode(',',$summary_data['service'][$akey]);
                                                      $sub_service = $summary_data['servicesub'][$akey][0];
                                                      $data .= "<tr><td>1</td><td>".$category.'-'.$life.'-'.$service.'-'.$sub_service."</td><td>0</td><td>".($summary_data['price'][$akey][0] ?? 0)."</td><td>20</td><td>".($summary_data['price'][$akey][0] ? $summary_data['price'][$akey][0] + 20 : 0)."</td></tr>";
                                                      $total += ($summary_data['price'][$akey][0] ? $summary_data['price'][$akey][0] + 20 : 0);     
                                                }
                                          }
                                          $tbl1 = "<label><b>".$uval."</b></label><table class='table table-bordered cus-table' style='margin-bottom: 0px'><thead><tr><th>No</th><th>Service</th><th>Official fee</th><th>Professional fee</th><th>Disbursements</th><th>Sub total</th></tr></thead><tbody>";
                                          $tbl2 = "</tbody></table><label class='pull-right'>Total: ".$total."</label><br><br>";
                                          echo $tbl1.$data.$tbl2;

                                    }
                                    ?>
                                   


                              	<!--< table border="1px" class="table">
                              	<thead>
                              	<tr>
      	                        	<th class="col-sm-1">No.</th>
      	                        	<th class="col-sm-3">Services</th>
      	                        	<th class="col-sm-2">Countries</th>
      	                        	<th class="col-sm-2">Remarks</th>
      	                        	<th class="col-sm-2">Charges</th>
      	                        	<th class="col-sm-2">Select Yes/No</th>
      	                        </tr>	
                              	</thead>
                              		<?php
                              		foreach ($summary_data['category'] as $key => $value) { ?>
                              			<tr>
                              				<td colspan="6">Service <?=$key ?></td>
      		                        		<tr>
      		                        		<td class="col-sm-1">1</td>
                              		 		  <td class="col-sm-3"><?=$value[0]; ?> : <?= implode(',',$summary_data['life'][$key]) ?> : <?= implode(',',$summary_data['service'][$key]) ?> : 

                              		 		  <?php if(isset($summary_data['servicesub'][$key])) {
                                                                  echo implode(',',$summary_data['servicesub'][$key]);
                                                            } ?></td>
                              		 		  <td class="col-sm-2"><?= implode(',',$summary_data['country'][$key]) ?></td>
                              		 		  <td class="col-sm-2"></td>
                              		 		  <td class="col-sm-2">$<?= $summary_data['price'][$key][0]; ?></td>
                              		 		  <td class="col-sm-2">
                              		 		  	<input type="checkbox" name="check[<?=$key; ?>]" value="yes" checked="checked">
                              		 		  </td>                        		 
      		                        		</tr>
        	 	                     		</tr>               		 	
                              		<?php } ?>          		              
                              	</table> -->
                              
                        	     <div class="row">
				            	<div class="col-md-12 text-center">
						            <button type="submit" class="btn btn-success">Proceed</button>
                                                &nbsp;&nbsp;&nbsp;&nbsp;
      		                              <button type="submit" class="btn btn-success" value="reset" id="reset">Contact Us</button>
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