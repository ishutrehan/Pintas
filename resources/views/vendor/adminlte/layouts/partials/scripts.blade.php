<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->

<!-- css -->
<link href="{{ asset('css/select2.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">


<!-- js -->
<script src="{{ url (mix('/js/app.js')) }}" type="text/javascript"></script>

<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/"></script> -->
<script src="{{ asset('js/select2.min.js') }}"></script>
<!-- <script src="{{ asset('js/jquery.min.js') }}"></script> -->
<!-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> -->

<!-- <script type="text/javascript">
	$("#category").select2({
		placeholder:'Select category',
		allowClear:true});
</script> -->


<script type="text/javascript">
$(document).ready(function() {
	$(document).on('change', ".category", function(event) {
		$(this).parents('.col-md-12').find('.cycle').val('');
	});

	$(document).on('change', ".cycle", function(event) {
		event.preventDefault();
		var that = this;
		var cycle_id =  $(this).find('option:selected').attr('data-id');
		var cate_id =  $(this).parents('.col-md-12').find('.category').find('option:selected').attr('data-id');
		if(typeof cate_id != 'undefined' && typeof cycle_id != 'undefined') {
			$.ajax({
				url: '/pintasa/public/getService',
				type: 'POST',
				dataType: 'json',
				data:{'_token': '<?php echo csrf_token() ?>', 'cate_id': cate_id, 'cycle_id': cycle_id},
			})
			.done(function(data) {
				if(data && data.length){
					var html = "";
					for(var key in data){
						html += "<option value='"+data[key].ser_name+"'>"+data[key].ser_name+"</option>";
					}
				}else{
					var html = "<option value='None'>None</option>";
				}
				$(that).parents('.col-md-12').find('.service').html(html)
				$(".input_fields_wrap .service").select2({
					placeholder:'Select service',
					allowClear:true});
			})
			.fail(function() {
				console.log("error");
			});		
		}
		
	});
	

	$(document).on('click','#reset', function(){
		$('.input_fields_clone').html("");
		$('.category').val('');
	    $('.cycle').val('');
	    $(".input_fields_wrap .service").select2("val", "");
	    $('.servicesub').val('');
	    $('.country').val('');
	    $(".input_fields_wrap .service").select2({
		placeholder:'Select service',
		allowClear:true});
		x = 1; 
	})

	var html = $(".input_fields_wrap").html();

	$(".input_fields_wrap .service").select2({
		placeholder:'Select service',
		allowClear:true});

	$(".input_fields_clone .service").select2({
			placeholder:'Select service',
			allowClear:true});
	
	// $(".input_fields_wrap .country").select2({
	// 	placeholder:'Select country',
	// 	allowClear:true});
	// $(".input_fields_wrap .cycle").select2({
	// 	placeholder:'Select life cycle',
	// 	allowClear:true});	
	// $(".input_fields_wrap .servicesub").select2({
	// 	placeholder:'Select Sub Service',
	// 	allowClear:true});


    var max_fields      = 10;
    var wrapper         = $(".input_fields_wrap"); 
    var wrapper_clone   = $(".input_fields_clone");
    var add_button      = $(".add_field_button");
    
    var x = 1;
    if($(".input_fields_clone").children().length) {
    	x = $(".input_fields_clone .row").length + 1;
    } 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper_clone).append(html);
            var lst = $(wrapper_clone).children().last();
            $(lst).find('.fixlabel').html(x)
            $(lst).find('#category').attr('name', 'category['+x+'][]');
            $(lst).find('#cycle').attr('name', 'life['+x+'][]');
            $(lst).find('#service').attr('name', 'service['+x+'][]');
            $(lst).find('#servicesub').attr('name', 'servicesub['+x+'][]');
            $(lst).find('#country').attr('name', 'country['+x+'][]');
            // clear
            $(lst).find('#category').val('')
            $(lst).find('#cycle').val('')
            $(lst).find('#service').val('')
            $(lst).find('#servicesub').val('')
            $(lst).find('#country').val('')
        }

        
		$(".input_fields_clone .service").select2({
			placeholder:'Select service',
			allowClear:true});	
		// $(".input_fields_clone .cycle").select2({
		// 	placeholder:'Select life cycle',
		// 	allowClear:true
		// });
		// $(".input_fields_clone .country").select2({
		// 	placeholder:'Select country',
		// 	allowClear:true});
		// $(".input_fields_clone .servicesub").select2({
		// 	placeholder:'Select Sub Service',
		// 	allowClear:true});
	         

    });
    
	// 
    var html2 = $(".input_fields_wrap2").html();
    

    var max_fields2      = 10;
    var wrapper         = $(".input_fields_wrap2"); 
    var wrapper_clone2   = $(".input_fields_clone2");
    var add_button2      = $("#applicant");
    
    var x2 = 1; 
    $(add_button2).click(function(e){ 
        e.preventDefault();
        if(x2 < max_fields2){ 
            x2++; 
            $(wrapper_clone2).append(html2);
        }  
    });
	
});



window.onpageshow = function(event) {
    if (event.persisted) {
        window.location.reload(); 
    }
};

</script>


