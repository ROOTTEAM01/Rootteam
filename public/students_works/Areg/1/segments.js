$(function() {


	getClockValue();
	setInterval(getClockValue, 1000);

	function getClockValue() 
	{
		time_val(a=2, b=8);
		time = new Date();
		hours = time.getHours();
		minutes = time.getMinutes();
		seconds = time.getSeconds();

		if(hours < 10){
			hour_val(c=9, d=11);
			segmentsChange(hours, zero=1, num=2);
		}else{
			hour_val(c=12, d=16);
			hours = hours.toString().split('');
			segmentsChange(hours[0], zero=null, num=1);
			segmentsChange(hours[1], zero=null, num=2);
		}

		if(minutes < 10){
			min_val(e=19, f=21);
			segmentsChange(minutes, zero=3, num=4);
		}else{
			min_val(e=22, f=26);
			minutes = minutes.toString().split('');
			segmentsChange(minutes[0], zero=null, num=3);
			segmentsChange(minutes[1], zero=null, num=4);
		}

		if(seconds < 10){
			sec_val(g=29, h=31);
			segmentsChange(seconds, zero=5, num=6);
		}else{
			sec_val(g=32, h=36);
			seconds = seconds.toString().split('');
			segmentsChange(seconds[0], zero=null, num=5);
			segmentsChange(seconds[1], zero=null, num=6);
		}

		if($('.point').css('opacity') == 1){
			point_val(k=39, l=41);
			$('.point').css('opacity', 0);
		}else{
			point_val(k=42, l=44);
			$('.point').css('opacity', 1);
		}
	}

	function segmentsChange(val, zero, num)
	{
		if(zero !== null){
			zero_val(m=49, n=58);
			$(`.num_${zero} .top`).css('border-top-color', '#ffffffcc');
			$(`.num_${zero} .top_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${zero} .top_right`).css('border-right-color', '#ffffffcc');
			$(`.num_${zero} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${zero} .center`).addClass('center_2');
			$(`.num_${zero} .bottom_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${zero} .bottom_right`).css('border-right-color', '#ffffffcc');
			$(`.num_${zero} .bottom`).css('border-bottom-color', '#ffffffcc');
		}
		
		switch (+val){
			case (0):
			seg_val(o=62, p=67);
			$(`.num_${num} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${num} .center`).addClass('center_2');
			$(`.num_${num} .bottom_left`).css('border-left-color', '#ffffffcc');
			break;

			case (1):
			seg_val(o=69, p=77);
			$(`.num_${num} .top`).css('border-top-color', 'transparent');
			$(`.num_${num} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${num} .center`).addClass('center_2');
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (2):
			seg_val(o=79, p=88);
			$(`.num_${num} .top`).css('border-top-color', '#ffffffcc');
			$(`.num_${num} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .center`).css('border-bottom-color', '#ffffffcc');
			$(`.num_${num} .center`).removeClass('center_2');
			$(`.num_${num} .bottom_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${num} .bottom_right`).css('border-right-color', 'transparent');
			$(`.num_${num} .bottom`).css('border-bottom-color', '#ffffffcc');
			break;

			case (3):
			seg_val(o=90, p=95);
			$(`.num_${num} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom_right`).css('border-right-color', '#ffffffcc');
			break;

			case (4):
			seg_val(o=97, p=103);
			$(`.num_${num} .top`).css('border-top-color', 'transparent');
			$(`.num_${num} .top_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (5):
			seg_val(o=105, p=111);
			$(`.num_${num} .top`).css('border-top-color', '#ffffffcc');
			$(`.num_${num} .top_right`).css('border-right-color', 'transparent');
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom`).css('border-bottom-color', '#ffffffcc');
			break;

			case (6):
			seg_val(o=113, p=117);
			$(`.num_${num} .top_right`).css('border-right-color', 'transparent');
			$(`.num_${num} .bottom_left`).css('border-left-color', '#ffffffcc');
			break;

			case (7):
			seg_val(o=119, p=127);
			$(`.num_${num} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .top_right`).css('border-right-color', '#ffffffcc');
			$(`.num_${num} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${num} .center`).addClass('center_2');
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${num} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (8):
			seg_val(o=129, p=136);
			$(`.num_${num} .top_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${num} .center`).css('border-bottom-color', '#ffffffcc');
			$(`.num_${num} .center`).removeClass('center_2');
			$(`.num_${num} .bottom_left`).css('border-left-color', '#ffffffcc');
			$(`.num_${num} .bottom`).css('border-bottom-color', '#ffffffcc');
			break;

			case (9):
			seg_val(o=138, p=141);
			$(`.num_${num} .bottom_left`).css('border-left-color', 'transparent');
			break;
		}
	}

	code_1 = getClockValue.toString().split('\n').concat(segmentsChange.toString().split('\n'));
	code_2 = getClockValue.toString().split('\n').length;

	for (i = 0; i < code_1.length; i++)
	{
		(i <= code_2-1) ? $('.code_1').append(`<pre class="code">${code_1[i]}</pre>`) : $('.code_2').append(`<pre class="code">${code_1[i]}</pre>`);
	}

	function time_val()
	{	
		for (i = a; i < b; i++)
		{	
			if(i >= a && i <= b)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = a; j < b; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function hour_val()
	{	
		for (i = c; i < d; i++)
		{	
			if(i >= c && i <= d)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = c; j < d; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function min_val()
	{	
		for (i = e; i < f; i++)
		{	
			if(i >= e && i <= f)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = e; j < f; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function sec_val()
	{	
		for (i = g; i < h; i++)
		{	
			if(i >= g && i <= h)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = g; j < h; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function point_val()
	{	
		for (i = k; i < l; i++)
		{	
			if(i >= k && i <= l)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = k; j < l; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function zero_val()
	{	
		for (i = m; i < n; i++)
		{	
			if(i >= m && i <= n)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = m; j < n; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}

	function seg_val()
	{	
		for (i = o; i < p; i++)
		{	
			if(i >= o && i <= p)
			{
				$('.code').eq(i).css('color', 'red');
				res = setTimeout(reset, 200);
			}
		}

		function reset()
		{
			for (j = o; j < p; j++)
			{
				$('.code').eq(j).css('color', '#ffffff');
			}
		}
	}
});