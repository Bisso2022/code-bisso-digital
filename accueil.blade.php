@extends ('layouts.contenu_site')
@section('style_accueil')
<link rel="stylesheet" href="{{ asset('css/css_site/style_accueil.css') }}">
@endsection
@section('content')
<section class="section_accueil_header">
    @include('partials.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="animate__animated animate__zoomIn">Votre partenaire</h1>
                <p class="animate__animated animate__zoomIn animate__delay-1s">web & mobile<p>
                <ul>
                    <li><a href="{{route('blogs')}}"  ><button  type="button" class="btn btn-primary animate__animated animate__backInLeft animate__delay-3s">Demande de devis </button></a></li>
                    <li ><a href="{{route('contacts')}}"><button type="button" class="btn btn-secondary animate__animated animate__backInLeft animate__delay-2s">Contacter-nous</button></a></li>
                </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="section_accueil_section1">
    <div class="container">
        <div class="row">
            <div class="col-md-5" data-aos="zoom-in-down" data-aos-offset="400"  data-aos-easing="linear">
            <img src="{{URL::asset('css/image_site/ordinateur_v1.png')}}" alt="ordinateur portable" width="100%" height="500">
            </div>
            <div class="col-md-7" data-aos="zoom-in-down" data-aos-offset="450"  data-aos-easing="linear">
                <h1>VOUS AVEZ UN PROJET DE SITE WEB ?</h1>
                <p>
                Bisso Digital, agence de développement web, vous accompagne dans la réalisation de 
                votre site internet, de la phase de conception à la restitution clés en main. Notre équipe 
                de professionnelle en UX/UI design, développement et graphisme sont à l’écoute de vos 
                projets. Site vitrine, site e-commerce, application mobile sur mesure tout est possible. 
                Découvrez l’ensemble de nos projets ci-dessous.
                </p>
                <a href="{{route('about')}}"><button class="btn btn-primary">Découvrir notre agence</button></a>
            </div>
        </div>
    </div>
</section>
<section class="section_accueil_service">
    <div class="container">
        <div class="row">
            <h1>Nos services</h1>
            <p>BISSO DIGITAL veille à offrir des services de qualités à ses clients, en repondant à
                leurs besoins et aussi à leurs objectifs.<br>
                Découvrez nos prestations de services 
            </p>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="300">
            <img src="{{URL::asset('css/image_site/site-internet.png')}}" alt="icon site web" width="45" height="45">
                <h2>Site web</h2>
                <p>Nous créons des sites web responsives adaptables à toutes les tailles des écrans
                    qui s'adaptent sur vos ordinateurs, tablettes et téléphones portables.
                </p>
                <a href="{{route('services')}}"><button class="btn btn-primary">En savoir +</button></a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="400">
            <img src="{{URL::asset('css/image_site/application-mobile.png')}}" alt="icon application web" width="45" height="45">
                <h2>App web & Mobile</h2>
                <p>Nous développons les applications web et mobiles dont les fonctionnalités repondent
                    tout simplement au besoin de votre activité.
                </p>
                <a href="{{route('services')}}"><button class="btn btn-primary">En savoir +</button></a>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="500">
            <img src="{{URL::asset('css/image_site/app.png')}}" alt="icon application desktop" width="45" height="45">
                <h2>App desktop</h2>
                <p>Nous mettons  en place des logiciels de bureau destinés en rapport avec vos activités, des logiciels
                    forts et solides qui vous facilites le travail et l'exécution de vos tâches. </p>
                <a href="{{route('services')}}"><button class="btn btn-primary">En savoir +</button></a>
            </div>
        </div>
    </div>
</section>
<section class="section_accueil_appel">
    <div class="container text-center">
        <div class="row">
            <h1>Pourquoi faire appel à nous ?</h1>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="200">
                <img src="{{URL::asset('css/image_site/service-clients.png')}}" alt="icon accompagnement" width="68" height="37%">
                <p>Accompagnement de A à Z</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="300">
                <img src="{{URL::asset('css/image_site/design-tool.png')}}" alt="icon solution" width="68" height="37%">
                <p>Solution sur-mesure</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="400">
                <img src="{{URL::asset('css/image_site/approuve.png')}}" alt="icon expertise" width="68" height="37%">
                <p>Expertises maitrisées</p>
            </div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="500">
            <img src="{{URL::asset('css/image_site/24h.png')}}" alt="icon 24h/24" width="68" height="37%">
            <p>Réactivité 24h/24</p>    
        </div>
        </div>
    </div>
</section>
<section class="section_accueil_projet">
    <div class="container ">
        <div class="row">
            <h1>Quelques projets  clients qui pourraient vous interesser</h1>
            <p class="p">Ils décolent avec nous</p>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="300">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/bg-projet1.jpg')}}" alt="maquete agence asicn" width="100%" height="170">
                    <div class="card-body">
                        <p>Asicn</p>
                        <p class="icon"><img src="{{URL::asset('css/image_site/heart-white.png')}}" alt="icon coeur" width="17" height="17"> 300</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <div class="card" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="400">
                    <img src="{{URL::asset('css/image_site/bg-projet2.jpg')}}" alt="bisso digita logo" width="100%" height="170">
                    <div class="card-body">
                        <p>Association AI HIDN</p>
                        <p class="icon"><img src="{{URL::asset('css/image_site/heart-LIKED.png')}}" alt="maquete ai hind" width="17" height="17"> 300</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-in-up" data-aos-easing="linear" data-aos-offset="500">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/mak_solace.jpg')}}" alt="maquette solace car" width="100%" height="170">
                    <div class="card-body">
                    <p>Solace car</p>
                    <p class="icon"><img src="{{URL::asset('css/image_site/heart-white.png')}}" alt="bisso digita logo" width="17" height="17"> 256</p>
                    </div>
                </div>
            </div><br>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{route('blogs')}}"><button class="btn btn-primary">Demander un devis</button></a>
            </div>
        </div>
    </div>
</section>
<section class="testimonials">
	<div class="container">
      <div class="row">
          <h1>Nos avis</h1>
        <div class="col-sm-12">
          <div id="customers-testimonials" class="owl-carousel">
            <!--TESTIMONIAL 1 -->
            <div class="item">
              <div class="shadow-effect">
                <p>
                    Chaque jour est différent, je travaille dans
                     un environnement qui évolue rapidement. J'aime pouvoir
                      interagir avec des personnes très différentes, et partager notre
                       passion et notre enthousiasme chaque jour au sein de l'agence
                </p>
                <h5>Chef projets & Full-stack Developper</h5>
              </div>
              <div class="testimonial-name">Ardèche Mokoko</div>
            </div>
            <!--END OF TESTIMONIAL 1 -->
            <!--TESTIMONIAL 2 -->
            <div class="item">
              <div class="shadow-effect">
                <p>
                Alliant créativité et savoir-faire de la conception numérique, l’agence 
                Bisso Digital a su développer des solutions qui transforment au mieux le 
                quotidien des entreprises marocaines et mondiales.
                </p>
                <h5>Developper Back-end</h5>
            </div>
              <div class="testimonial-name">Abdoul Karim</div>
            </div>
            <!--END OF TESTIMONIAL 2 -->
            <!--TESTIMONIAL 3 -->
            <div class="item">
              <div class="shadow-effect">
                    <p>
                    Nous avons toujours su que le succès de nos clients était notre objectif. Aujourd'hui, nous nous 
                    sommes également fixé un autre objectif  devenir une agence de conception numérique de 
                    classe mondiale. Nous travaillons constamment sur les nouvelles technologies et innovons afin 
                    de pouvoir offrir à nos clients les services les plus remarquables du secteur.
                    </p>      
                    <h5>Responsable de la communication</h5>        
                </div>
              <div class="testimonial-name">Gaston Omoua</div>
            </div>
            <!--END OF TESTIMONIAL 3 -->
            <!--TESTIMONIAL 4 -->
            <div class="item">
              <div class="shadow-effect">
                    <p>
                    Nous avons toujours su que le succès de nos clients était notre objectif. Aujourd'hui, nous nous 
                    sommes également fixé un autre objectif  devenir une agence de conception numérique de 
                    classe mondiale. Nous travaillons constamment sur les nouvelles technologies et innovons afin 
                    de pouvoir offrir à nos clients les services les plus remarquables du secteur.
                    </p>   
                    <h5>Infographiste</h5>           
                </div>
              <div class="testimonial-name">Mehdi oyomé</div>
            </div>
            <!--END OF TESTIMONIAL 4 -->
            <!--TESTIMONIAL 5 -->
            <div class="item">
              <div class="shadow-effect">
                <p>
                L'agence est plus qu'une société c'est une famille, qui agit comme tel 
                envers ses clients. Nous prenons toujours en compte les besoins du client et 
                maintenons un rapport à la étroit et professionnel pour répondre au mieux à ses besoins.
                </p>
                <h5>Developper Front-end</h5>  
            </div>
              <div class="testimonial-name">Jordan Obam</div>
            </div>
            <!--END OF TESTIMONIAL 5 -->
          </div>
        </div>
      </div>
      </div>
    </section>
    <section class="section_accueil_avi">
        <div class="container">
            <div class="row">
                <h1>Les avis reçus des clients satisfaits</h1>
                <p><i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i> 
                <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i> <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
                <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
                <i class="fa fa-star-o" aria-hidden="true"></i>
            </p>
            <div class="col-md-6">
            <p><img src="{{URL::asset('css/image_site/google.png')}}" alt="bisso digita logo" width="22" height="22"> <span>4.9</span> <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
            <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
            <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
            <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i>
            <i class="fa fa-star" style="color:#FFDC0F;" aria-hidden="true"></i> 47 avis</p>
            </div>
            <div class="col-md-6">
                <ul>
                    <li>
                        <a href="{{route('contacts')}}">
                            <button class="btn btnnone"><i class="fa fa-calendar" aria-hidden="true"></i> Reserver un rdv</button>
                        </a>
                    </li>
                    <li>
                        <a href="tel:+212674070592">
                            <button class="btn btn-primary"><i class="fa fa-phone" aria-hidden="true"></i> Rappel & devis</button>
                        </a>
                    </li>
                </ul>
               
                
            </div>
            </div>
        </div>
    </section>
    <!-- END OF TESTIMONIALS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js" integrity="sha512-gY25nC63ddE0LcLPhxUJGFxa2GoIyA5FLym4UJqHDEMHjp8RET6Zn/SHo1sltt3WuVtqfyxECP38/daUc/WVEA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    jQuery(document).ready(function($) {
        		"use strict";
        		//  TESTIMONIALS CAROUSEL HOOK
		        $('#customers-testimonials').owlCarousel({
		            loop: true,
		            center: true,
		            items: 3,
		            margin: 0,
		            autoplay: true,
		            dots:true,
		            autoplayTimeout: 8500,
		            smartSpeed: 450,
		            responsive: {
		              0: {
		                items: 1
		              },
		              768: {
		                items: 2
		              },
		              1170: {
		                items: 3
		              }
		            }
		        });
        	});
</script>
@endsection