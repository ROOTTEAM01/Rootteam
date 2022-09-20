$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });


let numOne = 0
let numTwo = 0
let numThree = 0
let numFour = 0
let numFive = 0
let numSix = 0

$(".x").click(function(){
	// alert($(this).parents('.line-first'))

   let index = $(".x").index(this)+1;
 //     alert(index)
	if($(this).hasClass( "skills" )){
		// $(this).parent().parent().next().remove();
		$(this).parent().parent().next().hide()
		$.ajax({
         url:url+'/del_skill',
         type:'post',
         data:{lang:index},
         success:function(d){
        
         }
     })
	}
    if($(this).hasClass( "education" )){
	     let id = $(this).parents('.line-first').attr('id')
	     $.ajax({
         url:url+'/del_education',
         type:'post',
         data:{id:id},
         success:function(d){
         	
         }
     })
    }

    if($(this).hasClass( "del_lang" )){
	     let id = $(this).parents('.line-first-lng').attr('id')
	  
	     $.ajax({
         url:url+'/del_language',
         type:'post',
         data:{id:id},
         success:function(d){

         	//location.reload();
         }
     })
    }
     if($(this).hasClass( "exp_del" )){
	     let id = $(this).parents('.line-first').attr('id')
	    $.ajax({
         url:url+'/del_experience',
         type:'post',
         data:{id:id},
         success:function(d){

            //location.reload();
         }
     })
    }
//alert(666);
// $(this).parent().parent().remove()
$(this).parent().parent().hide()

	 // $(".line-first").eq(index).hide();
	 numOne-=1
})

document.querySelector(".skill-plus-first").onclick = newLine



function newLine(){
 document.querySelector(".sfone").style.display = "block"
}
document.querySelector(".check").onclick = ()=>{
	
	let prc = document.querySelector(".selector").value
	let sldr = document.querySelector(".slider").value

    $.ajax({
         url:url+'/add_skill',
         type:'post',
         data:{lang:prc,percent:sldr},
         success:function(d){
         	
         }
    })


	if(prc == 1){
		$(".l-one").css("display", "block");
		 document.querySelector(".l-one").style.display = "block"
		$('.l-one').find('.gluing').css('display','flex')
		$('.l-one').find('.no-flex').css('display','block')
		 document.querySelector(".percent").innerHTML = `${sldr}%`
		 document.querySelector(".charge").style.width = `${sldr}%`
		// numOne+=1
		 document.querySelector(".first").innerHTML = 'Skills'

	}
	else if (prc == 2){
		 document.querySelector(".l-sec").style.display = "block"
		$(".l-sec").find('.gluing').css('display','flex')
		$(".l-sec").find('.no-flex').css('display','block')
		 document.querySelector(".percent-sec").innerHTML = `${sldr}%`
	 document.querySelector(".charge-sec").style.width = `${sldr}%`
		// numOne+=1
		 document.querySelector(".first").innerHTML = 'Skills'
 }
	else if (prc == 3){
		
		 document.querySelector(".l-th").style.display = "block"
		$('.l-th').find('.gluing').css('display','flex')
		$('.l-th').find('.no-flex').css('display','block')
	document.querySelector(".percent-th").innerHTML = `${sldr}%`
		 document.querySelector(".charge-th").style.width = `${sldr}%`
		// numOne+=1
		document.querySelector(".first").innerHTML = 'Skills'
	}

 document.querySelector(".sfone").style.display = "none"

}


let player = document.querySelector(".body-nn");
new Sortable(player,{
	handle:'.handle',
	animation:200
})


$(".top").click(function(){
	let indexS = $(".top").index(this);
	$(".all-body-first").eq(indexS).toggle()
	$(".w").eq(indexS).toggleClass("rot");
})


document.querySelector(".slider").oninput = function(){
	document.querySelector(".range-percent").innerHTML = document.querySelector(".slider").value + "%"
}



function previewImage() {
	let file = document.getElementById("file").files;
	if (file.length > 0) {
		let fileReader = new FileReader();
		fileReader.onload = function (event) {
			//let src=document.querySelector(".in-img").value
			document.querySelector(".preview").setAttribute("src", event.target.result);
		};
		fileReader.readAsDataURL(file[0]);
	}
}









document.querySelector(".check-four").onclick = add;


let output = document.querySelector('.body-mini');
let button = document.querySelector('.skill-plus-th');
let input  = document.querySelector('.inLng');

function add() {

	if(input.value === "") return;
	///////add to database
		let lang=$('#inLng').val();

       $.ajax({
         url:url+'/add_language',
         type:'post',
         data:{lang:lang},
         success:function(d){
         	alert(d)
         }
    })  
///////////////////////

	let newMessage = document.createElement('div');
	newMessage.classList.add('line-first-lng');
	let newMessageS = document.createElement('p');
	newMessageS.classList.add('lang');
	let newMessageT = document.createElement('div');
	newMessageT.classList.add('flex-sq');

	numThree+=1
	document.querySelector(".third").innerHTML = 'Languages'
		
	newMessageS.textContent = input.value;

	output.appendChild(newMessage);
	output.appendChild(newMessageS); 
	output.appendChild(newMessageT);
	newMessage.appendChild(newMessageS);
	newMessage.appendChild(newMessageT);

	newMessageT.innerHTML = "<i class='fa fa-times-circle x del_lang' aria-hidden='true' style = 'margin-left:40px;'></i><i class='fa fa-pencil pencil' style = 'display:none;'aria-hidden='true'></i><i class='fa fa fa-bars handleS' aria-hidden='true'></i>"
	
	$(".x").click(function(){
		
		let index = $(".x").index(this);
		$(".line-first").eq(index).hide();
		numThree -=1
	})
	input.value = ""

	let playerS = document.querySelector(".body-mini");
	new Sortable(playerS,{
		handle:'.handleS',
		animation:200,
	})


	showThird.style.display = "none"
}



document.querySelector(".check-second").onclick = addS;



let outputS = document.querySelector('.body-mini-sec');
let buttonS = document.querySelector('.skill-plus-sec');
let inputS  = document.querySelector('.desc-s');
let descT  = document.querySelector('.desc-t');
let textareaS  = document.querySelector('.textarea-s');

document.querySelector('.month').onchange=function (){getSelectValue()};
document.querySelector('.year').onchange=function (){getSelectValue()};
document.querySelector('.monthS').onchange=function (){getSelectValue()};
document.querySelector('.yearS').onchange=function (){getSelectValue()};

function getSelectValue()
{
	let month  = document.querySelector('.month').value
	let year  = document.querySelector('.year').value
	let monthS  = document.querySelector('.monthS').value
	let yearS  = document.querySelector('.yearS').value
}

let fff = document.querySelectorAll(".fff")
let ccc = document.querySelectorAll(".close-secondd")
for(let c=0;c<fff.length;c++){
	fff[c].onclick = ()=>{
		 // document.querySelectorAll(".new-body")[c].classList.toggle('new-body-none')
		$(".new-body").eq(c).toggle();
		document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")
	}
	ccc[c].onclick = ()=>{

		document.querySelectorAll(".line-first")[c+3].remove()
	}

// $('.save_exp1').click(function(){

  

// })
	document.querySelectorAll(".check-secondd")[c].onclick=()=>{
		

		let check_exp=document.querySelectorAll(".check-secondd")[c].classList.contains('save_exp')
		let check_edu=document.querySelectorAll(".check-secondd")[c].classList.contains('save_edu')


		if(check_exp){
			document.querySelectorAll(".th-of-ec")[c].innerText = document.querySelectorAll(".desc-ss")[c].value

           let title=document.querySelectorAll('.desc-ss')[c].value
           let company=document.querySelectorAll('.desc-tt')[c].value

           if(title=== "" || company=== ""){
		       document.querySelectorAll('.desc-ss')[c].style.border = "1px solid red"
		       document.querySelectorAll('.desc-tt')[c].style.border = "1px solid red"
		      return;
	        }

            let begin_month=document.querySelectorAll('.month-nn')[c].value
            let begin_year=document.querySelectorAll('.yearr')[c].value
            let end_month=document.querySelectorAll('.monthSS-nn')[c].value
            let end_year=document.querySelectorAll('.yearS-nn')[c].value
            let description=document.querySelectorAll('.textarea-ss')[c].value
            let id = document.querySelectorAll(".textarea-ss")[c].id;
            // let id=document.querySelectorAll('.exper_id')[c].value
			let intervalS = document.querySelectorAll(".interval")
			intervalS[c].textContent = `${begin_year} ${begin_month} - ${end_year} ${end_month}`
              $.ajax({
            url:'/update_experiance',
            type:'post',
            data:{
         	   id:id,  
         	   title:title,
         	   company:company,
         	   description:description,
         	   start_month:begin_month,
               start_year:begin_year,
               end_month:end_month,
               end_year:end_year,
         	   },
            success:function(d){
               //alert(d)
          console.log(d);
            // location.reload();
            }
        })

        }

		if(check_edu){
		document.querySelectorAll(".th-of-ec")[c].innerText = document.querySelectorAll(".desc-ss")[c].value

		 let begin_month  = document.querySelectorAll('.month-nn')[c].value
		 let begin_year  = document.querySelectorAll('.yearr')[c].value
		 let end_month  = document.querySelectorAll('.monthSS-nn')[c].value
		 let end_year  = document.querySelectorAll('.yearS-nn')[c].value
		 specialization=document.querySelectorAll('.desc-ss')[c].value
		
         let education  = document.querySelectorAll('.desc-tt')[c].value
         let description  = document.querySelectorAll('.textarea-ss')[c].value
         let id  = document.querySelectorAll('.edu_id')[c].value;
		 let intervalS = document.querySelectorAll(".interval")
		 intervalS[c].textContent = `${begin_year} ${begin_month} - ${end_year} ${end_month}`
         $.ajax({
            url:url+'/update_education',
            type:'post',
            data:{
         	   id:id,  
         	   specialization:specialization,
         	   education:education,
         	   description:description,
         	   begin_month:begin_month,
               begin_year:begin_year,
               end_month:end_month,
               end_year:end_year,
         	  },
            success:function(d){

         	//console.log(d)
            // location.reload();
            }
        })

        }


		 document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")
		 $(".new-body").eq(c).toggle();

	}
}

function addS() {
	if(inputS.value === "" || descT.value === ""){
		inputS.style.border = "1px solid red"
		descT.style.border = "1px solid red"
		return
	}
	numTwo +=1
	document.querySelector(".second").innerHTML = 'Education'
		
	inputS.style.border = "1px solid #EDEDED"
	descT.style.border = "1px solid #EDEDED"
	let lineSec = document.createElement('div');
	lineSec.classList.add('line-first');
	lineSec.classList.add("edu")
	let flexCol = document.createElement('div');
	flexCol.classList.add('flex-col');
	let flexSec = document.createElement('div');
	flexSec.classList.add('flex-sec');
	let thOfEc = document.createElement('p');
	thOfEc.classList.add('th-of-ec');
	let interval = document.createElement('div');
	interval.classList.add('interval');
	let thatbody = document.createElement('div')
	thatbody.classList.add("new-body")
	
	let desc = document.createElement("div")
	desc.classList.add("area")
	desc.innerText = descT.value
	let descSec = document.createElement("div")
	descSec.classList.add("areaSec")
	descSec.innerText = textareaS.value

	let month  = document.querySelector('.month').value
	let year  = document.querySelector('.year').value
	let monthS  = document.querySelector('.monthS').value
	let yearS  = document.querySelector('.yearS').value

	thOfEc.textContent = inputS.value;
	interval.textContent = `${year} ${month} - ${yearS} ${monthS}`
	thatbody.innerHTML+=`<div class = 'body-sec show-hide hides' style='display:block;'><div class = 'content'><p class = 'title-input'>Specialization*</p><input type = 'text' class = 'desc-ss' value = ${inputS.value} placeholder='e.g.Web Design'></div><div class = 'content'><p class = 'title-input'>Education*</p><input type = 'text' class = 'desc-tt' value=${descT.value} placeholder='e.g.Armenian State University'></div><div class = 'content' style = 'display: flex;'><div class = 'part-one' style='margin-right: 22px;'><p class = 'title-input'>Start Date</p><div class = 'flex-content'><select class='month-nn' ><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select><select class='yearr' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div><div class = 'part-two'><p class = 'title-input'>End Date</p><div class = 'flex-content'><select class='monthSS-nn'><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select> <select class='yearS-nn' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div></div><div class = 'content' style='padding-bottom:30px;'><p class = 'title-input'>Description</p><textarea class = 'textarea-ss'  type = 'text' placeholder='Write your text...' style='margin-top: 7px;height:67px;'>${textareaS.value}</textarea><div class = 'close-secondd'><i class='fa fa-trash' aria-hidden='true'></i><span class = 'del'>Delete</span></div><div class = 'check-secondd'><i class='fa fa-save' aria-hidden='true'></i><span class = 'save'>Save</span></div></div></div>`

	outputS.appendChild(lineSec);
	lineSec.appendChild(flexCol);
	lineSec.appendChild(flexSec); 
	flexCol.appendChild(thOfEc);
	flexCol.appendChild(interval);
	lineSec.appendChild(thatbody);

	flexSec.innerHTML = "<i class='fa fa-times-circle x' aria-hidden='true'></i><i class='fa fa-pencil pencil pen-one fff' aria-hidden='true'></i><i class='fa fa fa-bars handleT' aria-hidden='true'></i>"
	let cbn = document.querySelectorAll('.month-nn')
		for(let gg = 0; gg<cbn.length;gg++){
					document.querySelectorAll('.month-nn')[gg].value = document.querySelector(".month").value
					document.querySelectorAll('.yearr')[gg].value = document.querySelector(".year").value
					document.querySelectorAll('.monthSS-nn')[gg].value = document.querySelector(".monthS").value
					document.querySelectorAll('.yearS-nn')[gg].value = document.querySelector(".yearS").value
				}

	inputS.value  = ""
	descT.value  = ""
	textareaS.value  = ""

	$(".month").val("January");
	$(".year").val("2021");
	$(".monthS").val("January");
	$(".yearS").val("2021");

	$(".x").click(function(){
	
		let index = $(".x").index(this);
		$(".line-first").eq(index).remove();
		numTwo -=1
	})
	

	let playerT = document.querySelector(".body-mini-sec");
	new Sortable(playerT,{
		handle:'.handleT',
		animation:200
	})


	show.style.display = "none"


}


document.querySelector(".check-third").onclick = addT;


let outputS_s = document.querySelector('.body-mini-th');
let buttonT = document.querySelector('.skill-plus');
let inputLng  = document.querySelector('.input-lng-s');
let inputComp  = document.querySelector('.input-comp');
let textareaT  = document.querySelector('.textarea-t');




document.querySelector('.month-s').onchange=function (){getSelectValueS()};
document.querySelector('.year-s').onchange=function (){getSelectValueS()};
document.querySelector('.monthS-s').onchange=function (){getSelectValueS()};
document.querySelector('.yearS-s').onchange=function (){getSelectValueS()};

function getSelectValueS()
{
	let monthF_f  = document.querySelector('.month-s').value
	let yearF_f  = document.querySelector('.year-s').value
	let monthS_s  = document.querySelector('.monthS-s').value
	let yearS_s  = document.querySelector('.yearS-s').value
}

function addT() {

	if(inputLng.value === "" || inputComp.value === ""){
		inputLng.style.border = "1px solid red"
		inputComp.style.border = "1px solid red"
		return
	}

// adding	new experiance
	let job_title=$('.input-lng-s').val();
	let company=$('.input-comp').val();
	let start_month=$('.month-s').val();
	let start_year=$('.year-s').val();
	let end_month=$('.monthS-s').val();
	let end_year=$('.yearS-s').val();
	let description=$('.textarea-t').val();

    $.ajax({
         url:url+'/add_experiance',
         type:'post',
         data:{
         
         	job_title:job_title,
            company:company,
            start_month:start_month,
            start_year:start_year,
            end_month:end_month,
            end_year:end_year,
            description:description,
         	},
         success:function(d){
         	console.log(d)
         	//location.reload();
         }
    })      

// end adding	new experiance
	numFour+=1
	document.querySelector(".four").innerHTML = 'Experiences'
		
	inputLng.style.border = "1px solid #EDEDED"
	inputComp.style.border = "1px solid #EDEDED"
	let lineTh = document.createElement('div');
	lineTh.classList.add('line-first');
	let flexColS = document.createElement('div');
	flexColS.classList.add('flex-col');
	let flexTh = document.createElement('div');
	flexTh.classList.add('flex-sec');
	let thOfEcS = document.createElement('p');
	thOfEcS.classList.add('th-of-ec');
	let intervalS = document.createElement('div');
	intervalS.classList.add('interval');
	let thatbody = document.createElement('div')
	thatbody.classList.add("new-body")

	let monthF_f  = document.querySelector('.month-s').value
	let yearF_f  = document.querySelector('.year-s').value
	let monthS_s  = document.querySelector('.monthS-s').value
	let yearS_s  = document.querySelector('.yearS-s').value


	outputS_s.appendChild(lineTh);
	lineTh.appendChild(flexColS);
	lineTh.appendChild(flexTh); 
	flexColS.appendChild(thOfEcS);
	flexColS.appendChild(intervalS);

	thOfEcS.textContent = inputLng.value;
	intervalS.textContent = `${inputComp.value}, ${yearF_f} ${monthF_f} - ${yearS_s} ${monthS_s}`
	thatbody.innerHTML+=`<div class = 'body-sec show-hide hides' style='display:block;'><div class = 'content'><p class = 'title-input'>Job Title*</p><input type = 'text' class = 'desc-ss' value = ${inputLng.value} placeholder='e.g.Web Design'></div><div class = 'content'><p class = 'title-input'>Company*</p><input type = 'text' class = 'desc-tt' value=${inputComp.value} placeholder='e.g.Armenian State University'></div><div class = 'content' style = 'display: flex;'><div class = 'part-one' style='margin-right: 22px;'><p class = 'title-input'>Start Date</p><div class = 'flex-content'><select class='month-nn' ><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select><select class='yearr' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div><div class = 'part-two'><p class = 'title-input'>End Date</p><div class = 'flex-content'><select class='monthSS-nn'><option value='January'>January</option><option value='February'>February</option><option value='March'>March</option><option value='April'>April</option><option value='May'>May</option><option value='June'>June</option><option value='July'>July</option><option value='August'>August</option><option value='September'>September</option><option value='October'>October</option><option value='November'>November</option><option value='December'>December</option></select> <select class='yearS-nn' style = 'margin-left: 10px;'><option value='2021'>2021</option><option value='2020'>2020</option><option value='2019'>2019</option><option value='2018'>2018</option><option value='2017'>2017</option><option value='2016'>2016</option><option value='2015'>2015</option><option value='2014'>2014</option><option value='2013'>2013</option><option value='2012'>2012</option><option value='2011'>2011</option><option value='2010'>2010</option><option value='2009'>2009</option><option value='2008'>2008</option><option value='2007'>2007</option><option value='2006'>2006</option><option value='2005'>2005</option><option value='2004'>2004</option><option value='2003'>2003</option><option value='2002'>2002</option><option value='2001'>2001</option><option value='2000'>2000</option><option value='1999'>1999</option><option value='1998'>1998</option><option value='1997'>1997</option><option value='1996'>1996</option><option value='1995'>1995</option><option value='1994'>1994</option><option value='1993'>1993</option><option value='1992'>1992</option><option value='1991'>1991</option><option value='1990'>1990</option><option value='1989'>1989</option><option value='1988'>1988</option><option value='1987'>1987</option><option value='1986'>1986</option><option value='1985'>1985</option><option value='1984'>1984</option><option value='1983'>1983</option><option value='1982'>1982</option><option value='1981'>1981</option><option value='1980'>1980</option><option value='1979'>1979</option><option value='1978'>1978</option><option value='1977'>1977</option><option value='1976'>1976</option><option value='1975'>1975</option><option value='1974'>1974</option><option value='1973'>1973</option><option value='1972'>1972</option><option value='1971'>1971</option><option value='1970'>1970</option><option value='1969'>1969</option><option value='1968'>1968</option><option value='1967'>1967</option><option value='1966'>1966</option><option value='1965'>1965</option><option value='1964'>1964</option><option value='1963'>1963</option><option value='1962'>1962</option><option value='1961'>1961</option><option value='1960'>1960</option><option value='1959'>1959</option><option value='1958'>1958</option><option value='1957'>1957</option><option value='1956'>1956</option><option value='1955'>1955</option><option value='1954'>1954</option><option value='1953'>1953</option><option value='1952'>1952</option><option value='1951'>1951</option><option value='1950'>1950</option></select></div></div></div><div class = 'content' style='padding-bottom:30px;'><p class = 'title-input'>Description</p><textarea class = 'textarea-ss'  type = 'text' placeholder='Write your text...' style='margin-top: 7px;height:67px;'>${textareaT.value}</textarea><div class = 'close-secondd'><i class='fa fa-trash' aria-hidden='true'></i><span class = 'del'>Delete</span></div><div class = 'check-secondd'><i class='fa fa-save' aria-hidden='true'></i><span class = 'save'>Save</span></div></div></div>`

	lineTh.appendChild(thatbody);

	flexTh.innerHTML = "<i class='fa fa-times-circle x' aria-hidden='true'></i><i class='fa fa-pencil pencil pen-one fff' aria-hidden='true'></i><i class='fa fa fa-bars handleF' aria-hidden='true'></i>"

	let fff = document.querySelectorAll(".fff")
	let ccc = document.querySelectorAll(".close-secondd")
			
		for(let c=0;c<fff.length;c++){
		fff[c].onclick = ()=>{
			// document.querySelectorAll(".new-body")[c].classList.toggle('new-body-none')
			$(".new-body").eq(c).toggle();	
				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")
		}
		ccc[c].onclick = ()=>{
			document.querySelectorAll(".line-first")[c+3].remove()
		}
				document.querySelectorAll(".check-secondd")[c].onclick=()=>{
				document.querySelectorAll(".th-of-ec")[c].innerText = document.querySelectorAll(".desc-ss")[c].value
				document.querySelectorAll(".interval")[c].innerText = document.querySelectorAll(".desc-tt")[c].value + ", "
					
					let month_sh  = document.querySelectorAll('.month-nn')[c].value
					let yearr  = document.querySelectorAll('.yearr')[c].value
					let month_sSS  = document.querySelectorAll('.monthSS-nn')[c].value
					let yearSS  = document.querySelectorAll('.yearS-nn')[c].value
					let intervalS = document.querySelectorAll(".interval")
					intervalS[c].textContent += `${yearr} ${month_sh} - ${yearSS} ${month_sSS}`

  
				document.querySelectorAll(".line-first")[c+3].classList.toggle("line-first-toggle")

				$(".hides").eq(c).toggle();

				}
		}
		
		let cbn = document.querySelectorAll('.month_s-nn')
					
		for(let gg = 0; gg<cbn.length;gg++){
					document.querySelectorAll('.month_s-nn')[gg].value = document.querySelector('.month-s').value
					document.querySelectorAll('.yearr')[gg].value = document.querySelector('.year-s').value
					document.querySelectorAll('.month_sSS-nn')[gg].value = document.querySelector('.monthS-s').value
					document.querySelectorAll('.yearS-nn')[gg].value = document.querySelector('.yearS-s').value

		}
	

	
	$(".x").click(function(){
		
		let index = $(".x").index(this);
		$(".line-first").eq(index).hide();
		numFour-=1
	})
	
	inputLng.value = ""
	inputComp.value = ""
	textareaT.value = ""

	// $(".month-s").val("January");
	// $(".year-s").val("2021");
	// $(".monthS-s").val("January");
	// $(".yearS-s").val("2021");

	let playerF = document.querySelector(".body-mini-th");
	new Sortable(playerF,{
		handle:'.handleF',
		animation:200
	})
	showSecond.style.display = "none"

    
}

document.querySelector(".close-second").onclick = ()=>{
	inputS.value = ""
	descT.value = ""
	textareaS.value = ""
}


document.querySelector(".close-third").onclick = ()=>{

	inputLng.value = ""
	inputComp.value = ""
	textareaT.value = ""
	showSecond.style.display = "none"
}



document.querySelector(".close-four").onclick = ()=>{
	input.value = ""
}

let show = document.querySelector(".s")

let showSecond = document.querySelector(".show-hide-second")
let showThird = document.querySelector(".show-hide-third")

document.querySelector(".skill-plus-sec").onclick = ()=>{
	show.style.display = "block"
  // $('#specialization').val("");
  // $('#education').val("");
  // $('.month').val('January');
  // $('.year').val(2021);
  // $('.monthS').val('January');
  // $('.yearS').val(2021);
  // $('#edu_description').val('');    
  // $('.edu_id').attr('id',0);

	
}
document.querySelector(".close-second").onclick = () =>{
	show.style.display = "none"
}
document.querySelector(".skill-plus").onclick = ()=>{
$('#jobtitle').val('');
 $('#input-comp').val('');
 // $(".month-s").val('January');
 // $(".year-s").val('2021');
 // $(".monthS-s").val('January');
 // $(".yearS-s").val('2021');
 $('#exper_desciption').val('');
 $('.exp_id').attr('id',0);


	showSecond.style.display = "block"
}
document.querySelector(".skill-plus-th").onclick = ()=>{

	showThird.style.display = "block"
}

let vl = document.querySelectorAll(".vl")
let vlImg = document.querySelector("#file")
let endLinks = document.querySelectorAll(".end-links")

document.querySelector(".done").onclick = ()=>{
var ready=1;

//////////////////////////////email
$('#wrong_email').html('');
let email=$('.input-email').val();
if(email=='')
ready=0;
let	emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
	if(!emailReg.test(email)) {
		ready=0;
		$('#wrong_email').css("color","red");
		$('#wrong_email').html(' Invalid Email');
            document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
			
        }

/////////////////////////image///////////////   
  //    if($('#new_img').attr('src')=='cv_images/camera.png'){
  //    	   document.querySelector(".add-photo").style.border = "1px solid red"
		// 	document.querySelector(".callout").style.animation = "move 1s forwards"
		// 	setTimeout(()=>{
		// 		document.querySelector(".callout").style.animation = ""
		// 	},3000)
		// }
		// vlImg.oninput= ()=>{
		// 	document.querySelector(".add-photo").style.border = "1px solid #AFAFAF"
		// 	numFive +=1
		// }
	///////////////skills
        if(!$(".l-one").is(":visible")&&!$(".l-th").is(":visible")&&!$(".l-sec").is(":visible")){
        	ready=0;
           document.querySelector(".first").innerHTML = 'Skills <span style = "color:red;">(Minimum one skill required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
        }
//////////////////////education
     
        
if(!$('.line-first').hasClass('edu')){
	ready=0;
  document.querySelector(".second").innerHTML = 'Education <span style = "color:red;">(Minimum one Education required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
  

}

///////////////////////languages

if($('.line-first-lng').length<1){
	ready=0;
	document.querySelector(".third").innerHTML = 'Languages <span style = "color:red;">(Minimum one Language required)</span>'
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
   

}
/////////////////////////////////
	for(let k=0;k<vl.length;k++){
		if(!vl[k].value){
			ready=0;
			vl[k].style.border = "1px solid red"
			numSix = 0
			document.querySelector(".callout").style.animation = "move 1s forwards"
			setTimeout(()=>{
				document.querySelector(".callout").style.animation = ""
			},3000)
		}
		// if(!vlImg.value){
		// 	document.querySelector(".add-photo").style.border = "1px solid red"
		// 	document.querySelector(".callout").style.animation = "move 1s forwards"
		// 	setTimeout(()=>{
		// 		document.querySelector(".callout").style.animation = ""
		// 	},3000)
		// }
		
		vl[k].oninput = ()=>{
			vl[k].style.border = "1px solid #AFAFAF"
			numSix =1
		}
		

	/////links
  

		for(m=0;m<endLinks.length;m++){
			
			if(!endLinks[0].value || !endLinks[1].value || !endLinks[2].value  || !endLinks[3].value || !endLinks[4].value || !endLinks[5].value){

				document.querySelector(".six").innerHTML = "Connection <span style = 'color:red;'>(Minimum one link required)</span>"
				
			}
			if(endLinks[0].value || endLinks[1].value || endLinks[2].value  || endLinks[3].value || endLinks[4].value || endLinks[5].value){
				document.querySelector(".six").innerHTML = "Connection"
				numFive+=1

			}
			endLinks[m].oninput = ()=>{
				document.querySelector(".six").innerHTML = "Connection"
			}
		}
	}

///////////////////////////////////
if(ready==1){

    let name=$('.input-name').val();
	let profession=$('.dev').val();
	let about_me=$('.about-me').val();
	let address=$('.input-adress').val();
	let phone=$('.input-numb').val();
	let cv_email=$('.input-email').val();
    let check=$('.checkbox').is(":checked")
    let facebook=$('.facebook').val();
    let twitter=$('.twitter').val();
    let dribble=$('.dribble').val();
    let github=$('.github').val();
    let behance=$('.behance').val();
    let linkedin=$('.linkedin').val();
alert(5555);
return;

    $.ajax({
        url:url+'/do_form',
        type:'post',
        data:{
         	name:name,
            profession:profession,
            about_me:about_me,
            address:address,
            phone:phone,
            cv_email:cv_email,
            check:check,
            facebook:facebook,
            twitter:twitter,
            dribble:dribble,
            github:github,
            behance:behance,
            linkedin:linkedin,
            },
         success:function(d){
        //console.log(d)
         	window.location.href = $('#cv_address').text();
         }
    })  
}





	
}

$(document).ready(function(){

$('.select-first').change(function(){
  let lang=$(this).val();
   $.ajax({
        url:url+'/locale/'+lang,
        type: 'get',
        data: {lang:lang},
        success:function(d){
        	location.reload();
        }
    });





})
 


    $('.edu_save').click(function(){
        let specialization=$('#specialization').val();
        let education=$('#education').val();
        let begin_month=$('.month').val();
        let begin_year=$('.year').val();
        let end_month=$('.monthS').val();
        let end_year=$('.yearS').val();
        let description=$('#edu_description').val();
        let id=$('.edu_id').attr('id');
        $.ajax({
           type:'post',
           url:url+'/add_education',
           data:{
     	   specialization:specialization,
    	   education:education,
     	   description:description,
     	   begin_month:begin_month,
           begin_year:begin_year,
           end_month:end_month,
           end_year:end_year,
     	   },
           success:function(d){
     	      console.log(d);
              //location.reload();
           }
        })
    })




$(':file').on('change', function() {

   $('#new_image').trigger( "click" );
   });

  $('#new_image').on('click', function() {
 
    $.ajax({
        url:url+'/add_image',
        type: 'POST',
        data: new FormData($('form')[0]),
        cache: false,
        contentType: false,
        processData: false,
        success:function(d){
        	console.log(d)
        	//location.reload();
        }
    });



});

//deletions

 // $(".education").click(function(){ 
 //    let id=$(this).attr('id')
    
 //    $.ajax({
 //         url:'add_cv.php',
 //         type:'post',
 //         data:{id:id,action:'del_education'},
 //         success:function(d){
         	
 //         }
 //     })

 // })

 // $(".experiences").click(function(){ 
 //    let id=$(this).attr('id')
  
 //    $.ajax({
 //         url:'add_cv.php',
 //         type:'post',
 //         data:{id:id,action:'del_exp'},
 //         success:function(d){
         	
 //         }
 //     })

 // })


});
