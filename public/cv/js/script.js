$(document).ready(function(){

$.ajaxSetup({
     headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
     }
});
let del_img=url+'/cv/images/delete.png'
let edit_img=url+"/cv/images/edit.png";

$('.setlang').change(function(){
  let lang=$(this).val();
  window.location.href = '/locale/'+lang;
})
$(".arrow1").click(function() {
  $(".add-sk").toggle( "slow" );
});
$(".arrow2").click(function(){
  $(".add-edu").toggle("slow");
});
$(".arrow3").click(function(){
  $(".add-leng").toggle("slow");
});
$(".arrow4").click(function(){
  $(".add-ex").toggle("slow");
});
$(".arrow5").click(function(){
  $(".cont-hide").toggle("slow");
});
$(".arrow6").click(function(){
  $(".conn-block").toggle("slow");
});
$( ".add-sk" ).click(function() {
  $( ".skill-body" ).css("display","flex");
});

$(document).on('click', "#save-skill",function() {

   $( ".skill-body" ).css("display","none");
   $(".skill-method").css("display","flex");
   let skillId=$('.skillinput').val();
   let skillname=$( ".skillinput option:selected" ).text();
   let skillRange=$('#skill_percent').val()
   
   $.ajax({
        url:url+'/add_skill',
        type:'post',
        data:{skillId,skillRange},
        success:function(id){
          if(id!=0){
            $('#ready_skills').append(`<div class="skill-method" id=${id} >
        <div class="skill-left" id=4>
          <div>
            <label class="skill-name" >${skillname}</label>
            <label class="slider_value">${skillRange}%</label>
          </div>
          <div class="skill-input">
            <input type="range" class="pracent gdas-range" disabled>
          </div>
        </div>
        <div class="skill-right">
          <div>
            <img class="delete-range" src="${del_img}">
            <img class="edit-range" src="${edit_img}">
          </div>
        </div>
      </div> `);
      //       .on('click',".edit-range",function(){

      //      $(this).prev().addClass( "update-range");
      //      $(this).prev().attr("src","cv/images/checked.png");
      //      $(this).parents(".skill-method").find(".pracent").removeAttr('disabled');
      // });
       }
      }
  });

});
$( "#cancel_skill" ).click(function() {
  $( ".skill-body" ).css("display","none");
  $(".skill-method").css("display","flex");
});

///language
$(document).on('click','.add-leng',function() {

  $( ".lang-body" ).css("display","flex");
  $('#save-lang').removeClass('edit_language');
  $('#langaddinglist').removeAttr('disabled');
});

$(document).on('click',"#save-lang",function() {

   if($(this).hasClass('edit_language'))return;

   let languagepick=$('#langaddinglist').val();
   let levelpick=$('#langlevel').val();
   $.ajax({
        url:url+'/add_language',
        type:'post',
        data:{languagepick,levelpick},
        success:function(id){
         if(id!=0){
         $('#added_languages').append(`<div class="skill-method-lang" id="${id}">
          <div class="skill-left">
          <div>
              <p><span class="lang_name">${languagepick}</span><span>&nbsp;-&nbsp;</span><span class="lang_level">${levelpick}</span></p>\
          </div>
       </div>
       <div class="skill-right">
          <div>
             <img class="delete_language" src="${del_img}">
             <img class="upd_language" src="${edit_img}">
          </div>
       </div>
    </div>`);

        }
        }
   });
  $(".lang-body").css("display","none");
});

$(document).on('click',".delete_language",function() {
   let own=$(this).parents('.skill-method-lang');
   let id=own.attr('id');
   $.ajax({
        url:url+'/del_language',
        type:'post',
        data:{id},
        success:function(id){
          own.remove();
        }
    });
});

$(document).on('click',".upd_language",function() {
  $( ".lang-body" ).css("display","flex");
  $('#save-lang').addClass('edit_language');
  own=$(this).parents('.skill-method-lang');
  let langname=own.find('.lang_name').text();
  let langlevel=own.find('.lang_level').text();
  $('#langaddinglist option:selected').text(langname);
 
  $('#langaddinglist').prop('disabled', 'disabled'); 
  $('#langlevel option:selected').text(langlevel);

})
$(document).on('click',".edit_language",function() {
     let level=$('#langlevel').val();
     let id=own.attr('id');
     $.ajax({
       url:url+'/update_language',
       type:'post',
       data:{id,level},
       success:function(id){
         own.find('.lang_level').text(level)

        }
    });
     $( ".lang-body" ).css("display","none");
  });

$(document).on('click',"#cancel_lang",function() {
  $( ".lang-body" ).css("display","none");
  console.log($("#langaddinglist"))//
});
///end language
//start experiace

$( ".add-ex" ).click(function() {
  $(".specialization-ex").css("display","flex");
  $('#save-ex').removeClass('edit_experiance');
  $('#exp_title').css("border", "1px solid #d3d3d3");
  $('#exp_title').val("");
  $('#exp_company').css("border", "1px solid #d3d3d3");
  $('#exp_company').val("");
  $('#exp_date_error').text('');

    let begin_month=$('#exp_start_mon').find("option:first-child").val();
    $('#exp_start_mon').val(begin_month)
    let end_month=$('#exp_end_mon').find("option:first-child").val();
    $('#exp_end_mon').val(end_month)

    let begin_year=$('.yearpicker_1').find("option:first-child").val();
    $('.yearpicker_1').val(begin_year);
    let end_year=$('.yearpicker_2').find("option:first-child").val();
    $('.yearpicker_2').val(end_year);  

});
$(document).on('click', '#save-ex', function() {
   if($(this).hasClass('edit_experiance'))return;
    let jobtitle = $('#exp_title').val();
    let company = $('#exp_company').val();
    let startdate = $('#exp_start_mon').val();
    let startyear = $('.yearpicker_1').val();
    let enddate = $('#exp_end_mon').val();
    let endyear = $('.yearpicker_2').val();
    let description = $('#exp_desc').val();
    $.ajax({
    url:url+'/add_experiance',
    type:'post',
    data:{jobtitle,company,startdate,startyear,enddate,endyear,description},
    success:function(d){
      if(d.success==true){
        let line=(d.nd_year!=null)?'-':'';
        $('#ready_experiences').append(`<div class="skill-method-ex" id="${d.id}">
        <div class="skill-left">
          <div>
            <h2 class="job_title">${jobtitle}</h2>
            <p><span class="comp">${company}</span><span>,</span><span class="st_m">${startdate}</span><span>-</span>
            <span class="st_y">${startyear}</span>
             <span class="end_m">${enddate}</span><span>${line}</span><span class="end_y">${endyear}</span></p>
             <p class="ds">${description}</p>
          </div>
        </div>
        <div class="skill-right">
          <div>
            <img class="delete_experiance" src="${del_img}">
            <img class="edit_ex" src="${edit_img}">
          </div>
        </div>
      </div>`); 
        $(".specialization-ex").css("display","none");
      }
      else{
        if(d.message.jobtitle!=undefined){
            $('#exp_title').css("border", "1px solid red");
           
          }
          if(d.message.company!=undefined){
            $('#exp_company').css("border", "1px solid red");
          
          }
          if(d.message.error!=undefined){
              $('#exp_date_error').text(d.message.error);
          }
      }
    }
    }); 
});
$(document).on('click', '.edit_ex', function() {

    $(".specialization-ex").css("display","flex");
    $('#save-ex').addClass('edit_experiance');
    self_ex=$(this).parents('.skill-method-ex');
    $('#exp_title').val(self_ex.find('.job_title').text());
    $('#exp_company').val(self_ex.find('.comp').text());
    $('#exp_start_mon').val(self_ex.find('.st_m').text());
    $('.yearpicker_1').val(self_ex.find('.st_y').text());
    $('#exp_end_mon').val(self_ex.find('.end_m').text());
    $('.yearpicker_2').val(self_ex.find('.end_y').text()); 
    $('#exp_desc').val(self_ex.find('.ds').text());
});
$(document).on('click', '.edit_experiance', function() {


    let jobtitle = $('#exp_title').val();
    let company = $('#exp_company').val();
    let startdate = $('#exp_start_mon').val();
    let startyear = $('.yearpicker_1').val();
    let enddate = $('#exp_end_mon').val();
    let endyear = $('.yearpicker_2').val();
    let description = $('#exp_desc').val();
    let exper_id=self_ex.attr('id');     
      $.ajax({
    url:url+'/update_experiance',
    type:'post',
    data:{ exper_id,jobtitle,company,startdate,startyear,enddate,endyear,description},
    success:function(d){
        $('#exp_title').css("border", "1px solid #d3d3d3");
        $('#exp_company').css("border", "1px solid #d3d3d3");
        $('#exp_date_error').text('');

        if(d.success==false){ 
          if(d.message.jobtitle!=undefined){
            $('#exp_title').css("border", "1px solid red");
           
          }
          if(d.message.company!=undefined){
            $('#exp_company').css("border", "1px solid red");
          
          }
          if(d.message.error!=undefined){
              $('#exp_date_error').text(d.message.error);
          }
        }
        else{
          
             self_ex.find('.comp').text(company)
             self_ex.find('.job_title').text(jobtitle)
             self_ex.find('.ds').text(description)

             self_ex.find('.st_y').text(startyear)

             self_ex.find('.st_m').text(startdate)
             self_ex.find('.end_m').text(enddate)
             self_ex.find('.end_y').text(endyear)




           $(".specialization-ex").css("display","none");
        }
   }
})


});


$(document).on('click', '.delete_experiance', function() {
 let id=$(this).parents('.skill-method-ex').attr('id');
   $(this).parents('.skill-method-ex').remove();
  
    $.ajax({
        url:url+'/del_experience',
        type:'post',
        data:{id},
        success:function(d){
                     
        }
  });   



});

$(document).on('click', '#cancel-ex', function() {
   $(".specialization-ex").css("display","none");
   $('#exp_title').css("border", "1px solid #d3d3d3");
   $('#exp_title').val('');
   $('#exp_company').css("border", "1px solid #d3d3d3");
   $('#exp_company').val('');
   $('#exp_desc').val('');
   $('#exp_date_error').text('');
});
//end experiance
$(document).on('input', '.pracent', function() {
  $(this).parents(".skill-method").find(".slider_value").html($(this).val()+" %");
   $(this).parents(".body-skill-right").find(".slider_value").html($(this).val()+" %");
});





$(document).on("click",".edit-range",function() {
  
  $(this).prev().addClass( "update-range");
  $(this).prev().attr("src","cv/images/checked.png");
  $(this).parents(".skill-method").find(".pracent").removeAttr('disabled');
});
$(document).on("click",".delete-range",function() {
 if($(this).hasClass('update-range')){
    $(this).removeClass('update-range'); 
    $(this).attr("src","cv/images/delete.png");
    let parent=$(this).parents(".skill-method");
    

    let id=parent.attr('id');
    let percent=parent.find('.slider_value').text();
    percent=parseInt(percent, 10);

    $.ajax({
        url:url+'/update_skill',
        type:'post',
        data:{id,percent},
        success:function(d){
           parent.find(".pracent").attr('disabled','disabled');         
        }
  }); 
      

 }
 else{

 let id=$(this).parents(".skill-method").attr('id');
 $(this).parents(".skill-method").remove();
 $.ajax({
        url:url+'/del_skill',
        type:'post',
        data:{id},
        success:function(d){
                     
        }
  }); 
  }   
  
});

//education
$( ".add-edu" ).click(function() {
    $( ".specialization" ).css("display","flex");
    $('#edu_date_error').text("");
    $('#ed_spec').css("border", "1px solid #d3d3d3");
    $('#ed_school').css("border", "1px solid #d3d3d3");
    $('#ed_spec').val('')
    $('#ed_school').val('')
    $('#descript').val('')
    let begin_month=$('#edu_begin_month').find("option:first-child").val();
    $('#edu_begin_month').val(begin_month)
    let end_month=$('#edu_end_month').find("option:first-child").val();
    $('#edu_end_month').val(end_month)
    let begin_year=$('.yearpicker_3').find("option:first-child").val();
    $('.yearpicker_3').val(begin_year);
    let end_year=$('.yearpicker_4').find("option:first-child").val();
    $('.yearpicker_4').val(end_year);  
});
$(document).on("click","#cancel_education",function() {
    $('#edu_date_error').text("");
    $('#ed_spec').css("border", "1px solid #d3d3d3");
    $('#ed_school').css("border", "1px solid #d3d3d3");
    $( ".specialization" ).css("display","none");
})
$("#save-ed").click(function() {
    //$(".specialization").css("display","none");
   //$(".skill-method-edu").css("display","flex");
    if($(this).hasClass('edit_educ'))
      return;
    let specialization = $('#ed_spec').val();
    let education = $('#ed_school').val();
    let begin_month = $('#edu_begin_month').val();
    let begin_year = $('.yearpicker_3').val();
    let end_month = $('#edu_end_month').val();
    let end_year = $('.yearpicker_4').val();
    let description = $('#descript').val();
    $.ajax({
       url:url+'/add_education',
       type:'post',
       data:{specialization,education,begin_month,begin_year,end_month,end_year,description},
       success:function(d){
      //     $('.spec_error_message').css({display:"none"});
      //     $('.shcool_error_message').css({display:"none"});
        $('#edu_date_error').text("");
        $('#ed_spec').css("border", "1px solid #d3d3d3");
        $('#ed_school').css("border", "1px solid #d3d3d3");
      if(d.success==false){
          if(d.message.specialization!=undefined){
            $('#ed_spec').css("border", "1px solid red");
            
          }
          if(d.message.education!=undefined){
            $('#ed_school').css("border", "1px solid red");
           
          }
          if(d.message.error!=undefined){
              $('#edu_date_error').text(d.message.error);
          }
      }
      else{
       let line=(d.nd_year!=null)?'-':'';

            $('#educaded').append(`
        <div class="skill-method-edu" id=${d.id}>
              <div class="skill-left">
                   <div>
                    <h2 class="edu_school">${education}</h2>
                     <h2 class="edu_spec">${specialization}</h2>
                     <p class="edu_desc">${description}</p><p>
                     <span class="m1">${begin_month}</span><span> - </span><span class="y1">
                     ${begin_year}</span> <span class="m2">${end_month}</span>
                     <span>${line}</span>
                     <span class="y2">${end_year}</span> </p>
                   </div>
                 </div>
                 <div class="skill-right">
                    <div>
                     <img class="delete_education" src="${del_img}">
                     <img class="edit_education" src="${edit_img}">
                    </div>
                  </div>
             </div>`);

      $(".specialization").css("display","none");
      }
    }
})
});





$(document).on("click",".edit_education",function() {
  $( ".specialization" ).css("display","flex");
  $('#save-ed').addClass('edit_educ');
  self=$(this).parents('.skill-method-edu');
$('#ed_spec').val(self.find('.edu_spec').text())
$('#ed_school').val(self.find('.edu_school').text())
$('#descript').val(self.find('.edu_desc').text())
$('.yearpicker_3').val(self.find('.y1').text())
$('.yearpicker_4').val(self.find('.y2').text())
let m1=self.find('.m1').text()
let m2=self.find('.m2').text()
$('#edu_begin_month').val(m1);
$('#edu_end_month').val(m2);
});


$(document).on("click",".edit_educ",function() {
    let specialization = $('#ed_spec').val();
    let education = $('#ed_school').val();
    let begin_month = $('#edu_begin_month').val();
    let begin_year = $('.yearpicker_3').val();
    let end_month = $('#edu_end_month').val();
    let end_year = $('.yearpicker_4').val();
    let description = $('#descript').val();
    id=self.attr('id');
   
    $.ajax({
    url:url+'/update_education',
    type:'post',
    data:{id,specialization,education,begin_month,begin_year,end_month,end_year,description},
    success:function(d){
 
      if(d.success==false){
        if(d.message.specialization!=undefined){
            $('#ed_spec').css("border", "1px solid red");
            
          }
          if(d.message.education!=undefined){
            $('#ed_school').css("border", "1px solid red");
           
          }
          if(d.message.error!=undefined){
              $('#edu_date_error').text(d.message.error);
          }
      }
      else{
             self.find('.edu_spec').text(specialization)
             self.find('.edu_school').text(education)
             self.find('.edu_desc').text(description)
             self.find('.y1').text(begin_year)
             self.find('.y2').text(end_year)
             self.find('.m1').text(begin_month)
             self.find('.m2').text(end_month)
             $( ".specialization" ).css("display","none");
      }

                      // resize image//









    }
 })


});  
$(document).on("click",".delete_education",function() {

  let id=$(this).parents('.skill-method-edu').attr('id');
   $(this).parents('.skill-method-edu').remove();
    $.ajax({
        url:url+'/del_education',
        type:'post',
        data:{id},
        success:function(d){
                     
        }
  });   


});

////////////end education




let Years = "";
let Years_end = "<option value =''></option>";
for (i = new Date().getFullYear(); i > 1959; i--)
{
  Years+=`<option value = ${i}>${i}</option>`
  Years_end+=`<option value = ${i}>${i}</option>`
  
}


$('.yearpicker_4').html(Years_end);
$('.yearpicker_3').html(Years);
$('.yearpicker_1').html(Years);
$('.yearpicker_2').html(Years_end);



$(document).on("click",".send",function() {

  let name=$('#name').val();
  let profession=$('#profession').val();
  let about_me=$('#about_me').val();
  let phone=$('#phone').val();
  let address=$('#address').val();
  let email=$('#email').val();
  let facebook=$('#facebook_url').val();
  let linkedin=$('#linkedin_url').val();
  let twitter=$('#twitter_url').val();
  let dribble=$('#dribble_url').val(); 
  let github=$('#github_url').val();
  let behance=$('#behance_url').val();
  let published=$('#checkbox_id').prop('checked');
 


   $.ajax({
    url:url+'/do_form',
    type:'post',
    data:{name,profession,about_me,
       phone,address,email,facebook,
       linkedin,twitter,dribble,github,
       behance,published
      },
    success:function(d){
                

              if(d.success==false){

                   if(d.message.name!==undefined) $('#name').css('border-color','red');
                   else  $('#name').css('border-color','grey');

                   if(d.message.profession!==undefined)$('#profession').css('border-color','red');
                   else $('#profession').css('border-color','grey');

                   if(d.message.about_me!==undefined)$('#about_me').css('border-color','red');
                   else  $('#about_me').css('border-color','grey');

                   if(d.message.address!==undefined)$('#address').css('border-color','red');
                   else $('#address').css('border-color','grey');
                   if(d.message.email!==undefined)$('#email').css('border-color','red');
                   else $('#email').css('border-color','grey');  
                   if(d.message.phone!==undefined)$('#phone').css('border-color','red');
                   else $('#phone').css('border-color','grey');  
                   

                   if(d.message.skills!==undefined)$('#skill_error').html(d.message.skills[0]);
                   else $('#skill_error').html("");
                   if(d.message.education!==undefined)$('#educ_error').html(d.message.education[0]);
                   else $('#educ_error').html("");
                   if(d.message.language!==undefined)$('#lang_error').html(d.message.language[0]);
                   else $('#lang_error').html("");
                   if(d.message.experience!==undefined)$('#exp_error').html(d.message.experience[0]);
                   else $('#exp_error').html(""); 
                   
                   if(d.message.networks!==undefined)$('#connect_error').html(d.message.networks[0]);
                   else $('#connect_error').html("");
                   if(d.message.facebook!==undefined)$('#facebook_error').html(d.message.facebook[0]);
                   else $('#facebook_error').html(""); 
                   if(d.message.github!==undefined)$('#github_error').html(d.message.github[0]);
                   else $('#github_error').html(""); 
                   if(d.message.linkedin!==undefined)$('#linkedin_error').html(d.message.linkedin[0]);
                   else $('#linkedin_error').html("");
                   if(d.message.twitter!==undefined)$('#twitter_error').html(d.message.twitter[0]);
                   else $('#twitter_error').html("");
                   if(d.message.dribble!==undefined)$('#dribble_error').html(d.message.dribble[0]);
                   else $('#dribble_error').html("");
                   if(d.message.behance!==undefined)$('#behance_error').html(d.message.behance[0]);
                   else $('#behance_error').html("");    
   
  
  


              }
              else {
                
               location.href =url+"/my_cv/"+d.id;
              }
    
         }
    
 })



  });
// $(':file').on('change', function() {

//    $('#new_image').trigger( "click" );
//    });

//   $('#new_image').on('click', function() {
 
//     $.ajax({
//         url:'/add_image',
//         type: 'POST',
//         data: new FormData($('form')[0]),
//         cache: false,
//         contentType: false,
//         processData: false,
//         success:function(d){
         
//         window.location.href = '/cropper';
//         }
//     });



// });

});