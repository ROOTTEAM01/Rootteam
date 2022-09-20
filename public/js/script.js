function changeLang(language, el) {
	var container = document.querySelector('.chooseLang').classList;
	el = el.classList;

	if (container.contains('open')) {
		container.remove('open');
		if (!el.contains('chosen')) {

			document.querySelector('.chooseLang .chosen').classList.remove('chosen');
			el.add('chosen');

		}

		    let lang='arm';


        if(el[1]=='en-lang')
           lang='en';
      window.location.href = url+'/locale/'+lang;
           
     
	}

	container.add('open');

}