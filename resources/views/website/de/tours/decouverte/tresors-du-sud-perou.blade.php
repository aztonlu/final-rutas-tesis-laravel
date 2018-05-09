@extends('website.partials.de.maintrip')
@section('title', 'Trésors du sud Pérou')
@section('keywords', 'machu picchu, agence voyage, voyage de noce, circuit perou, voyage perou, voyage au perou, perou, nomade aventure, le perou, lac titicaca, tour operateur, Agence de voyages au Pérou')
@section('description', 'From the coast to Machu Picchu, this trip combines the main sites of Peru. You will start on the coast with the Ballestas Islands and the Huacachina oasis as well as Nasca and its mysterious lines. You will then continue your journey visiting the beautiful city of Arequipa and the Colca Canyon before heading for Lake Titicaca. Your trip will end with the must-see Cusco region and its Inca sites including the most famous place, the majestic citadel Machu Picchu.')

@section('translate')

    <div class="top-header">
        <div class="wrap-top">
            <div class="info-top pull-left">
                <small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>
            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="#"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en/tours/discovery/peru-bolivia-express"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es/tours/descubrimiento/perou-bolivia-expreso"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de/tours/Entdeckung/peru-bolivien-express"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it/tours/scoperta/peru-bolivia-espresso"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>
        </div>
    </div>

@endsection

@section('content')
<section class="page-img" style="background-image: url('{{url('')}}/img/files/tresors-du-sud-perou.jpg');">
    <div class="container">
        <div class="col-sm-12">
            <ul class="breadcrumb">
                <li><a href=""><span class="icon-home"></span></a></li>
                <li><a href="">Tours</a></li>
                <li><a href="">Decouverte</a></li>
            </ul>
        </div>
    </div>
</section>

<div class="trip-detail">
    <div class="container">
        <div class="col-xs-12">
                    @include('flash::message')
                </div>
        <div class="col-md-9 tab-wrap">
            @foreach($tours as $tour)
            <h2>{{ $tour->title}}</h2>

            <div id="shop-detail">

                <!-- Shop item / START -->
                <div class="shop-item">

                    <div id="image" class="gallery carousel slide" data-wrap="false">
                        <div class="carousel-outer">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <figcaption class="gallery-desc"><span class="icon-locate"></span></figcaption>
                                    <img src="{{url('')}}/{{ $tour->coverpage }}" alt="Image 5"/>
                                </div>

                                
                                <!--<div class='item'>
                                    <figcaption class="gallery-desc"><span class="icon-locate"></span> Islas Ballestas</figcaption>
                                    <img src="{{url('')}}/img/files/tresors-du-sud-perou/ballestas.jpg" alt="Image 7"/>
                                </div>
                                <div class="item">
                                    <figcaption class="gallery-desc"><span class="icon-locate"></span> Arequipa</figcaption>
                                    <img src="{{url('')}}/img/files/tresors-du-sud-perou/arequipa.jpg" alt="Image 8"/>
                                </div>
                                <div class='item'>
                                    <figcaption class="gallery-desc"><span class="icon-locate"></span> Ollantaytambo</figcaption>
                                    <img src="{{url('')}}/img/files/tresors-du-sud-perou/ollantaytambo.jpg" alt="Image 9"/>
                                </div>
                                <div class='item'>
                                    <figcaption class="gallery-desc"><span class="icon-locate"></span> Reserva Nationale des Salinas</figcaption>
                                    <img src="{{url('')}}/img/files/tresors-du-sud-perou/reserva-nationale-des-salinas.jpg" alt="Image 10"/>
                                </div>-->
                            </div>
                        </div>

                        <!-- Indicators -->
                        <ol class="carousel-indicators mCustomScrollbar">
                            
                            
                                <div class='item'>
                                    @foreach($galleries as $gallery)
                                    <li data-target="#image" data-slide-to="0" class="active"><img src="{{url('')}}/{{ $gallery->routeImage }}" alt="Thumb {{ $gallery->id }}"/></li>
                                    @endforeach
                                </div>
                                

                            <!--<li data-target="#image" data-slide-to="1"><img src="{{url('')}}/img/files/tresors-du-sud-perou/cusco.jpg" alt="Thumb 6"/></li>
                            <li data-target="#image" data-slide-to="2"><img src="{{url('')}}/img/files/tresors-du-sud-perou/ballestas.jpg" alt="Thumb 7"/></li>
                            <li data-target="#image" data-slide-to="3"><img src="{{url('')}}/img/files/tresors-du-sud-perou/arequipa.jpg" alt="Thumb 8"/></li>
                            <li data-target="#image" data-slide-to="4"><img src="{{url('')}}/img/files/tresors-du-sud-perou/ollantaytambo.jpg" alt="Thumb 9"/></li>
                            <li data-target="#image" data-slide-to="5"><img src="{{url('')}}/img/files/tresors-du-sud-perou/reserva-nationale-des-salinas.jpg" alt="Thumb 10"/></li>-->
                        </ol>
                    </div>


                </div><!-- Shop item / END -->

            </div>

            <div class="description">
                <h3>En quelques mots...</h3>
                <p>{{ $tour->summary}}</p>
                
            </div>
            @endforeach
            <ul class="nav nav-tabs" data-toggle="tabs">
                <li class="active"><a href="#itenary">Itinéraire</a></li>
                <li class=""><a href="#overview">Organisation</a></li>
            </ul>
 <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
</div>
            <div class="tab-content paper-effect">
                <div class="tab-pane active" id="itenary">
                    @foreach($galleries as $gallery)
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/{{ $gallery->routeImage}}" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">{{ $gallery->name }}</h4>
                            <p>{{ $gallery->description }}</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> 
                                  
                                   @for ($i = 0; $i < count($etapes); $i++)
                                        @if($gallery->id == $etapes[$i]->id_tour_gallery)
                                            <span class="city">{{ $etapes[$i]->nameEtape }}</span>
                                        @endif
                                   @endfor
                                </div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new">{{ $gallery->stay }}</a></div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong>{{ $gallery->transport }}</div>
                            </div>

                        </div>
                    </div>
                    @endforeach
                    <!--<div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-2-paracas.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 2: LIMA - PARACAS - HUACACHINA (406 m)</h4>
                            <p>Départ tôt le matin pour Paracas sur la célèbre route panaméricaine qui longe la côte pacifique. Vous arrivez au port d’où part votre bateau pour les îles Ballestas et découvrez la  richesse de la faune marine locale : éléphants de mer, pélicans, pingouins et autres oiseaux marins profitant du courant froid de Humboldt extrêmement riche en plancton, et donc en poissons !</p>
                            <p>Après cette excursion, vous partez en direction d’Ica où vous déjeunez. Dans l’après midi, vous visitez les vergers et les vignobles d’El Catador où sont produits Pisco (alcool national du Pérou) et vins. C´est l’occasion pour vous de faire vos premières rencontres avec les habitants locaux.</p>
                            <p>En fin d’après-midi, vous rejoignez l’oasis de Huacachina où vous avez la possibilité de faire du sandboard et du buggy sur les dunes de sable au coucher du soleil. Nuit à l’oasis.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Paracas</span> <span class="city">Huacachina</span> <span class="city">Ollantaytambo</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-3-nasca.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 3: HUACACHINA - NAZCA (588m) – AREQUIPA (2400m)</h4>
                            <p>Après le petit-déjeuner, vous partez en direction de la ville de Nazca. En chemin, vous traversez la pampa qui fait l’effet d’un immense livre à ciel ouvert constellé de lignes et de figures dessinées à même le sol.</p>
                            <p>À votre arrivée à Nazca, vous avez la possibilité de survoler ces motifs géométriques et figuratifs connus sous le nom de « lignes de Nazca ». Ces dernières furent découvertes en 1939 par le savant américain Paul Kosok alors qu’il survolait la zone à la recherche de canaux d’irrigation. Cet immenses réseau de lignes, rassemblant des milliers de figures mesurant de 15 à 300 mètres de long sur près de 500 km2, est uniquement visible du ciel. Si vous ne souhaitez pas faire le survol, il est possible de visiter le musée Antonini et le marché artisanal de Nasca.</p>
                            <p>En début d’après-midi, route vers Arequipa. Arrivée dans la soirée.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Huacachina</span> <span class="city">Nazca</span> <span class="city">Arequipa</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-4-nasca.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 4: AREQUIPA (2400m)</h4>
                            <p>Découverte de la ville blanche et de son centre colonial : la place d’armes, le musée Santuarios Andinos, l’église et le couvent de la Compagnie de Jésus ainsi que le couvent Santa Catalina, véritable ville dans la ville avec ses ruelles bordées de maisons colorées.</p>
                            <p>Vous vous rendez ensuite aux miradors de Yanahuara et de Cayma, qui offrent une vue panoramique sur les fabuleux volcans environnants. Retour à l’hôtel et après-midi libre.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Arequipa</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-5-arequipa-santa-catalina.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 5: AREQUIPA (2400m) – CHIVAY (3200m)</h4>
                            <p>Vous partez tôt pour le canyon de Colca, l’un des canyons les plus profonds du monde. Vous passez au pied du Chachani, et traversez la réserve nationale des Salinas et d’Aguada Blanca, peuplée de vigognes sauvages.</p>
                            <p>La route monte petit à petit pour atteindre son point culminant : le mirador des Volcans à 4900m. De là, la vue sur l’Ampato (6400m), le Sabancaya (5976m), et le Huallca Huallca (6025m) est imprenable.</p>
                            <p>Vous redescendez ensuite en direction de Chivay, où vous déjeunez. Dans l’après-midi, vous montez à Canacota pour redescendre ensuite aux sources chaudes de la Calera où vous aurez la possibilité de vous baigner aux thermes (prévoir un petit supplément). Fin de journée libre.</p>

                            <div class="day-description">
                                <div class="etapes"><strong>Etapes:</strong> <span class="city">Aguas caliente</span> <span class="city">Arequipa</span> <span class="city">Chivay</span></div>
                                <div class="hotel"><strong>Hébergement:</strong> <a href="#" target="_new"><span class="icon-moon"></span> Marriot</a></div>
                                <div class="duration"><strong>Heures de marche:</strong> <span class="icon-schedule"></span> 03:00 hrs</div>
                                <div class="transfer"><strong>Transfert:</strong> <span class="icon-bus"></span> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-6-reserve-nationale-salinas.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 6: CHIVAY (3600 m) - CRUZ DEL CONDOR – PUNO (3825 m)</h4>
                            <p>Après le petit-déjeuner, départ pour la Croix du Condor, un mirador qui offre une vue magnifique sur le canyon de Colca dès les premiers rayons du soleil. C’est là que vous pouvez admirer le vol du plus grand oiseau du monde : le condor.</p>
                            <p>Vous partez ensuite à pied en direction du \"Salto del Cura\" (Saut du prêtre). Le sentier offre de splendides perspectives sur le canyon. Sur la route de retour à Chivay, vous découvrez les villages de Yanque, Coporaque, Achoma et Maca, où le mode de vie des habitants a peu changé depuis l’époque inca.</p>
                            <p>Déjeuner à Chivay puis départ en bus pour Puno où vous arrivez dans la soirée.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Chivay</span> <span class="city">Cruz del Condor</span> <span class="city">Puno</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-7-condor.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 7: PUNO (3825 m) - UROS (3812 m) - AMANTANI (3850 m)</h4>
                            <p>Départ en bateau du port de Puno en direction de l’île d\'Amantani, située sur le lac Titicaca. En chemin,  vous vous arrêtez sur les iles flottantes des Uros, où les habitants aymaras construisent leurs habitations sur de gigantesques barques en roseaux (totoras) amarrées à des piquets pour éviter la dérive. Ils vivent de la pêche, de l´artisanat et de la chasse.</p>
                            <p>Votre navigation sur le lac Titicaca (qui signifie « puma de pierre ») se poursuit jusqu’à l\'île d’Amantani, dont vous allez parcourir à pied les sentiers pour profiter pleinement de la vue exceptionnelle sur la cordillère royale bolivienne. Vous faites l´ascension du Pachatata (4200 m) et profitez, si le temps le permet, du magnifique coucher de soleil sur le lac.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Puno</span> <span class="city">Uros</span> <span class="city">Amantani</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>
                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-8-uros-2.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 8: AMANTANI (3850 m) - TAQUILE (3900 m)- PUNO (3825 m)</h4>
                            <p>Tôt le matin, vous quittez vos hôtes d’Amantani pour naviguer en direction de Taquile, une île largement exploitée grâce au système de culture en terrasses, où le mode de vie des habitants a conservé son organisation communautaire héritée de l’époque inca. Si la propriété est privée, le labeur, lui, est collectif : les quelques 300 habitants de l’île travaillent un jour pour eux, un jour pour la communauté. Taquile vit dans une relative autarcie avec les principes incas de \"ne pas voler, ne pas mentir, ne pas faiblir\", restés vivaces depuis des siècles.</p>
                            <p>Depuis les hauteurs du village, vos efforts sont récompensés par une superbe vue sur le lac, la baie de Puno, et la Bolivie (Cordillère Royale) dans les brumes de l’Altiplano. En fin de journée, vous reprenez le bateau et rentrez sur Puno.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Amantani</span> <span class="city">Taquile</span> <span class="city">Puno</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-9-taquile.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 9: PUNO (3825 m) - CUSCO (3350 m)</h4>
                            <p>Départ matinal en bus touristique pour Cusco. Vous traversez le plateau du Colla où vous vous arrêtez au village de Pukara. C’est l’un des derniers endroits témoignant de la culture pré-inca du même nom.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Puno</span> <span class="city">Cusco</span> <span class="city">Ollantaytambo</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>

                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-10-raqchi.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 10: CUSCO (3350 m)</h4>
                            <p>Vous partez dans la matinée pour Tambomachay, le plus éloigné des quatre sites archéologiques incas proches de Cusco. De là, vous descendez à pied vers Puca Pucara, Kenko et enfin, Sacsayhuaman. Cette impressionnante forteresse fut construite sur une colline qui domine la ville de Cusco. Elle est caractérisée par ses gigantesques blocs de pierres emboités au millimètre près, dont certains dépassent 9 mètres de haut et pèsent plus de 550 tonnes.</p>
                            <p>Après les visites de ces quatre sites, vous poursuivez votre randonnée vers la place d’armes. De là débute votre visite de la capitale inca, en commençant par la cathédrale, édifice impressionnant qui compte de nombreux tableaux de l’école cusquénienne ainsi que de véritables trésors d’orfèvrerie. Vous continuez votre découverte par le monastère Santo Domingo, ancien temple du Soleil ou Koricancha. Fin de journée libre.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Cusco</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>
                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-11-cusco.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 11: CUSCO (3350 m) - MORAY (3500 m) - MARAS (3300 m) - OLLANTAYTAMBO (2750 m) - AGUAS CALIENTES (2050 m)</h4>
                            <p>Vous partez visiter le site archéologique de Moray, véritable laboratoire agricole inca qui était déjà utilisé il y a cinq cents ans pour tester la résistance de certaines espèces végétales à l’altitude.</p>
                            <p>Puis vous descendez vers les salines de Maras, qui datent de l’époque pré-inca, et continuent d’être exploitées comme autrefois par les habitants du village. L’eau, qui provient d’une source salée, est canalisée vers une série de bassins où elle s’évapore progressivement. Une fine couche de sel s’y dépose pour être aussitôt récoltée</p>
                            <p>Après la visite, vous rejoignez le village de Maras pour profiter d’un déjeuner chez une famille locale.</p>
                            <p>Vous vous rendez ensuite à Ollantaytambo, où vous visitez le site archéologique. Vous prenez ensuite le train pour Aguas Calientes, petite ville située au pied du célèbre Machu Picchu. Arrivée et installation à l’hôtel. Soirée libre.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Cusco</span> <span class="city">Moray</span> <span class="city">Ollantaytambo</span> <span class="city">Aguas Calientes</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>
                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-12-moray.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 12: AGUAS CALIENTES (2050 m) - MACHU PICCHU (2450 M) – OLLANTAYTAMBO (2750 m)</h4>
                            <p>Très tôt le matin, vous prenez la navette pour monter au plus célèbre site inca du pays : le Machu Picchu, « vieux sommet » en quechua. Vous découvrez alors, encore enveloppé dans la brume matinale, ce complexe architectural construit à cheval sur une crête étroite bordée de précipices : une vision impressionnante qui évolue avec la progression du soleil. Vous parcourez alors les ruelles de la citadelle, ses quartiers, ses places, ses maisons royales, ses zones agricoles, ses chemins et ses observatoires.</p>
                            <p>Après la visite guidée, vous disposez d’un temps libre pour aller découvrir, si vous le souhaitez, le Huayna Picchu ou la Montaña (en supplément), la porte du Soleil («Inti Punku») qui se situe à 2700m, ou encore le pont de l’Inca.</p>
                            <p>Pour les moins sportifs, il est possible de flâner tranquillement dans la cité. Redescente dans l’après-midi vers Aguas Calientes pour prendre le train vers Ollantaytambo. Installation à l’hôtel et soirée libre.</p>
                            <p><i>*Possibilité d\'ajouter l\'ascension du Huayna Picchu ou de la Montaña selon disponibilité. En effet, le nombre d’entrées à ces deux sites étant soumis à quotas, nous ne pouvons garantir l’accès à cette partie du site.</i></p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Aguas caliente</span> <span class="city">Machu Picchu</span> <span class="city">Ollantaytambo</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>
                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-13-machu-picchu.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 13: OLLANTAYTAMBO (2750 m) - PISAQ (3400 m) – CUSCO (3350 m)</h4>
                            <p>Vous remontez la Vallée sacrée en bus jusqu’à Pisaq, où vous visitez le complexe archéologique composé de terrasses, de fontaines, d’observatoires et même d’une nécropole, la plus grande de la région (près de 10000 personnes enterrées). C’est de là que les Incas contrôlaient et dominaient la Vallée sacrée.</p>
                            <p>En redescendant, vous vous arrêtez au marché d’artisanat traditionnel du village de Pisaq. Retour à Cusco et reste de la journée libre.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Ollantaytambo</span> <span class="city">Pisac</span> <span class="city">Cusco</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>
                        </div>
                    </div>

                    <div class="row day-description-content">
                        <div class="col-sm-4">
                            <img src="{{url('')}}/img/files/tresors-du-sud-perou/dia-14-pisaq.jpg" class="img-day" alt="">
                        </div>
                        <div class="col-sm-8">
                            <h4 class="text-success">JOUR 14: CUSCO (3350 M) - LIMA - VOL INTERNATIONAL</h4>
                            <p>Transfert à l’aéroport de Cusco pour un vol à destination de Lima, la capitale péruvienne. Correspondance avec votre vol international.</p>

                            <div class="day-description">
                                <div class="etapes"><strong><span class="icon-location"></span> Etapes: </strong> <span class="city">Lima</span></div>
                                <div class="hotel"><strong><span class="icon-moon"></span> Hébergement: </strong> <a href="#" target="_new"> Marriot</a></div>
                                <div class="duration"><strong><span class="icon-schedule"></span> Heures de marche: </strong> 03:00 hrs</div>
                                <div class="transfer"><strong><span class="icon-bus"></span> Transfert: </strong> Sprinter, 18 sièges</div>
                            </div>
                        </div>
                    </div>-->

                    <h4>FIN DES NOS SERVICES</h4>

                </div>

                <div class="tab-pane" id="overview">
                    <div class="row">
                        @foreach($organizations as $orga)
                        <div class="col-sm-12">
                            <h4>{{ $orga->name}}</h4>
                            <p>{{ $orga->description }}</p>
                            <br>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!--<div class="tab-pane" id="itenaryresume">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="itenary-steps">
                                <li>
                                    <div class="icon-plane"></div>
                                    <div class="day-number">Jour 1</div>
                                    <div class="detail">ARRIVÉE À LIMA</div>
                                </li>
                                <li>
                                    <div class="icon-tent"></div>
                                    <div class="day-number">Jour 2</div>
                                    <div class="detail">LIMA – CUSCO (3350 m) : CITY TOUR et 4 RUINES</div>
                                </li>
                                <li>
                                    <div class="icon-hiking"></div>
                                    <div class="day-number">Jour 3</div>
                                    <div class="detail">PISAQ (3350 m) – MARAS (3300 m)</div>
                                </li>
                                <li>
                                    <div class="icon-tree"></div>
                                    <div class="day-number">Jour 4</div>
                                    <div class="detail">MARAS (3300 m) – MORAY (3500 m) - OLLANTAYTAMBO (2800 m) – AGUAS CALIENTES (2040 m)</div>
                                </li>
                                <li>
                                    <div class="icon-none"></div>
                                    <div class="day-number">Jour 5</div>
                                    <div class="detail">AGUAS CALIENTES (2050 m) - MACHU PICCHU (2450 m) – CUSCO (3350 m)</div>
                                </li>
                                <li>
                                    <div class="icon-camera"></div>
                                    <div class="day-number">Jour 6</div>
                                    <div class="detail">CUSCO (3350 m) – LA PAZ (3650 m)</div>
                                </li>
                                <li>
                                    <div class="icon-tent"></div>
                                    <div class="day-number">Jour 7</div>
                                    <div class="detail">RLA PAZ (3650 m) – ORURO (3735 m) – UYUNI (3660 m)</div>
                                </li>
                                <li>
                                    <div class="icon-none"></div>
                                    <div class="day-number">Jour 8</div>
                                    <div class="detail">UYUNI (3660 m) – SALAR – PUERTO CHUVICA (4000 m)</div>
                                </li>
                                <li>
                                    <div class="icon-plane"></div>
                                    <div class="day-number">Jour 9</div>
                                    <div class="detail">PUERTO CHUVICA (4000 m) – ROUTE DES JOYAUX – LAGUNA COLORADA (4330 m)</div>
                                </li>
                                <li>
                                    <div class="icon-none"></div>
                                    <div class="day-number">Jour 10</div>
                                    <div class="detail">LAGUNA COLORADA (4330 m) – LAGUNA VERDE (4300 m) – UYUNI (3680 m) – LA PAZ (3660 m)</div>
                                </li>
                                <li>
                                    <div class="icon-camera"></div>
                                    <div class="day-number">Jour 11</div>
                                    <div class="detail">LA PAZ (3660 m)</div>
                                </li>
                                <li>
                                    <div class="icon-flag"></div>
                                    <div class="day-number">Jour 12</div>
                                    <div class="detail">LA PAZ (3660 m) – CUSCO (3350 m) – LIMA – VOL INTERNATIONAL</div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <br>

                            <div class="panel-group" id="accordion1" role="tablist" aria-multiselectable="true">
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1One">
                                        <h4 class="panel-title">
                                            <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
                                                LE PRIX COMPREND
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1One" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading1One">
                                        <div class="panel-body">
                                            <ul class="clean-ul">
                                                <li><span class="icon-tick"></span><div class="desc">Les hébergements en hôtels de catégorie 3*** (selon standards locaux) (Pour toute demande de sur classement, veuillez nous contacter)</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Les repas mentionnés comme inclus</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Les transports terrestres privés et collectifs comme décrits au programme</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">L\'assistance aux aéroports et aux gares routières</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Les guides francophones, anglophones, hispanophones aux étapes tel que mentionné au programme</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Les excursions prévues au programme</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Les entrées des parcs nationaux, sites historiques, musées, églises prévus au programme</div></li>
                                                <li><span class="icon-tick"></span><div class="desc">Le vol intérieur Cusco – Lima</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="heading1Two">
                                        <h4 class="panel-title">
                                            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                                                LE PRIX NE COMPREND PAS
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapse1Two" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1Two">
                                        <div class="panel-body">
                                            <ul class="clean-ul">
                                                <li><span class="icon-cross"></span><div class="desc">Les vols internationaux</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Le survol des lignes de Nazca</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">L’entrée des sites marqués comme \"option\" et aux thermes de Chivay</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Les assurances</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Les déjeuners et diners non mentionnés dans le programme. (Compter entre 5 et 10 USD par repas).</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Les boissons</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Les pourboires (compter 2 USD/ jour/personne pour le guide et 1 USD /jour/personne pour les porteurs, muletiers et cuisiniers</div></li>
                                                <li><span class="icon-cross"></span><div class="desc">Le supplément single: nous consulter</div></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>-->

            </div>
        </div>

        <div class="col-md-3 tab-wrap tab-wrap-aside">
            <div class="section-title-aside left">
                <h4>RÉSERVATIONS</h4>
            </div>
            <div class="resume">
                <small>Apartir de:</small><span class="pd price-cat"><i class="icon-money"></i> USD {{ $tours[0]->price}}</span>
            </div>
            <div class="resume">
                <small>Jours:</small><span class="pd days"><i class="icon-sun"></i>{{ $tours[0]->days}} J / <i class="icon-moon"></i>{{ $tours[0]->days - 1}} N</span>
            </div>
            <div class="content-buy">
                <div class="content-categories">
                    <div class="categories"><i class="icon-mountain"></i> <strong>Altitude111:</strong></div><div class="categorie-detail"> 4500 msnm</div>
                    <div class="categories"><i class="icon-shoe"></i> <strong>Niveau:</strong></div><div class="categorie-detail"> {{ $tours[0]->difficulty }}</div>
                    <div class="categories"><i class="icon-backpack"></i> <strong>Séjour:</strong></div><div class="categorie-detail"> {{ $tours[0]->category }}</div>
                    <div class="categories"><i class="icon-hand-like"></i> <strong>Confort:</strong></div><div class="categorie-detail"> <i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star"></i><i class="icon-star-half"></i></div>
                </div>
                <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">RÉSERVER</button><button class="btn btn-info" data-toggle="modal" data-target="#myQestion"><span class="icon-chat"></span></button>
            </div>

            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxJnaq8H2Ib6E0bBT1sTnSnGZ5tqONxFI&callback=initMap"></script>
            <script>

                function initMap() {
                    var styleArray = [
                        {
                            "featureType": "administrative.country",
                            "elementType": "geometry.stroke",
                            "stylers": [
                                {
                                    "color": "#70a37e"
                                },
                                {
                                    "saturation": "0"
                                },
                                {
                                    "lightness": "0"
                                },
                                {
                                    "gamma": "0.9"
                                },
                                {
                                    "weight": "1.15"
                                }
                            ]
                        },
                        {
                            "featureType": "landscape",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FFBB00"
                                },
                                {
                                    "saturation": 43.400000000000006
                                },
                                {
                                    "lightness": 37.599999999999994
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        
                        {
                            "featureType": "road.arterial",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 51.19999999999999
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "road.local",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#FF0300"
                                },
                                {
                                    "saturation": -100
                                },
                                {
                                    "lightness": 52
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "all",
                            "stylers": [
                                {
                                    "hue": "#0078FF"
                                },
                                {
                                    "saturation": -13.200000000000003
                                },
                                {
                                    "lightness": 2.4000000000000057
                                },
                                {
                                    "gamma": 1
                                }
                            ]
                        },
                        {
                            "featureType": "water",
                            "elementType": "geometry.fill",
                            "stylers": [
                                {
                                    "color": "#58a2d8"
                                }
                            ]
                        }
                    ];

                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 4,
                        center: {lat: -16.894652, lng: -70.8394439},
                        styles: styleArray,
                        scrollwheel:  false,
                        mapTypeControl: false
                    });

                    setMarkers(map);
                }

                // Data for the markers consisting of a name, a LatLng and a zIndex for the
                // order in which these markers should display on top of each other.
               

                function setMarkers(map) {
                    // Adds markers to the map.
                    var image = {
                        url: '{{url('')}}/img/ubc.png',
                        // This marker is 20 pixels wide by 32 pixels high.
                        size: new google.maps.Size(20, 25),
                        // The origin for this image is (0, 0).
                        origin: new google.maps.Point(0, 0),
                        // The anchor for this image is the base of the flagpole at (0, 32).
                        anchor: new google.maps.Point(10, 25)
                    };

                    var shape = {
                        coords: [1, 1, 1, 20, 18, 20, 18, 1],
                        type: 'poly'
                    };
                    var arreglo = <?php echo json_encode($etapesforMap); ?>; 
                   

                    for (var i = 0; i < arreglo.length; i++) {
                        var beach = arreglo[i];
                        var value = parseFloat(beach["latitude"]);
                        var value1 = parseFloat(beach["longitude"]);
                        var title = beach["name"];

                        var marker = new google.maps.Marker({
                            position: {lat: value, lng: value1},
                            map: map,
                            icon: image,
                            shape: shape,
                            title: title
                        });
                    }
                }

            </script>

            <div id="map" style="height: 200px"></div>

            
        </div>
    </div>
</div>




<div class="modal fade modal-book-now" id="myBuy" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve maintenant</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/pay-img.jpg')"></div>

                    <div class="form-wrap">
                        <h4 class="text-center">Choisissez le mode de paiement:</h4>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/safetypay.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/transferwise.png" alt="" style="width: 100%;">
                        </div>

                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/paypal.png" alt="" style="width: 100%;">
                        </div>
                        <div style="width: 49%; display: inline-block; padding: 1em;">
                            <img src="{{url('')}}/img/vma.png" alt="" style="width: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Reserve maintenant</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="form-wrap-two">
                            <form>
                                <div class="form-group">
                                    <label>Prénom</label>
                                    <input type="text" class="form-control" placeholder="Entrez votre nom" value="">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" placeholder="Adresse e-mail" value="">
                                </div>

                                <div class="form-group">
                                    <label>Téléphone</label>
                                    <input type="text" class="form-control" placeholder="Numéro de téléphone" value="">
                                </div>

                                <div class="form-group">
                                    <label>Pseudo Skype</label>
                                    <input type="text" class="form-control" placeholder="ID Skype" value="">
                                </div>

                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" placeholder="Pays" value="">
                                </div>

                                <div class="form-group">
                                    <label>Durée</label>
                                    <div class="row">
                                        <div class="col-sm-6"><input type="text" class="form-control datepicker" placeholder="De" value=""></div>
                                        <div class="col-sm-6"><input type="text" class="form-control datepicker" placeholder="À" value=""></div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Nombre de personne</label>
                                    <div class="row">
                                        <div class="col-sm-6"><input type="number" class="form-control" placeholder="Personnes" value="1"></div>
                                        <div class="col-sm-6"><input type="number" class="form-control" placeholder="D'enfants" value="0"></div>
                                    </div>
                                </div>

                    </div>

                    <div class="form-wrap-two">

                            <div class="form-group">
                                <label>Type de voyage</label>
                                <select class="form-control" name="">
                                    <option value="Vacance">Vacance</option>
                                    <option value="Voyage de noces">Voyage de noces</option>
                                    <option value="Voyage team building">Voyage team building</option>
                                    <option value="Autre">Autre</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Type d'hébergement</label>
                                <select class="form-control" name="">
                                    <option value="Maison Habitante">Maison Habitante</option>
                                    <option value="Standard (2**/B&B)">Standard (2**/B&B)</option>
                                    <option value="Confort / Chame 3***">Confort / Chame 3***</option>
                                    <option value="Luxe 4**** +">Luxe 4**** +</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Vous souhaitez les services d'un guide </label>
                                <div class="row">
                                    <div class="col-sm-4"><input type="radio" name="guide" value=""> <small>Francophone</small></div>
                                    <div class="col-sm-4"><input type="radio" name="guide" value=""> <small>Anglophone</small></div>
                                    <div class="col-sm-4"><input type="radio" name="guide" value=""> <small>Hispanophone</small></div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Vous voulez plus</label>
                                <select class="form-control" name="">
                                    <option value="Voyage regroupant les incontournables du pays">Voyage regroupant les incontournables du pays</option>
                                    <option value="Voyage aventure">Voyage aventure</option>
                                    <option value="Voyage Communauté">Voyage Communauté</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Décrivez votre voyage</label>
                                <textarea name="name" rows="5" class="form-control"></textarea>
                            </div>
                            <button class="btn btn-primary hvr-sweep-to-right">Reserve</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade modal-book-now" id="myQestion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Pose une question</h4>
            </div>
            <div class="modal-body">

                <div class="preview-wrap">
                    <div class="preview-img" style="background-image: url('{{url('')}}/img/files/lares.jpg')"></div>

                    <div class="form-wrap">
                        <form action="{{ url('') }}/sendComment" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label>Prénom</label>
                                <input type="text" name="nameUser" class="form-control" placeholder="Entrez votre nom" value="" required>
                                <input type="hidden" name="idTour" value="{{ $tours[0]->id }}">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Adresse e-mail" value="" required>
                            </div>

                            <div class="form-group">
                                <label>Question</label>
                                <textarea class="form-control" name="comment" placeholder="Écrivez vos questions sur ce voyage" required></textarea>
                            </div>
                            <button class="btn btn-primary hvr-sweep-to-right">Envoyez vos questions</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
