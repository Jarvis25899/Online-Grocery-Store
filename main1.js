$(document).ready(function(){
    cat();
    get_cart()
    mini_item()
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
function get_cart(){
    $.ajax({        
        url:"action.php",
        method:"POST",
        data:{get_cart_item:1},
        success:function(data){
            $("#get_cart_item").html(data)
        }
    })
}
function mini_item(){
    $.ajax({        
        url:"action.php",
        method:"POST",
        data:{get_mini_item:1},
        success:function(data){
            $("#get_mini_item").html(data)
        }
    })
}
    $("#email_sub").click(function(event){
        event.preventDefault();
        var email=document.getElementById('email').value;
        if(email != 'Email'){
        $.ajax({
            url:"verify.php",
            method:"POST",
            data:{email_id:1,email:email},
            success:function(data){
                if(data='Message has been sent.'){
                document.getElementById('email_sub').value='succeed!';
                document.getElementById('email_sub').style.color = 'black';
                }
            }
        })
    }
})

$("#login_id").click(function(event){
        event.preventDefault();
        var email=$("#email").val()
        var password=$("#password").val()
        $.ajax({
            url:"login_db.php",
            method:"POST",
            data:{userlogin:1,email:email,password:password},
            success:function(data){
                if(data=="true"){
                    window.location.href="profile.php"
                }
            }
        })
    })
$("#register").click(function(event){
    event.preventDefault();
    var username=$("#username").val()
    var password_reg=$("#password_reg").val()
    var email_reg=$("#email_reg").val()
    var phone=$("#phone").val()
    $.ajax({
            url:"login_db.php",
            method:"POST",
            data:{userregister:1,username:username,email:email_reg,password:password_reg,phone:phone},
            success:function(data){
                console.log(data);
                if(data=="true"){
                    window.location.href="profile.php"
                }
                if(data=="passfail"){
                    alert("Enter pass length 10")
                }
                if(data=="emailfail"){
                    alert("Enter proper email")
                }
            }
        })
})

$("body").delegate("#add_to_cart","click",function(event){
    var p_id=$(this).attr('pid');
    var u_id='<?php echo $session_value;?>';
    $.ajax({
        url:"action.php",
        method:"POST",
        data:{cart:1,p_id:p_id},
        success:function(data){
            console.log(data)
        }
    })
})
$("body").delegate("#cart_mini_minus","click",function(event){
    event.preventDefault();
    var p_id=$(this).attr('pid')
    $.ajax({
        url:"action.php",
        method:"POST",
        data:{update_item:1,minus:1,p_id:p_id},
        success:function(data){
            get_cart()
            mini_item()
        }
    })
})
$("body").delegate("#cart_mini_plus","click",function(event){
    event.preventDefault()
    var p_id=$(this).attr('pid')
    $.ajax({
        url:"action.php",
        method:"POST",
        data:{update_item:1,plus:1,p_id:p_id},
        success:function(data){
            get_cart()
            mini_item()
        }
    })
})
$("body").delegate("#cart_mini_remove","click",function(event){
    var p_id=$(this).attr('pid')
    console.log(p_id)
    $.ajax({
        url:"action.php",
        method:"POST",
        data:{remove_item:1,p_id:p_id},
        success:function(data){
            get_cart()
            mini_item()
        }
    })
})

payment()
    function payment(){
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{payment:1},
            success:function(data){
                $("#get_payment").html(data)
            } 
        })
    }
})