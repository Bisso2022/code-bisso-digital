<nav id="navbar_top" class="navbar navbar-expand-lg navbar ">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="{{URL::asset('css/image_site/logo (3).png')}}" alt="bisso digital logo" width="65%" ></a>
    <button style="color: #2292F2 !important;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i style="color: #2292F2 !important; " class="fa fa-bars" aria-hidden="true"></i>
    </button>
    <div class="collapse navbar-collapse nav justify-content-center" id="navbarSupportedContent">
      <ul class="navbar-nav " id="navbar-nav ">
        <li class="nav-item">
          <a class="nav-link active" id="l1" aria-current="page" href="/">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="l2"  href="{{ route('about')}}">à propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="l6"  href="{{ route('services')}}">services</a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link" id="l4"  href="{{ route('blogs')}}">Demande devis</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="l5"  href="{{ route('contacts')}}">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function(){
    
		window.addEventListener('scroll', function() {
			if (window.scrollY > 200) {
				document.getElementById('navbar_top').classList.add('fixed-top');
				navbar_height = document.querySelector('.navbar').offsetHeight;
				document.body.style.paddingTop = navbar_height + 'px';
        document.getElementById('l1').classList.add('nav-link1');
        document.getElementById('l2').classList.add('nav-link1');
        document.getElementById('l4').classList.add('nav-link1');
        document.getElementById('l6').classList.add('nav-link1');
        document.getElementById('l5').classList.add('nav-link1');
			} else {
			 	document.getElementById('navbar_top').classList.remove('fixed-top');
				document.body.style.paddingTop = '0';
        document.getElementById('l1').classList.remove('nav-link1');
        document.getElementById('l2').classList.remove('nav-link1');
        document.getElementById('l4').classList.remove('nav-link1');
        document.getElementById('l5').classList.remove('nav-link1');
        document.getElementById('l6').classList.remove('nav-link1');
			} 
		});
	}); 
</script>

    
