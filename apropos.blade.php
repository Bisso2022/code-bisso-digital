@extends ('layouts.contenu_site')
@section("style_apropos")
<link rel="stylesheet" href="{{ asset('css/css_site/style_apropos.css') }}">
@endsection
@section('content')
<section class="section_apropos_header">
    @include('partials.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="animate__animated animate__zoomIn">Qui sommes-nous ?</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="section_apropos_section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left" >
                <h1 data-aos="zoom-in-down" data-aos-offset="400"  data-aos-easing="linear">Bisso-Digital</h1>
                <p data-aos="zoom-in-down" data-aos-offset="400"  data-aos-easing="linear">Votre agence web qui vous accompagne dans le développement web.</p>
            </div>
            <div class="col-md-6 rigth text-center" >
                <p data-aos="zoom-in-down" data-aos-offset="450"  data-aos-easing="linear">Afin de vous faire remarquer sur internet, Bisso-Digital votre agence web vous aide et vous accompagne
                    dans la réalisation de vos projets tant vers le domaine de la création de sites web, applications web, mobiles,
                    des logiciels desktop et aussi dans le marketing digital.<br>
                    Notre mission consiste à assurer votre visibilité de projets sur internet et aussi de proposer
                    des solutions nécessaires et primordiales en terme de vos besions.<br>
                    Notre équipe met à votre disposition l'ensemble des techniques et outils nécessaires pour la réalisation de vos projets.
                    Nous assurons le développement de vos projets, de l'intégration de contenu 
                    jusqu'à la mise en ligne  de votre projet.<br>
                    Notre agence repond aussi à vos besoins en webmarketing.
                </p>
                <a href="{{route('blogs')}}"><button data-aos="zoom-in-down" data-aos-offset="450"  data-aos-easing="linear" class="btn btn-primary">Demande devis</button></a>
            </div>
        </div>
    </div>
</section>

<section class="section_apropos_section3">
    <div class="container">
        <div class="row">
            <h1>Notre agence et notre équipe</h1>
            <div class="col-md-3"></div>
            <div class="col-md-3" data-aos="zoom-out-up"  data-aos-offset="450"  data-aos-easing="linear">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/ardeche.jpg')}}" width="100%"  alt="mokoko ardeche photo">
                <div class="card-body" >
                    <h5 class="card-title">Ardèche mokoko</h5>
                    <p class="card-text">Chef-projets & full-stack developper</p>
                </div>
                </div>
            </div>
            <div class="col-md-3"  data-aos="zoom-out-up"  data-aos-offset="500"  data-aos-easing="linear">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/gaston.png')}}" width="100%"  alt="gaston omoua photo">
                <div class="card-body">
                    <h5 class="card-title">Gaston omoua</h5>
                    <p class="card-text">Responsable communication</p>
                </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-out-up"  data-aos-offset="300"  data-aos-easing="linear">
                <div class="card">
                        <img src="{{URL::asset('css/image_site/mehdi.png')}}" width="100%"  alt="mehdi oyome photo">
                    <div class="card-body">
                        <h5 class="card-title">Mehdi  Oyone</h5>
                        <p class="card-text">Graphiste</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-out-up"  data-aos-offset="400"  data-aos-easing="linear">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/abdoul.png')}}" width="100%"   alt="abdoul karim photo">
                    <div class="card-body">
                        <h5 class="card-title">Abdoul Karim</h5>
                        <p class="card-text">Back-end developper</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3" data-aos="zoom-out-up"  data-aos-offset="500"  data-aos-easing="linear">
                <div class="card">
                    <img src="{{URL::asset('css/image_site/gad.jpeg')}}" width="100%"    alt="gad obam photo">
                    <div class="card-body">
                        <h5 class="card-title">Gad Obam</h5>
                        <p class="card-text">Front-end developper</p>
                    </div>
                </div>
            </div>
            
            <h4></h4>
        </div>
    </div>
</section>
<section class="section_apropos_team">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" data-aos="zoom-out-up" data-aos-offset="400"  data-aos-easing="linear">
                <img src="{{URL::asset('css/image_site/img_teams.png')}}" width="100%"  alt="bisso digital logo" >
            </div>
            <div class="col-md-5 text-center" data-aos="zoom-out-up" data-aos-offset="400"  data-aos-easing="linear">
                <h1>Notre historique</h1>
                <p>Dans le cadre de notre dernière année de la formation en développement web et mobile à l'université
                    de Sorbonne Paris Nord, nous avons décidé de créer une agence web pour mettre en fin l'ensemble de nos
                    connaissances à la disposition des particuliers et des entreprises.<br>
                    Notre équipe est composée de trois développeurs plus un responsable de communication et un graphiste. Le projet Bisso-Digital
                    est pour nous un véritable succès sur le plan universitaire et aussi proféssionnel, car aujourd'hui notre
                    présence est visible au niveau internationnal et pour nous celà demeure un grand exploit.<br>
                    Notre expertise est aujourd'hui à votre disposition pour tout besoin
                </p>
                <a href="{{route('contacts')}}"><button class="btn btn-primary">Contacter-nous</button></a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>

@endsection