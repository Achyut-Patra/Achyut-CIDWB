$(document).ready(function(){
	 $(".org_elem_details").click(function(){
    	var attr = $(this).attr('id');
    	//alert(attr);
    	$('.ajax_load').html('<div style="text-align:center;"><img src="cid_loader.gif" /></div>');
	    var url = 'organisation/organisation_cidwb/cid_officer_details/' + attr;
	    if( attr!=''){
	    	$.ajax({
	        	url: url,
	        	success: function(result){
		        	$(".ajax_load").html(result);
		    	}
		    });
	    }
	});
});