$(document).ready(function(){

	var count = 0;
	var modal = $('#modal');
	var n_timer = false;

	$('.st').click(function(){
		int=setInterval(dec,1000);
		step();
	});

	$('.ed').click(function(){
		if(count>0){
			count-=1;
			modal.find('.modal-body').text('You win $'+$('.ul .li'+count).find('b').text());
			modal.modal('show');
		}
		else{
			modal.find('.modal-body').text('You are Lost')
			modal.modal('show');
		}
	})
	$('.ph').click(function(){
		modal.find('.modal-body').text('I think'+(' '+obj[count].answer));
		modal.modal('show');
		$('.ph').prop('disabled',true);
	})
	var obj = [
	{
		'question': 'Ի՞նչպես արգելել տեքստային դաշտի ձևափոխումը',
		'answer' : '<input value="$999" disabled />',
		'variant': [
		'<input value="$999" checked />',
		'<input value="$999" readonly />',
		'<input value="$999" disabled />',
		'<input value="$999" maxlength="0"/>'
		],
	},
	{
		'question': 'Բլոկային թեգ է՝',
		'answer' : '<h2>',
		'variant': [
		'<a>',
		'<b>',
		'<span>',
		'<h2>'
		],
	},
	{
		'question': 'Ինչպե՞ս ստեղծել հղում դեպի էլ.փոստ',
		'answer' : '<a href="gmail.com">exaple@gmail.com</a>',
		'variant': [
		'<a href="gmail.com">exaple@gmail.com</a>',
		'<a link="gmail.com">exaple@gmail.com</a>',
		'<mail href="exaple@gmail.com" />',
		'<link email="exaple@gmail.com">exaple@gmail.com</link>'
		],
	},
	{
		'question': 'Նշվածներից որ՞ն է չփակվող թեգ՝',
		'answer' : '<hr>',
		'variant': [
		'<div>',
		'<ul>',
		'<span>',
		'<hr>'
		],
	},
	{
		'question': 'Ո՞ր HTML թեգն է տեքստը բերում կենտրոն',
		'answer' : '<center>Տեքստ</center>',
		'variant': [
		'<p align="justify">Տեքստ</p> ',
		'<p>Տեքստ</p>',
		'<span align="justify">Տեքստ</span>',
		'<center>Տեքստ</center>'
		],
	},
	{
		'question': 'Ընտրեք կոդավորումը նշելու ճիշտ եղանակը',
		'answer' : '<meta content="text/html; charset=UTF-8"/>',
		'variant': [
		'<html encoding="UTF-8"> ... </html>',
		'<meta content="text/html; charset=UTF-8"/>',
		'<meta name="encoding" content-type="text/html; UTF-8" />',
		'<body encoding="UTF-8"> ... </body>'
		],
	},
	{
		'question': 'Ընտրեք այն թեգը, որը չի օգտագործվում <table> ստեղծելու ժամանակ',
		'answer' : '<row>',
		'variant': [
		'<row>',
		'<th>',
		'<tbody>',
		'<tr>'
		],
	},
	{
		'question': 'Ինչի՞ համար է նախատեսված <s> և <strike> թեգերը',
		'answer' : 'Տեքստը վրագծելու համար',
		'variant': [
		'Տեքստը ընդգծելու համար',
		'Տեքստը վրագծելու համար',
		'Տեքստը փոքրացնելու համար',
		'Տեքստը մեծացնելու համար'
		],
	},
	{
		'question': 'Ընտրեք այն ատրիբուտը, որի օգնությամբ նշվում է  ֆորմի պարունակությունը ուղարկելու հասցեն',
		'answer' : 'action',
		'variant': [
		'link',
		'href',
		'action',
		'GET'
		],
	},
	{
		'question': 'type ատրիբուտի ո՞ր արժեքն է նախատեսված form-ի լրացված պարունակությունը ջնջելու համար',
		'answer' : 'type="reset"',
		'variant': [
		'type="resetbutton"',
		'type="reset"',
		'type="submit"',
		'type="clear"'
		],
	},
	{
		'question': 'Թեգերի ո՞ր դասավորությունն է ճիշտ',
		'answer' : '<p> Ողջույն <i>աշխարհ</i></p>',
		'variant': [
		'<p>Ողջույն <i>աշխարհ<i></p>',
		'<p>Ողջույն <i>աշխարհ</p></i>',
		'<p>Ողջույն <i>աշխարհ</p>',
		'<p> Ողջույն <i>աշխարհ</i></p>'
		],
	},
	{
		'question': 'Ո՞ր ատրիբուտի միջոցով է հնարավոր բջջի (<td>) պարունակությունը հավասարեցնել դեպի աջ',
		'answer' : '<td align="right">',
		'variant': [
		'<td right="right">',
		'<td align="right">',
		'<td valign="right">',
		'<td float="right">'
		],
	},
	{
		'question': 'Ո՞ր HTML ատրիբուտն է սահմանում բջջի(<td>) և նրա պարունակության միջև հեռավորությունը',
		'answer' : 'cellpadding',
		'variant': [
		'cellpadding',
		'cellspacing',
		'cellmargin',
		'Այդպիսի ատրիբուտ գոյություն չունի'
		],
	},
	{
		'question': 'Ո՞ր թեգի օգնությամբ է հնարավոր էջի բացման ժամանակ կատարել վերահղում դեպի այլ URL',
		'answer' : '<a>-թեգի օգնությամբ',
		'variant': [
		'<a>-թեգի օգնությամբ',
		'<link>-թեգի օգնությամբ',
		'<meta>-թեգի օգնությամբ',
		'Անհնար է'
		],
	},
	{
		'question': 'Ո՞ր թեգի օգնությամբ կարելի է ստեղծել համարակալված ցանկ',
		'answer' : '<ol>',
		'variant': [
		'<ol>',
		'<list>',
		'<ul>',
		'<list type="number">'
		],
	},
	];

	function step(){
		$('.ans').removeClass('bg-danger bg-success green');

		obj = shuffle(obj);

		var step = obj[count];
		var ans = $('.ans');

		step.variant = shuffle(step.variant);

	console.log(step.variant.length)
		for(var i = 0; i < step.variant.length; i++){
			ans.eq(i).text(step.variant[i]);
			if (step.variant[i] == step.answer) {
				ans.eq(i).attr('data-name', 'true');
			}
		}
		$('.question').text(obj[count].question);
	}

	function dec(){
		var firepf = $('.firepf').hasClass('active');
		var timer=$('.tim').text();

		$('.tim').text(--timer);

		if(timer==0){
			count = 0;
			modal.on('hidden.bs.modal', function(){
				$('.tim').text(60);
				timer=$('.tim').text();
				clearInterval(int);
				int=setInterval(dec,1000);
				step();
			});
			clearInterval(int);
			modal.find('.modal-body').text('Timeout');
			modal.modal('show');

			if(firepf){
				modal.find('.modal-body').text('Timeout. You win $'+$('.firepf.active:first').find('b').text());
			}
			$('.ul li').removeClass('active');
			step();
		}
		else if(n_timer){
			clearInterval(int);
			n_timer = false;
			$('.tim').text(60);
			timer=$('.tim').text();
			setTimeout(function(){
				int=setInterval(dec,1000);
			},3300)
		}
	}

	$('#fifty').on('click', function(){
		var ans = $('.ans');
		for(var i = 0; i < ans.length; i++){
			if (ans.eq(i).attr('data-name')) {
				switch(i){
					case 0: 
					ans.eq(i+1).html('');
					ans.eq(i+3).html('');
					break;
					case 1: 
					ans.eq(i+2).html('');
					ans.eq(i-1).html('');
					break;
					case 2: 
					ans.eq(i-2).html('');
					ans.eq(i+1).html('');
					break;
					case 3: 
					ans.eq(i-3).html('');
					ans.eq(i-1).html('');
					break;
				}
			}
		}
		$('#fifty').prop('disabled',true);			
	});

	$('.ans').on('click', function(){
		var that = $(this)
		var answer = $(this).text();
		that.addClass('bg-warning')	
		if (answer == obj[count].answer){
			setTimeout(function(){
				that.addClass('bg-success green').removeClass('bg-warning');
				var dol = $('.ul .li'+count).addClass('active');
				count++;
				setTimeout(function(){
					step();
				},3000);
			},1000);
		}
		else{
			setTimeout(function(){
				that.addClass('bg-danger').removeClass('bg-warning');
				for(var x in $('.ans')){
					if($('.ans').eq(x).text() == obj[count].answer){
						$('.ans').eq(x).addClass('bg-success green');					
					}
				}
				count = 0;
				var firepf = $('.firepf').hasClass('active');
				modal.find('.modal-body').text('You are lost.');
				
				setTimeout(function(){
					if(firepf){
						modal.find('.modal-body').text('You win $'+$('.firepf.active:first').find('b').text());
					}
					modal.modal('show')
					$('.ul li').removeClass('active')
					$('.ans').removeClass('bg-danger bg-success green');
					step()
				},4000);
			},1000);
		}
	});

	$("#hall").on("click", function(){

		$('#hall_modal').modal('show');

		var hall = $("#hall");
		hall.prop('disabled',true);

		var a = $(".variants p:nth-child(1)");
		var b = $(".variants p:nth-child(2)");
		var c = $(".variants p:nth-child(3)");
		var d = $(".variants p:nth-child(4)");
		var hall_div = $("#hall_div");

		if (a.attr('data-name') == 'true') {
			var height = Math.floor(Math.random() * 300) + 50;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>A</span></div>');
		}
		else{
			var height = Math.floor(Math.random() * 190) + 1;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>A</span></div>');
		}
		if (b.attr('data-name') == 'true') {
			var height = Math.floor(Math.random() * 300) + 50;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>B</span></div>');
		}
		else{
			var height = Math.floor(Math.random() * 190) + 1;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>B</span></div>');
		}
		if (c.attr('data-name') == 'true') {
			var height = Math.floor(Math.random() * 300) + 50;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>C</span></div>');
		}
		else{
			var height = Math.floor(Math.random() * 190) + 1;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>C</span></div>');
		}
		if (d.attr('data-name') == 'true') {
			var height = Math.floor(Math.random() * 300) + 50;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>D</span></div>');
		}
		else{
			var height = Math.floor(Math.random() * 190) + 1;
			hall_div.append('<div class="hall_div_line" style="height: '+height+'px;"><span>D</span></div>');
		}
	});

	$('.ans').click(function(){n_timer=true;});

	function shuffle(a) {
		for (let i = a.length - 1; i >= 0; i--){
			const j = Math.round(Math.random() * (i + 1));
			[a[i], a[j]] = [a[j], a[i]];
		}
		return a;
	}
});