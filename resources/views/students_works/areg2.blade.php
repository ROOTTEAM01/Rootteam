<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	
	<title>Areg</title>
	
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="{{asset('students_works/areg/1/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('students_works/areg/2/style.css')}}">

	<script type="text/javascript" src="{{asset('students_works/areg/2/jquery.js')}}"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="{{asset('students_works/areg/2/main.js')}}"></script>


</head>
<body>
	
	<div class="container-fluid d-flex bgc">
		<div class="col-12 d-flex flex-column justify-content-between p-5">
			<div class="row">
				<div class="col-4 d-flex justify-content-start">
					<button class="btn btn-warning m-1 st">Start</button>
					<button class="btn btn-primary m-1 ed">$</button>
				</div>

				<p class="col-4 pt-2 m-0 text-center text-light tim">60</p>

				<div class="col-4 d-flex justify-content-end">
					<button class="btn btn-primary m-1" id="fifty">50/50</button>
					<button class="btn btn-primary m-1 ph"><i class="fa fa-phone" aria-hidden="true"></i></button>
					<button class="btn btn-primary m-1" id="hall"><i class="fa fa-users" aria-hidden="true"></i></button>
				</div>
			</div>

			<div class="row mt-4 mr-2 justify-content-end">
				<ul class="ul text-light">
					<li class="li14 firepf">
						<span>15</span><b>1 000 000</b>
					</li>
					<li class="li13">
						<span>14</span><b>500 000</b>
					</li>
					<li class="li12">
						<span>13</span><b>250 000</b>
					</li>
					<li class="li11">
						<span>12</span><b>125 000</b>
					</li>
					<li class="li10">
						<span>11</span><b>64 000</b>
					</li>
					<li class="li9 firepf">
						<span>10</span><b>32 000</b>
					</li>
					<li class="li8">
						<span>9</span><b>16 000</b>
					</li>
					<li class="li7">
						<span>8</span><b>8 000</b>
					</li>
					<li class="li6">
						<span>7</span><b>4 000</b>
					</li>
					<li class="li5">
						<span>6</span><b>2 000</b>
					</li>
					<li class="li4 firepf">
						<span>5</span><b>1 000</b>
					</li>
					<li class="li3">
						<span>4</span><b>500</b>
					</li>
					<li class="li2">
						<span>3</span><b>300</b>
					</li>
					<li class="li1">
						<span>2</span><b>200</b>
					</li>	        	  	  
					<li class="li0">
						<span>1</span><b>100</b>
					</li>
				</ul>
			</div>
			
			<div class="row flex-column">
				<div class="col-12">
					<div class="row d-flex justify-content-center mt-5">
						<div class="col-10">
							<p class="p-3 bg-primary text-light text-center question hg" type="text"></p>
						</div>
					</div>

					<div class="row d-flex justify-content-center mt-3 variants">
						<div class="col-5">
							<p class="w-100 bg-primary text-light ans p1" type="text"></p>
						</div>
						<div class="col-5">
							<p class="w-100 bg-primary text-light ans p2" type="text"></p>
						</div>
					</div>

					<div class="row d-flex justify-content-center variants">
						<div class="col-5">
							<p class="w-100 bg-primary text-light ans p3" type="text"></p>
						</div>
						<div class="col-5">
							<p class="w-100 bg-primary text-light ans p4" type="text"></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body text-center">

				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger timeRes" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="hall_modal">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-body text-center pb-0">
					<div id="hall_div">
						
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger timeRes" data-dismiss="modal">Ok</button>
				</div>
			</div>
		</div>
	</div>

</body>
</html>