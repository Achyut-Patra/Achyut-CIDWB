$(document).ready(function(){
	$(document).on("click", ".link_ext", function(e){
		e.preventDefault();
		var ext_link= $(this).attr('href');
		//alert(ext_link);
		$(".ext_link_go").attr('href',ext_link);
	});

	$(document).on("click", ".ext_link_go", function(){
		$('#ext_link').modal('toggle');
	});
});	