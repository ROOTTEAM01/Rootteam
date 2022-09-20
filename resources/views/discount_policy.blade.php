@extends('layouts.main')

@section('title', __('main_lang.discount_title'))

@section('content')
@if(Session::get('locale')=='arm')
<div class="glxavor" style="margin-top: 150px;">
	<h1>Զեղչային Քաղաքականություն</h1>
	<p>«Կոլիբրիլաբ» ընկերությունը, կարևորելով սեփական ուսանողների<br> պահանջմունքները և հաշվի առնելով նրանց ֆինանսական դրությունը, սահմանում է<br> հետևյալ զեղչային քաղաքականությունը</p>
</div>
<div class="ynd">
	<div class="big">	
		<div class="amboxj">
			<p>50%</p>
			<img src="{{asset('images/kal.png')}}" alt="kal">
			<h6>Հաշմանդամություններ ունեցողներ</h6>
			<p class="lo nuyn">Տրամադրում ենք 50% զեղչ սահմանափակ շարժումներ ունեցող ուսանողներին՝ կարևորելով նրանց ներգրավվածությունը ՏՏ ոլորտում։*Անհրաժեշտ է ներկայացնել հաշմանադամության կարգը։</p>
		</div>
		
	</div>
	<div class="big">
		<div class="amboxj">
			<p>30%</p>
			<img src="{{asset('images/ver.png')}}" alt="kal">
			<h6>Պատերազմի մասնակիցներ</h6>
			<p class="lo nuyn">Պատերազմի բոլոր մասնակիցներին տրամադրվում է 30% զեղչ։
*Հասանելիք զեղչից օգտվելու համար անհրաժեշտ է ներկայացնել զինվորական գրքույկը, որտեղ առկա կլինի զինվորական կոմիսարիատի կողմից  պատերազմին մասնակցելը փաստող համապատասխան կնիքը կամ նշումը։
</p>
		</div>
		
	</div>
	<div class="big">
		<div class="amboxj">
			<p>25%</p>
			<img src="{{asset('images/house.png')}}" alt="kal">
			<h6>Մեկ ընտանիքից 2 անձ</h6>
			<p class="lo nuyn">Եթե մեկ ընտանիքից դասընթացներին մասնակցում է 2 անձ, նրանցից յուրաքանչյուրին տրամադրվում է 25% զեղչ։
*Անհրաժեշտ է ներկայացնել համապատասխան փաստաթղթեր(ամուսնության վկայական, ծննդյան վկայական ևն), որոնք կփաստեն դիմորդների՝ մեկ ընտանիքից լինելու փաստը։
</p>
		</div>
	</div>
	<div class="norut">
		<div class="big">
		<div class="amboxj">
			<p>10%</p>
			<img src="{{asset('images/army.png')}}" alt="kal">
			<h6>ՀՀ ԶՈՒ-ում ծառայողներ</h6>
			<p class="lo nuyn">Տվյալ պահի դրությամբ ՀՀ զինված ուժերում ծառայող բոլոր անձինք հնարավորություն ունեն օգտվելու 10% զեղչից, եթե ներկայացնում են զինվորական գրքույկը կամ տեղեկանք՝ համապատասխան զինվորական կոմիսարիատից։</p>
		</div>
	</div>
	<div class="big">
		<div class="amboxj">
			<p>10%</p>
			<img src="{{asset('images/friends.png')}}" alt="kal">
			<h6>Ընկերոջ հետ</h6>
			<p class="lo nuyn">Եթե գալիս ես ընկերոջդ հետ ապա ստանում ես զեղչ՝ 10%-ի չափով։ Յուրաքանչյուր նոր ընկեր ավելացնում է տրամադրվող զեղչի չափը 5%-ով։
*Դիմորդի/ների/ համաձայնությամբ զեղչը կարող է տրամադրվել ինչպես մեկին, այնպես էլ բաշխվել նրանց միջև։
</p>
		</div>
		
	</div>

	</div>
	
</div>
@else
<div class="glxavor" style="margin-top: 150px;">
	<h1>Discount Policy</h1>
	<p>«ColibriLab», proitizing the requests of it's students and regarding their financial situation, has adopted the following discount policy. </p>
</div>
<div class="ynd">
	<div class="big">	
		<div class="amboxj">
			<p>50%</p>
			<img src="{{asset('images/kal.png')}}" alt="kal">
			<h6>People with disabilities</h6>
			<p class="lo nuyn">50% discount for students with limited mobility, highlighting their involvement in the IT field.*It is necessary to present the order of disability.</p>
		</div>
		
	</div>
	<div class="big">
		<div class="amboxj">
			<p>30%</p>
			<img src="{{asset('images/ver.png')}}" alt="kal">
			<h6>Participants of the war</h6>
			<p class="lo nuyn">30% discount is provided to all participants of the war.* To take advantage of the available discount, you need to present a military book, where there will be an appropriate stamp or mark by the military commissariat certifying participation in the war.</p>
		</div>
		
	</div>
	<div class="big">
		<div class="amboxj">
			<p>25%</p>
			<img src="{{asset('images/house.png')}}" alt="kal">
			<h6>2 person from one family</h6>
			<p class="lo nuyn">If 2 person from one family participate in the courses,each of them is provided with a 25% discount.* It is necessary to submit relevant documents (marriage certificate, birth certificate, etc.), which will prove the fact that the applicants are from the same family.
</p>
		</div>
	</div>
	<div class="norut">
		<div class="big">
		<div class="amboxj">
			<p>10%</p>
			<img src="{{asset('images/army.png')}}" alt="kal">
			<h6>Servicemen in the RA Armed Forces</h6>
			<p class="lo nuyn">All persons serving in the RA Armed Forceshave the opportunity to profit from 10% discount, if they present a military book or a certificate from the relevant military commissariat.</p>
		</div>
	</div>
	<div class="big">
		<div class="amboxj">
			<p>10%</p>
			<img src="{{asset('images/friends.png')}}" alt="kal">
			<h6>With friend</h6>
			<p class="lo nuyn">If you come with your friend, you get a 10% discount.Each new friend increases the discount by 5%.With the consent of the applicant(s) the discount can be given to anyone as well as distributed among them. 
			</p>
		</div>
		
	</div>

	</div>
	
</div>

@endif
@endsection















