@extends('website.partials.en.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
              
                <<small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Appelez-nous maintenant: 00 51 84 247277</a></small>
            </div>

            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/en"><img class="img-lng" src="{{url('')}}/img/lng/en.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/es"><img class="img-lng" src="{{url('')}}/img/lng/es.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/de"><img class="img-lng" src="{{url('')}}/img/lng/de.png" alt="Idioma"></a>
                <a class="route-language" href="{{url('')}}/it"><img class="img-lng" src="{{url('')}}/img/lng/it.png" alt="Idioma"></a>
            </div>

        </div>

    </div>
@endsection

@section('content')
<section id="NosVoyages" class="showcase">

    <div class="container">

        <div class="text-center our-services">
        <div class="row">
        <div class="col-sm-4">
            <div>
              <img src="images/descubrir.png" style="width: 70px; height: 90px">
            </div>
            <div class="service-info">
              <h3><a href="{{url('')}}/en/tours/decouverte/Discover">Discovery </a> </h3>
              <p>Discover the country and its inescapables in all simplicity</p>
            </div>
                    </div>
        <div class="col-sm-4">
            <div>
              <img src="images/aventura.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/en/tours/decouverte/Aventure">Adventure</a></h3>
              <p>For those who love trekking in places still authentic and wild</p>
            </div>
                    </div>
                    <div class="col-sm-4">
               <div>
              <img src="images/Alta_montana.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/en/tours/decouverte/High-Mountain">High mountain</a></h3>
              <p>For lovers of high summits and new challenges</p>
            </div>
                  </div>
                  </div>
                     <div class="row">

                    <!--<div class="col-sm-4">
               <div class="service-icon">
              <i class="fa fa-camera-retro"></i>
            </div>
            <div class="service-info">
              <h3>Descubrir</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>
                  </div>-->
                              <div class="col-sm-12">
               <div>
              <img src="images/excursiones2.png" style="width: 140px; height: 100px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/en/tours/decouverte/Excursions">Excursions</a></h3>
              <p>Visits to the 4 corners of Peru</p>
            </div>
                  </div>
                              <!--<div class="col-sm-4">
               <div class="service-icon">
              <i class="fa fa-camera-retro"></i>
            </div>
            <div class="service-info">
              <h3>Descubrir</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore</p>
            </div>-->
                  </div>
                  </div>
                  </div>

    </div>

</section>
<section id="about-us" class="parallax">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Mesure</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.Ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="our-skills wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_grupo.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>In Group</h3>
              <p>A trip that will satisfy everyone</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_familia.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>In family</h3>
              <p>Take advantage of a suitable trip for adults as well as for young people</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_pareja.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>Couple</h3>
              <p>Share unforgettable moments with your partner</p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Prepare your trip</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/5.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Peru</h3>
                    <p>General information, Formalities, Health and safety, What should I bring ?, Best season, Holidays, Practical information.</p>
                  </div>
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href=""><i class="fa fa-link"></i></a></span>-->

                    <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modal-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Pérou</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        General information <br> Peru is: </ p> <br>
                         • A population of about 30 million. <br>
                         • Net banking income of $ 301.5 billion in 2011. <br>
                         • A total area of 1,285,220 km², three times the area of France. <br>
                         • 2414 Km of coastline. <br>
                         • A country that has a common border with Chile, Argentina, Brazil, Ecuador and Bolivia. <br>
                         • A country with the summit of Mount Huascarán at 6768 meters above sea level. <br>
                         <br>
                         A special destination: <br>
                         • Peru has 28 of the 31 climates on the planet (in some parts of the country, the weather is sunny all year round) • 84 of the world's 104 ecosystems are present in Peru. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Health and security<br>
                        General: In Peru, it is important to respect some rules of hygiene and health. We advise you to:
 
                        • Do not drink tap water unless it is boiled or purified using pellets. <br>
                        • Wash your hands regularly to reduce the risk of contamination. <br>
                        • Avoid meat and fish bought on the market: prefer restaurants to try specialties such as ceviche. <br>

                        Vaccines: To enter Peru from France, no vaccine is obligatory. Some however are recommended include: <br>
                        • Diphtheria-tetanus-poliomyelitis <br>
                        • Yellow fever (in case of stay in the Amazon, which is compulsory in case of stay in Venezuela from el Peru) <br>
                        • Influenza (recommended for the most fragile subjects, many cases of influenza AH1N1 detected in Peru) <br> <br>
 
                        Stay in Amazonia: In addition to yellow fever vaccination, treatment for malaria may be recommended (see your doctor's advice) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        What should I bring?<br>
                        Here is an exhaustive list of what to bring during a trip to Peru <br>
 
General: - A bag or a soft bag - A backpack of 20 to 30 liters - Comfortable shoes - A hat or cap - Sunglasses - A waterproof Gore Tex jacket - Warm clothing for the evenings with altitude, temperature drops quickly - A pharmacy kit - A scarf or neck cover - Shorts or pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Best Season, Holidays<br>
                        Peru is also made up of regions as numerous as distinct (coast, Andes, Amazonia) characterized by climates very different from each other: <br>
                        • On the coast, the southern summer (November to April) displays high temperatures, while the winter is cooler (but never cold) and marked by morning mists. <br>
                        • In the Andes and Amazonia there are two main seasons: the dry season (May to October) and the wet season (November to April). If it is possible to travel in the Andean region during the rainy season, it is not advisable to hike in the mountains, where snow falls make the trails dangerous. <br>
                        • In the Andes, the weather can be very variable over the course of a day. We therefore advise you to provide various clothes, that is to say warm for the cool evenings, lighter for days often sunny, and a rain clothes. <br>

                         As Peru is very close to the equator, the sun is vertical and strong. This phenomenon is greatly amplified by altitude. So do not forget to wear a hat, sunscreen and sunglasses with a high degree of protection.
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Useful information<br>
                        HOURLY SHIFT From March to October (summer time), it will be necessary to reverse your watch of 7 hours arriving in Peru, and of 6 hours only from November to February. <br>
                        ELECTRICITY Voltage: 110 / 220V
                        Frequency: 50/60 Hertz The electrical outlets in Peru are of two types: TELEPHONE AND TELECOMMUNICATIONS It is very easy to communicate with his friends or his family from Peru, the telephone booths are numerous, and the Internet coverage very good. <br>
                        To call from Peru to France: 00 + 33 + correspondent's number (without the initial 0). <br>
                        To call from France to Peru: 00 + 51 + city code (without the 0) + correspondent's number. <br>
                        To make internal calls: area code + number if called in another area. Otherwise, do not dial the area code.
                        <br>
                        MAIL <br>

                        You will find mailboxes in every airport, and in the vast majority of hotels. However, we recommend that the central posts be preferred. It takes at least 10 days for the recipient to receive a letter from Lima. <br> <br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="folio-item wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/11.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Bolivia</h3>
                    <p>Informations générales, Formalités, Santé et sécurité, Que dois-je apporter?, Meilleure saison, Vacances, Informations pratiques.</p>
                  </div>
                  <div class="col-sm-12">
                  <div class="folio-overview">
                    <!--<span class="folio-link"><a class="folio-read-more" href="#" data-single_url="info2.html" ><i class="fa fa-link"></i></a></span>-->
                     <span class="folio-expand"><a data-toggle="modal" data-target=".bs-example-modalBoliva-lg" class="course_more"><i class="fa fa-search-plus"></i></a></span>
                  </div>

                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade bs-example-modalBoliva-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Bolivia</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        General information <br> Peru is: </ p> <br>
                         • A population of about 30 million. <br>
                         • Net banking income of $ 301.5 billion in 2011. <br>
                         • A total area of 1,285,220 km², three times the area of France. <br>
                         • 2414 Km of coastline. <br>
                         • A country that has a common border with Chile, Argentina, Brazil, Ecuador and Bolivia. <br>
                         • A country with the summit of Mount Huascarán at 6768 meters above sea level. <br>
                         <br>
                         A special destination: <br>
                         • Peru has 28 of the 31 climates on the planet (in some parts of the country, the weather is sunny all year round) • 84 of the world's 104 ecosystems are present in Peru. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Health and security<br>
                        General: In Peru, it is important to respect some rules of hygiene and health. We advise you to:
 
                        • Do not drink tap water unless it is boiled or purified using pellets. <br>
                        • Wash your hands regularly to reduce the risk of contamination. <br>
                        • Avoid meat and fish bought on the market: prefer restaurants to try specialties such as ceviche. <br>

                        Vaccines: To enter Peru from France, no vaccine is obligatory. Some however are recommended include: <br>
                        • Diphtheria-tetanus-poliomyelitis <br>
                        • Yellow fever (in case of stay in the Amazon, which is compulsory in case of stay in Venezuela from el Peru) <br>
                        • Influenza (recommended for the most fragile subjects, many cases of influenza AH1N1 detected in Peru) <br> <br>
 
                        Stay in Amazonia: In addition to yellow fever vaccination, treatment for malaria may be recommended (see your doctor's advice) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                         What should I bring?<br>
                        Here is an exhaustive list of what to bring during a trip to Peru <br>
 
General: - A bag or a soft bag - A backpack of 20 to 30 liters - Comfortable shoes - A hat or cap - Sunglasses - A waterproof Gore Tex jacket - Warm clothing for the evenings with altitude, temperature drops quickly - A pharmacy kit - A scarf or neck cover - Shorts or pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Best Season, Holidays<br>
                        Peru is also made up of regions as numerous as distinct (coast, Andes, Amazonia) characterized by climates very different from each other: <br>
                        • On the coast, the southern summer (November to April) displays high temperatures, while the winter is cooler (but never cold) and marked by morning mists. <br>
                        • In the Andes and Amazonia there are two main seasons: the dry season (May to October) and the wet season (November to April). If it is possible to travel in the Andean region during the rainy season, it is not advisable to hike in the mountains, where snow falls make the trails dangerous. <br>
                        • In the Andes, the weather can be very variable over the course of a day. We therefore advise you to provide various clothes, that is to say warm for the cool evenings, lighter for days often sunny, and a rain clothes. <br>

                         As Peru is very close to the equator, the sun is vertical and strong. This phenomenon is greatly amplified by altitude. So do not forget to wear a hat, sunscreen and sunglasses with a high degree of protection.
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Useful information<br>
                        HOURLY SHIFT From March to October (summer time), it will be necessary to reverse your watch of 7 hours arriving in Peru, and of 6 hours only from November to February. <br>
                        ELECTRICITY Voltage: 110 / 220V
                        Frequency: 50/60 Hertz The electrical outlets in Peru are of two types: TELEPHONE AND TELECOMMUNICATIONS It is very easy to communicate with his friends or his family from Peru, the telephone booths are numerous, and the Internet coverage very good. <br>
                        To call from Peru to France: 00 + 33 + correspondent's number (without the initial 0). <br>
                        To call from France to Peru: 00 + 51 + city code (without the 0) + correspondent's number. <br>
                        To make internal calls: area code + number if called in another area. Otherwise, do not dial the area code.
                        <br>
                        MAIL <br>

                        You will find mailboxes in every airport, and in the vast majority of hotels. However, we recommend that the central posts be preferred. It takes at least 10 days for the recipient to receive a letter from Lima. <br> <br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                  </a>
              </div>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <div id="portfolio-single-wrap">
      <div id="portfolio-single">
      </div>
    </div><!-- /#portfolio-single-wrap -->
  </section><!--/#portfolio-->





  
  <section id="team" style="padding-top: 0px">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2> Who are we? </h2>
             <p> Tierras de los Andes is a S.A.C (Closed Joint-stock Company) which opened its doors in 2000. Our main objective is to create a complete holiday off the beaten track. </p>
             <p> Tierras de los Andes is an agency that organizes stays and offers a wide selection of services and services for individual or group clientele. We conceive any type of stay, from the "discovery" trip to the adventure trek, through business stays. We welcome families as well as companies from all over the world to discover Peru and more generally South America. </p>
           </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2> Our state of mind </h2>
             <p> Tierras de los Andes offers a wide range of services, from planning operations to tailor-made travel coordination and quality customer service. This Peruvian tour operator relies on a team of professionals giving the best of themselves to ensure the best possible services to the travelers and guarantee complete satisfaction. </p>
             <p> An Adventure Spirit: Peru is a paradise for Adventure Tourism. Whether climbing the mountains, walking on ancient Inca trails, traveling through the network of roads that crisscross the country, or whitewater rafting. Tierras de los Andes offers you all types of adventure trips depending on the level you are looking for: From extreme adrenaline to simpler adventures for amateurs or enthusiasts. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
      <!--<div class="team-members">
        <div class="row">
        <div class="col-sm-12">
          @foreach($users as $user)
          <div class="col-sm-4">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="300ms">
              <div class="member-image">
                <img class="img-responsive" src="{{ $user->routeImage }}" alt="">
              </div>
              <div class="member-info">
                <h3>{{ $user->name }}</h3>
                <h4>Director ejecutivo</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  @if($user->facebook != "")
                  <li><a class="facebook" href="{{ $user->facebook }}"><i class="fa fa-facebook"></i></a></li>
                  @endif
                  @if($user->twitter != "")
                  <li><a class="twitter" href="{{ $user->twitter }}"><i class="fa fa-twitter"></i></a></li>
                  @endif
                  @if($user->linkedin != "")
                  <li><a class="linkedin" href="{{ $user->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                  @endif
                </ul>
              </div>
            </div>
          </div>
          @endforeach
        </div>-->

          <div class="col-sm-6">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>imagen grupo</h3>
                <h4>Grupo</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <!--<div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="800ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Carmen Arr&oacute;spide</h3>
                <h4>Gerente administrativa y financiera</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Victor</h3>
                <h4>Ventas</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="1100ms">
              <div class="member-image">
                <img class="img-responsive" src="images/team/persona.png" alt="">
              </div>
              <div class="member-info">
                <h3>Mar&iacute;a Cardenas</h3>
                <h4>Externe</h4>
                <p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
              </div>
              <div class="social-icons">
                <ul>
                  <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>-->
        </div>
      </div>
    </div>

  </section><!--se acaba modulo de nosotros-->    


<section id="twitter" class="parallax">
    <div id="blogspace">
      <a class="twitter-left-control" href="#twitter-carousel" role="button" data-slide="prev" style="margin-top: -220px;"><i class="fa fa-angle-left"></i></a>
      <a class="twitter-right-control" href="#twitter-carousel" role="button" data-slide="next" style="margin-top: -220px;"><i class="fa fa-angle-right"></i></a>
      <div class="container">
        <div class="row">
          <div id="blogsec" class="col-sm-8 col-sm-offset-2">

            <div id="twitter-carousel" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner">
                 <?php $count=0;?>
                @foreach($blogs as $blog)
                @if($count==0)
                <div class="item active">
                    <a href="{{$blog->link}}"> <h4>{{$blog->name}}</h4>
                  <p> Ver contenido del blog</p></a>
                </div>
                @else
                <div class="item">
                    <a href="{{$blog->link}}"> <h4>{{$blog->name}}</h4>
                    <p>Ver contenido del blog </p></a>
                </div>
                @endif
                <?php $count++;?>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#blog-->
  <section id="testimonial" style="padding-top: 0px; padding-bottom: 0px">
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonials</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        </div>
      </div>
     <!-- <div class="blog-posts">
        <div class="row">
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/blog1.png" alt=""></a>
              </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">Setiembre 22, 2017</span>
              <span class="cetagory">in <strong>Alta Monta&ntile;a</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="400ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/blog1.png" alt=""></a>
              </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">Setiembre 22, 2017</span>
              <span class="cetagory">in <strong>Alta Monta&ntile;a</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>-->
          <div class="col-sm-12 wow fadeInUp" data-wow-duration="10ms" data-wow-delay="10ms">
            <div class="post-thumb">
              <div id="post-carousel"  class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    @for($i=0;$i<count($testimonials)/3;$i++)
                @if($i==0)
                  <li data-target="#post-carousel" data-slide-to="{{$i}}" class="active"></li>
                @else
                  <li data-target="#post-carousel" data-slide-to="{{$i}}"></li>
                @endif
                    @endfor
                </ol>
                <div class="carousel-inner">
                    @for($i = 0; $i < count($testimonials); $i += 3) 
                    @if($i==0)
                    <div class="item active">
                    @else
                    <div class="item">
                    @endif
                    @if($i<count($testimonials))
                    <div class="col-sm-4">    
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i]->date}}</span>
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    @if($i+1<count($testimonials))
                        <div class="col-sm-4">
                        
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+1]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i+1]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i+1]->date}}</span>
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i+1]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    @if($i+2<count($testimonials))
                        <div class="col-sm-4">
                        
                    <div class="post-thumb">
                      <a href="#"><img class="img-responsive" src="{{$testimonials[$i+2]->photo}}" alt=""></a>
                      </div>
                    <div class="entry-header">
                      <h3><a href="#">{{$testimonials[$i+2]->name}}</a></h3>
                      <span class="date">{{$testimonials[$i+2]->date}}</span>
                      <span class="cetagory">in <strong>Alta Montaña</strong></span><!--TOUR???-->
                    </div>
                    <div class="entry-content">
                      <p>{{$testimonials[$i+2]->testimonial}} </p>
                    </div>
                  </div>
                    @endif
                    </div>
                    
                 @endfor
                </div>
                       
              </div>

            </div>
          
          </div>
          <!--<div class="col-sm-4 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="800ms">
            <div class="post-thumb">
              <a href="#"><img class="img-responsive" src="images/blog/blog3.png" alt=""></a>
              </div>
            <div class="entry-header">
              <h3><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h3>
              <span class="date">Setiembre 22, 2017</span>
              <span class="cetagory">en <strong>Aventura</strong></span>
            </div>
            <div class="entry-content">
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
            </div>
          </div>
        </div>-->
        <!--<div class="load-more wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
          <a href="#" class="btn-loadmore"><i class="fa fa-repeat"></i> Cargar m&aacute;s</a>
        </div>-->

      </div>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Enter your testimony
</button>
</div>
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" 
          data-dismiss="modal" 
          aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" 
        id="favoritesModalLabel">Ingresa tu testimonio</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Entrez un témoignage</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua ut enim ad minim veniam</p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nom" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     <div class="col-sm-6">
                    <div class="form-group">
                      <input type="date" name="date" class="form-control" placeholder="Date" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                           </div>   
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nationalité" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                    <div class="col-sm-6">
                              <div class="form-group">
     <select name="tour" class="form-control">

        @foreach($tours as $tour) 
        <option value="{{ $tour->id }}" selected="selected" > {{ $tour->title }} </option> 
        @endforeach
         </div>
    </select>
                  </div>   
              </div>
                
                     <div class="col-sm-6">
                        <div class="form-group">
                                {!! Form::label('Iimagen', 'Imagen', ['class'=>'col-sm-2 control-label']) !!}
                                <div class="col-sm-10">
                                    <input id="imagen" type="file"  class="form-control" name="imagen" value="{{ old('imagen') }}" accept="image/png,image/gif,image/jpeg" onchange="readURL(this);">
                                </div>
                            </div>
                    </div>
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Ingrese su Testimonio" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Send Now</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>
  </section><!--/#testimonial-->

  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:0px; right:0px;">
    <a class="a2a_button_facebook"></a>
    <a class="a2a_button_twitter"></a>
    <a class="a2a_button_google_plus"></a>
    <a class="a2a_button_pinterest"></a>
</div>

<section id="map-section" style="padding-top: 10%;">
  <div class="col-sm-12">
      <div class="col-sm-6">
        <div id="google-map" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
      </div>
      <div class="col-sm-6">
        <div id="google-map1" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms" style="width: 100%;"></div>
      </div>
    </div>
</section>
<section id="contact" style="padding-top: 10%;">
    <div id="contact-us" class="parallax">
      <div class="container">
        <div class="row">
          <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Contains</h2>
            
          </div>
        </div>
        <div class="contact-form wow fadeIn" data-wow-duration="1000ms" data-wow-delay="600ms" style="padding-top: 5%;">
          <div class="row">
            <div class="col-sm-6">
              <form id="main2-contact-form" name="contact-form" method="post" action="#">
                <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nom complet" required="required">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                    </div>
                  </div>
                   <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Téléphone" required="required">
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" name="subject" class="form-control" placeholder="Pays" required="required">
                </div>
               
                <div class="form-group">
                  <textarea name="message" id="message" class="form-control" rows="4" placeholder="Poste" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn-submit">Enviar ahora</button>
                </div>
              </form>
            </div>
            <div class="col-sm-6">
              <div class="contact-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            
                <ul class="address">
                  <li><i class="fa fa-map-marker"></i> <span> Direcci&oacute;n:</span>Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU </li>
                  <li><i class="fa fa-phone"></i> <span> Tel&eacute;fono:</span> 00 51 84 247277  </li>
                  <li><i class="fa fa-envelope"></i> <span> Email:</span><a href="mailto:terandes@terandes.com"> terandes@terandes.com</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!--/#contact-->

 <footer id="footer">
    <div class="footer-top wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: #0e4817">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="http://localhost:8000/img/terandes-logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p style="color: #0e4817">© 2017 TerAndes.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
@endsection



