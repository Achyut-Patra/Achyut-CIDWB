$(document).ready(function(){
    $(document).on("click", ".list-inactive", function(e){  //alert("Hii");
     e.preventDefault();  
     //alert('at inactive');
     var attr = $(this).attr('href');
     var idval= $(this).attr('id');
     //var url = 'upload/activeinactive/'+ attr;
var url = 'activeinactive';
     //alert(url);
     var innertext="<a class='btn btn-info2 btn-sm list-active'  href='block/"+idval+"' id='"+idval+"' data-target='#'><i class='fa fa-toggle-on'></i>Active</a>";
     //alert(innertext);
        $.ajax({
        //url: url,
url: 'http://localhost/cidwb/public/activeinactive/'+idval+'/block',
        success: function(result){
//alert(result);
if(result=='done'){
                $('#span-'+idval).html(innertext);
}
      }
        });
    });

    $(document).on("click",".list-active", function(e){  //alert("Naba Hii99");
     e.preventDefault();
     //alert('at active');  
     var attr = $(this).attr('href');
     var idval= $(this).attr('id'); //alert(attr);
     //var url = 'admin/upload/edit/active_inactive/'+ attr;
     var url = 'activeinactive';
     //alert(url);
     var innertext="<a class='btn btn-default btn-sm list-inactive'  href='unblock/"+idval+"' id='"+idval+"' data-target='#'><i class='fa fa-toggle-off'></i>Inactive</a>";

        $.ajax({
            url: 'http://localhost/cidwb/public/activeinactive/'+idval+'/unblock',
            success: function(result){
//alert(result);
if(result=='done'){
                $('#span-'+idval).html(innertext);
}
           }
        });
    });    

    $(".delete_report").on("click", function(){
        $("#delete_report").modal();
        var attr = $(this).attr('href');
        $("#reason_submit").click(function(){
            var url = 'admin/upload/edit/ajax_list_delete/'+ attr;

                $.ajax({
                    url: url,
                    success: function(result){
                        $("#delete_report").modal('hide');
                        //window.location.reload(true);
                        
                        $('#tr_'+attr).hide();
                    }
                });//end of ajax
        });
    });

    
});
