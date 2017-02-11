var $g = jQuery.noConflict();

$g(document).ready(function(){

    $g('.senddd').click(function(){



        var prodid = $g("input[name='prodid']").val();
        var email = $g("input[name='email']").val();
        var userid = $g("input[name='userid']").val();
        var url = location.protocol+"//"+location.host+"/productavailability/product/subscribe";
            $g.ajax({
                type: "POST",
                url: url,
                dataType: "json",
                data: {prodid: prodid, email: email, userid: userid},

                success: function(data){

                    alert(data);
                },
                error:function(xhr, ajaxOptions, thrownError){
                    alert("Error query "+thrownError+" - "+ajaxOptions+" - "+xhr.statusText+" - "+xhr.responseText+" - "+xhr.status);
                }
            });
    });
});
