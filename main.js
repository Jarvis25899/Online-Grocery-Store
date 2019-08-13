$(document).ready(function(){
    console.log('kl')
    cat();
    get_hot_product();
	product();
	function cat(){
	$.ajax({		
		url:"action.php",
		method:"POST",
		data:{category:1},
		success:function(data){
			$("#get_category").html(data)
		}
	})
}
    function get_hot_product(){
    $.ajax({       
        url:"action.php",
        method:"POST",
        data:{hot_product:1},
        success:function(data){
            $("#get_hot_product").html(data)
        }
    })
}
	function product(){
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{product:1},
			success:function(data){
				$("#get_product").html(data)
			}
		})
	}
	$("body").delegate(".category","click",function(event){
		event.preventDefault();
		var cid=$(this).attr('cid');
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{get_select_category:1,cat_id:cid},
			success:function(data){
				$("#get_product").html(data)
			}
		})
	})
	$("body").delegate(".brand","click",function(event){
		event.preventDefault();
		var bid=$(this).attr('bid');
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{get_select_brand:1,brand_id:bid},
			success:function(data){
				$("#get_product").html(data)
			}
		})
	})

	$("#serach_btn").click(function(event){
		var keywords=$('#search').val();
		if(keywords!=""){
		$.ajax({
			url:"action.php",
			method:"POST",
			data:{search:1,keywords:keywords},
			success:function(data){
				$("#get_product").html(data)
			}
		})
	}
	})

	$("#verify_btn").click(function(event){
        event.preventDefault()
        $.ajax({
            url:"verify_mail.php",
            method:"POST",
            data:$("form").serialize(),
            success:function(data){
                $("#signup_mes").html(data)
            }
        })
	})
    
    $("#signup_btn").click(function(event){
        event.preventDefault()
		$.ajax({
			url:"register.php",
			method:"POST",
			data:$("form").serialize(),
			success:function(data){
				$("#signup_mes").html(data)
			}
		})
	})

	$("#login").click(function(event){
		event.preventDefault();
		var email=$("#email").val()
		var password=$("#password").val()
		$.ajax({
			url:"login.php",
			method:"POST",
			data:{userlogin:1,email:email,password:password},
			success:function(data){
				if(data=="true"){
					window.location.href="profile.php"
				}
			}
		})
	})
	$("body").delegate("#add_to_cart","click",function(event){
		event.preventDefault();
        var p_id=$(this).attr('pid');
		$.ajax({
            url:"action.php",
            method:"POST",
            data:{add_product:1,pro_id:p_id},
            success:function(data){
                $("#product_msg").html(data)
            }
        })
        cart_no();
	})
    
     $("#cart_data").click(function(event){
        event.preventDefault();
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_card_data:1},
            success:function(data){
                $("#get_cart").html(data)
            }
        })
    })
    cart_checkout();
    function cart_checkout(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{get_card_page_no:1},
            success:function(data){
                $("#get_cart_page").html(data)
            }
        })
    }
    
    $("body").delegate(".qty","keyup",function(event){
        var pid=$(this).attr("pid");
        var qty=$("#qty-"+pid).val();
        var price=$("#price-"+pid).val();
        var total=qty*price;
        $("#total-"+pid).val(total);
    })
    
     $("body").delegate(".remove","click",function(event){
         var pid=$(this).attr("remove_id")
         $.ajax({
            url:"action.php",
            method:"POST",
            data:{remove_cart_irem:1,remove_id:pid},
            success:function(data){
                $("#cart_mes_update").html(data)
            }  
        })
         cart_checkout();
     })
    
     $("body").delegate(".add","click",function(event){
        var pid=$(this).attr("add_id");
        var qty=$("#qty-"+pid).val();
        var total=$("#total-"+pid).val();
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{add_cart_irem:1,add_id:pid,qty:qty,total:total},
            success:function(data){
                $("#cart_mes_update").html(data)
            }
        })
         cart_checkout();
     })
    
    page()
    function page(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{page:1},
            success:function(data){
                $("#pageno").html(data)
            } 
        })
    }
    $("body").delegate("#page","click",function(event){
        var pn=$(this).attr("page");
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{product:1,setPage:1,page_no:pn},
            success:function(data){
                $("#get_product").html(data)
            }
        })
    })
    
    cart_no()
    function cart_no(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{cart_no:1},
            success:function(data){
                $("#cart_product").html(data)
            } 
        })
    }
    payment()
    function payment(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{payment:1},
            success:function(data){
                $("#payment").html(data)
            } 
        })
    }
    
    
})