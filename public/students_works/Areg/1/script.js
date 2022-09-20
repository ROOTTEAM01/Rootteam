$(function() {

	point = 1;
	setInterval(blink, 250);
	function blink() 
	{
		(point) ? point = 0 : point = 1;
		(point) ? $('.point').css('opacity', 0) : $('.point').css('opacity', 1);
	}

	getClockValue();
	setInterval(getClockValue, 1000);
	function getClockValue() 
	{
		time = new Date();
		hours = time.getHours();
		minutes = time.getMinutes();
		seconds = time.getSeconds();

		if(seconds < 10){
			segmentsChange(seconds, zero=5, val=6);
		}else{
			seconds = seconds.toString().split('');
			segmentsChange(seconds[0], zero=null, val=5);
			segmentsChange(seconds[1], zero=null, val=6);
		}

		if(minutes < 10){
			segmentsChange(minutes, zero=3, val=4);
		}else{
			minutes = minutes.toString().split('');
			segmentsChange(minutes[0], zero=null, val=3);
			segmentsChange(minutes[1], zero=null, val=4);
		}

		if(hours < 10){
			segmentsChange(hours, zero=1, val=2);
		}else{
			hours = hours.toString().split('');
			segmentsChange(hours[0], zero=null, val=1);
			segmentsChange(hours[1], zero=null, val=2);
		}
	}

	function segmentsChange(args) 
	{

		$(`.num_${zero} .top`).css('border-top-color', 'white');
		$(`.num_${zero} .top_left`).css('border-left-color', 'white');
		$(`.num_${zero} .top_right`).css('border-right-color', 'white');
		$(`.num_${zero} .center`).css('border-bottom-color', 'transparent');
		$(`.num_${zero} .center`).addClass('center_2');
		$(`.num_${zero} .bottom_left`).css('border-left-color', 'white');
		$(`.num_${zero} .bottom_right`).css('border-right-color', 'white');
		$(`.num_${zero} .bottom`).css('border-bottom-color', 'white');

		switch (+args){

			case (0):
			$(`.num_${val} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${val} .center`).addClass('center_2');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'white');
			break;

			case (1):
			$(`.num_${val} .top`).css('border-top-color', 'transparent');
			$(`.num_${val} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .top_right`).css('border-right-color', 'white');
			$(`.num_${val} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${val} .center`).addClass('center_2');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (2):
			$(`.num_${val} .top`).css('border-top-color', 'white');
			$(`.num_${val} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .center`).css('border-bottom-color', 'white');
			$(`.num_${val} .center`).removeClass('center_2');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'white');
			$(`.num_${val} .bottom_right`).css('border-right-color', 'transparent');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'white');
			break;

			case (3):
			$(`.num_${val} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom_right`).css('border-right-color', 'white');
			break;

			case (4):
			$(`.num_${val} .top`).css('border-top-color', 'transparent');
			$(`.num_${val} .top_left`).css('border-left-color', 'white');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (5):
			$(`.num_${val} .top`).css('border-top-color', 'white');
			$(`.num_${val} .top_right`).css('border-right-color', 'transparent');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'white');
			break;

			case (6):
			$(`.num_${val} .top_right`).css('border-right-color', 'transparent');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'white');
			break;

			case (7):
			$(`.num_${val} .top_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .top_right`).css('border-right-color', 'white');
			$(`.num_${val} .center`).css('border-bottom-color', 'transparent');
			$(`.num_${val} .center`).addClass('center_2');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'transparent');
			break;

			case (8):
			$(`.num_${val} .top`).css('border-top-color', 'white');
			$(`.num_${val} .top_left`).css('border-left-color', 'white');
			$(`.num_${val} .center`).css('border-bottom-color', 'white');
			$(`.num_${val} .center`).removeClass('center_2');
			$(`.num_${val} .bottom_left`).css('border-left-color', 'white');
			$(`.num_${val} .bottom`).css('border-bottom-color', 'white');
			break;

			case (9):
			$(`.num_${val} .bottom_left`).css('border-left-color', 'transparent');
			break;
		}
	}
});