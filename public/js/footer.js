

$(document).ready(function(){
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });

    $('.dropdown-toggle').click(function(){

         $('.dropdown-menu').attr('x-placement','');


    })

$('.send').click(function(){

   let name=$('#name').val();
   let email=$('#email').val();
   let message=$('#message').val();

   $("#form-messages").html("");
 $.ajax({
    url:url+'/sendmail',
    type:'post',
    dataType:'json',
    data:{
        name:name,message:message,email:email
    },
    success:function(d){
       if(d.success==true){
            $("#form-messages").css({"color":"green"});
            $("#form-messages").html(d.message);
        }
        else{
            $("#form-messages").css({"color":"red"});
              if(d.message.email!==undefined)
                $("#form-messages").html(d.message.email[0]);
              if(d.message.name!==undefined)
                $("#form-messages").html(d.message.name[0]);
              if(d.message.message!==undefined)
                $("#form-messages").html(d.message.message[0]);  
        }



        if(d.success==true)
           $("#form-messages").css({"color":"green"});
        else
            $("#form-messages").css({"color":"red"});

        $("#form-messages").html(d.message);
    }
 })

});


   $('#subscribe_btn').click(function(){

       let email=$('#mc-email').val();
  
       $.ajax({
           url:url+'/subscribe',
           type:'post',
           dataType:'json',
           data:{
             email:email
           },
           success:function(d){
         
              if(d.success==true){
                 $("#subscribe-result").css({"color":"green"});
                 $("#subscribe-result").html(d.message);
              }
              else{
                  $("#subscribe-result").css({"color":"red"});
                  $("#subscribe-result").html(d.message.email[0]);
              }
            }
        })
   })

$('.cv_send').click(function(){

   let email=$('#cv_email').val();
   let pass=$('#cv_pass1').val();
   let pass_conf=$('#cv_pass2').val();
   let agree=$('#Iagree').prop('checked');
 
    
    
 $.ajax({
    url:url+'/cv_register',
    type:'post',
    dataType:'JSON',
    data:{
        pass:pass,pass_conf:pass_conf,email:email,agree:agree
    },
    success:function(d){
        if(d.success==true){
           $("#cv_error_text1").css('color','green');
           $("#cv_error_text1").html(d.message);
        }
        else{
           let str="";
           for (const property in d.message){
              str+=d.message[property][0]+"<br>";
              console.log(d.message[property][0]);
           }
           $("#cv_error_text1").css('color','red');
           $("#cv_error_text1").html(str);
        }
    }
   
 })
})

$('.forg_next').click(function(){
   let email=$('#cv_email_login_forgot').val();
   $.ajax({
    url:url+'cv/forgot.php',
    type:'post',
    dataType:'JSON',
    data:{
        email:email
    },
    success:function(d){
        //console.log(d);
       if(d.success==true)$("#cv_error_text2_forgot").css('color','green');
       else  $("#cv_error_text2_forgot").css('color','red');

      $("#cv_error_text2_forgot").html(d.message);
    }
  }) 


})
                    



$('.cv_login').click(function(){

   let email=$('#cv_email_login').val();
   let pass=$('#cv_pass_login').val();

 $("#cv_error_text2").css('color','blue');
     
    $.ajax({
       url:url+'/cv_login',
       type:'post',
       dataType:'JSON',
       data:{
          pass:pass,email:email
       },
       success:function(d){
      
         if(d.success==true){
         window.location.href = url+"/create";
          $("#cv_error_text2").html(d.message);
        }
        else{
           let str="";
           for (const property in d.message){
              str+=d.message[property][0]+"<br>";
           }
           $("#cv_error_text2").css('color','red');
           $("#cv_error_text2").html(str);
        }
     
      
      }
    })

})




})
 