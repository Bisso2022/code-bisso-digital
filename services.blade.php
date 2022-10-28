@extends ('layouts.contenu_site')
@section('style_services')
<link rel="stylesheet" href="{{ asset('css/css_site/style_services.css') }}">
@endsection
@section('content')
<section class="section_service_header">
    @include('partials.navbar')
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 class="animate__animated animate__zoomIn">Découvrez nos services</h1>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
<section class="section_service_section1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 left"   data-aos-easing="linear">
                <h1 data-aos="zoom-in-down" data-aos-offset="400">BISSO-DIGITAL</h1>
                <p data-aos="zoom-in-down" data-aos-offset="400">Votre agence web qui vous accompagne dans le développement web.</p>
            </div>
            <div class="col-md-6 right"   data-aos-easing="linear">
                <h1  data-aos="zoom-in-down" data-aos-offset="450">Nos prestations</h1>
                <p  data-aos="zoom-in-down" data-aos-offset="450">Nous mettons à votre disposition notre expertise dans les divers domaines notamment, 
                    dans la création des sites web,des applications web, mobiles et aussi 
                    la création des logiciels de bureau.
                </p>
            </div>
        </div>
    </div>
</section>
<section class="section_service_site">
    <div class="container">
       <div class="row">
        <div class="col-md-1"></div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="450"  data-aos-easing="linear">
                <h1>Création de site Web</h1>
                <p>Votre site web, c’est l’image de votre entreprise et aussi de vos activités,
                avec Bisso-Digital vous pouvez demander la création de vos sites web répondant 
                à vos besoins et qui va vous convenir. </p>
                <ul>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Un site web proféssionnel </li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Un site web de qualité</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Un site web bien optimisé</li>
                    <li><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Un site web responsive design</li>
                </ul>
            </div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="500"  data-aos-easing="linear">
                <img src="{{URL::asset('css/image_site/img_site.png')}}" width="100%"  alt="bisso digital logo" >
            </div>
            <div class="col-md-1"></div>
       </div>
    </div>
</section>
<section class="section_service_offre_site">
    <div class="container">
        <div class="row">
            <h1>Découvrez nos offres de création de site internet</h1>
            <div class="col-md-4" data-aos="zoom-out-up"  data-aos-offset="300"  data-aos-easing="linear">
                <div class="card">
                    <div class="card-header">
                        Site web one page
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-chevron-down" style="color:#1599E3" aria-hidden="true"></i> Création site web</h5>
                        <p class="card-text">
                        "site one page" désigne un site Internet dont tous les contenus sont rassemblés sur une
                         page unique. Ces contenus sont alors accessibles en faisant défiler (scrolling) 
                         verticalement, ou plus rarement horizontalement, la page. Ce format de site web s'est 
                         développé avec les comportements de navigation sur mobile. Dans ce cadre, il est en effet
                          plus facile de naviguer au sein d'une page que de passer d'une page à l'autre.
                        </p>
                        <a href="{{route('blogs')}}" class="btn btn-primary">Demander un devis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-out-up"  data-aos-offset="400"  data-aos-easing="linear">
                <div class="card">
                    <div class="card-header">
                        Site web multipages
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-chevron-down" style="color:#1599E3" aria-hidden="true"></i> Création site web</h5>
                        <p class="card-text">
                        Contrairement à un site one-page, le site multipages dispose d’un menu offrant aux 
                        visiteurs la possibilité de savoir où aller et où cliquer.<br>

                        Ce site internet est recommandé pour les entreprises disposant d’une large offre 
                        de contenu, de nombreux produits ou service à offrir et plusieurs pages à structurer.
                        </p>
                        <a href="{{route('blogs')}}" class="btn btn-primary">Demander un devis</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="zoom-out-up"  data-aos-offset="500"  data-aos-easing="linear">
                <div class="card">
                    <div class="card-header">
                        Site web Ecommerce
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><i class="fa fa-chevron-down" style="color:#1599E3" aria-hidden="true"></i> Création site web</h5>
                        <p class="card-text">
                        Un site e-commerce peut également être appelé « boutique en ligne« . 
                        C’est un site internet où sont exposés des produits par un marchand. 
                        Si un internaute souhaite acheter un de ces produits, il devra payer en 
                        ligne grâce à une plateforme bancaire ou autre moyen de paiement.
                        </p>
                        <a href="{{route('blogs')}}" class="btn btn-primary">Demander un devis</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section_service_application">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="400"  data-aos-easing="linear">
                <img src="{{URL::asset('css/image_site/im_app_mo.png')}}" width="100%"  alt="bisso digital logo" >
            </div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="450"  data-aos-easing="linear">
            <h1>Création d'applications Web & Mobiles</h1>
                <p>Une application web (ou web app) est une interface web applicative disponible uniquement 
                    sur le web et accessible via un navigateur internet. C'est une application qui peut être
                     hébergée en cloud ou sur des serveurs dédiés. Toutes les données sont stockées sur un serveur web..<br>
                     Par contre une application mobile, ou « appli », est un logiciel développé spécialement pour être utilisé 
                     sur de petits appareils informatiques sans fil, tels que smartphones et tablettes, plutôt que sur des 
                     ordinateurs de bureau ou portables.
                Nous créons les applications web et mobiles qui conviennent exactement à vos besions.
                </p>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
    <hr>
</section>
<secction class="section_service_logiciel">
<div class="container">
       <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="400"  data-aos-easing="linear">
                <h1>Création de Logiciels</h1>
                <p>Une « application de bureau » (Desktop application en anglais) est un logiciel applicatif qui affiche son interface graphique dans un environnement 
                    de bureau, il est hébergé et exécuté par l'ordinateur de l'usager..<br>
                    Une application Desktop est considérée comme un logiciel applicatif qui est destiné à aider les usagers à effectuer une certaine tâche
                </p>
            </div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="450"  data-aos-easing="linear">
                <img src="{{URL::asset('css/image_site/img_logiciel.png')}}" width="100%"  alt="bisso digital logo" >
            </div>
            <div class="col-md-1"></div>
       </div>
    </div>
</secction>
<section class="section_service_projet">
    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5" data-aos="zoom-out-up"  data-aos-offset="400"  data-aos-easing="linear">
                <img src="{{URL::asset('css/image_site/img_projet.png')}}" width="100%"  alt="bisso digital logo" >
            </div>
            <div class="col-md-5 text-center" data-aos="zoom-out-up"  data-aos-offset="450"  data-aos-easing="linear">
                <h1>Vous avez un projet ?</h1>
                <p>On vous aide à monter votre projet en toute sécurité et en toute confiance avec une garentie de réussite
                    de 100%, pour tout besoin ou éventuelle demande
                </p>
                <a href="{{route('contacts')}}"><button class="btn btn-primary">Contacter-nous</button></a>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</section>
@endsection