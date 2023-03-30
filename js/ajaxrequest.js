// Verify Email duplication
$(document).ready(function(){
    $("#stuemail").on("keypress blur",function(){
        var reg =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
        var stuemail = $("#stuemail").val();

        $.ajax({
            url:"Student/addStudent.php",
            method:"POST",
            data:{
                checkemail:"checkemail",
                stuemail:stuemail,
            } ,
            success:function(data){
                // console.log(data);
                if(data !=0){
                    $("#statusMsg2").html('<small style="color:red">E-mail already used!</small>');
                    $("#signup").attr("disabled",true);
                }else if(data ==0 && reg.test(stuemail)){
                    $("#statusMsg2").html('<small style="color:green">There you go!</small>');
                    $("#signup").attr("disabled",false);
                }else if(!reg.test(stuemail)){
                    $("#statusMsg2").html('<small style="color:red">Please Enter valid Email e.g. example@gmail.com!</small>');
                    $("#signup").attr("disabled",true);
                }
                if(stuname.trim() == ""){
                    $("#statusMsg1").html('<small style="color:red">Please Enter Name!</small>');
                    $("#signup").attr("disabled",true);
                   
                }
                
            }
        });
    });
});

//add and check student info
function addStu(){
    var reg =  /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    var stuname = $("#stuname").val();
    var stuemail = $("#stuemail").val();
    var stupass= $("#stupass").val();

    if(stuname.trim() == ""){
        $("#statusMsg1").html('<small style="color:red">Please Enter Name!</small>');
        $("#stuname").focus();
        return false;
    }else if(stuemail.trim() == ""){
        $("#statusMsg2").html('<small style="color:red">Please Enter Email!</small>');
        $("#stuemail").focus();
        return false;
    }else if(stuemail.trim() != "" && !reg.test(stuemail)){
        $("#statusMsg2").html('<small style="color:red">Please Enter valid Email e.g. example@gmail.com!</small>');
        $("#stuemail").focus();
    }else if(stupass.trim() == ""){
        $("#statusMsg3").html('<small style="color:red">Please Enter Password!</small>');
        $("#stupass").focus();
        return false;
    }else{
        $.ajax({
            url:'Student/addStudent.php',
            method:'POST',
            dataType:'json',
            data:{
                stusignup:"stusignup",
                stuname : stuname,
                stuemail: stuemail,
                stupass: stupass,
            },
            success: function(data){
                console.log(data);
                if(data == "OK"){
                    $('#succMsg').html('<span class="alert alert-success">Registration Successful!</span>');
                    clearStuRegFeild();
                }
                else if(data=="Failed"){
                    $('#succMsg').html('<span class="alert alert-danger">Unable to Register!</span>');
                }
            }
        });
    }

    
}

function clearStuRegFeild(){
    $("#stuRegForm").trigger("reset");
    $("#statusMsg1").html("");
    $("#statusMsg2").html("");
    $("#statusMsg3").html("");

}

// call for student login

function checkStuLogin(){
    var StuLogEmail = $('#StuLogemail').val();
    var StuLogPass = $('#StuLogpass').val();

    $.ajax({
        url: "Student/addStudent.php",
        method: "POST",
        data:{
            checkLogemail:"checklogmail",
            stuLogEmail:StuLogEmail,
            stuLogPass:StuLogPass,
        },
        success: function(data){
            if(data == 0){
                $("#statusLogMsg").html('<small class="alert alert-danger">Invalid Email ID or Password!</small>');
            }
            else if(data == 1){
                $("#statusLogMsg").html('<div class="spinner-border text-success" role="status"></div>');
                setTimeout(()=>{
                    window.location.href = "index.php";
                },1000
                
                );
            }
        }
    })
}