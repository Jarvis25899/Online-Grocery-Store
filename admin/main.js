$(document).ready(function() {
$("#admin_login").click(function(event){
    event.preventDefault();
    var username=$("#username").val();
    var password=$("#password").val();
    $.ajax({
        url : "adminlogin.php",
        method : "POST",
        data : {admin_login:1,admin_username:username,admin_password:password},
        success : function(data){
            if(data=="sgd"){
                window.location.href="index.php";
            }
        }
    })
})
$("#insert_button").click(function(event){
        event.preventDefault();
        $.ajax({
            url : "insert_i.php",
            method : "POST",
            data : $("form").serialize(),
            success : function(data){
                $("#insert_msg1").html(data);
            }
        })
    })
    $("#insert_cat").click(function(event){
        event.preventDefault();
        $.ajax({
            url : "insert_c.php",
            method : "POST",
            data : $("form").serialize(),
            success : function(data){
                console.log(data)
                $("#insert_msg2").html(data);
            }
        })
    })
    
    $("#delete_button").click(function(event){
        event.preventDefault();
        $.ajax({
            url : "delete_i.php",
            method : "POST",
            data : $("form").serialize(),
            success : function(data){
                $("#delete_msg1").html(data);
            }
        })
    })
    $("#delete_category").click(function(event){
        event.preventDefault();
        $.ajax({
            url : "delete_c.php",
            method : "POST",
            data : $("form").serialize(),
            success : function(data){
                $("#delete_msg2").html(data);
            }
        })
    })
    
    $("#update_button").click(function(event){
        event.preventDefault();
        $.ajax({
            url : "update.php",
            method : "POST",
            data : $("form").serialize(),
            success : function(data){
                $("#update_msg").html(data);
            }
        })
    })
})
