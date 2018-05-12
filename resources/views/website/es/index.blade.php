@extends('website.partials.es.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    
@endsection

@section('content')


<!--<section id="NosVoyages" class="showcase">

    <div class="container">

        <div class="text-center our-services">
        <div class="row">
        <div class="col-sm-4">
            <div>
              <img src="images/descubrir.png" style="width: 70px; height: 90px">
            </div>
            <div class="service-info">
              <h3><a href="{{url('')}}/fr/tours/decouverte/Discover">Découverte </a> </h3>
              <p>Découvrir Le pays et ses incontournables en toute simplicité</p>
            </div>
                    </div>
        <div class="col-sm-4">
            <div>
              <img src="images/aventura.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/Aventure">Aventure</a></h3>
              <p>Pour ceux qui aiment les trekkings dans des lieux encore autentiques et sauvages</p>
            </div>
                    </div>
                    <div class="col-sm-4">
               <div>
              <img src="images/Alta_montana.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/High-Mountain">Haute montagne</a></h3>
              <p>Pour les  amoureux des hauts sommets et des nouveaux défis</p>
            </div>
                  </div>
                  </div>
                     <div class="row">

                    
                <div class="col-sm-12">
                 <div>
                  <img src="images/excursiones2.png" style="width: 140px; height: 100px">
                </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/fr/tours/decouverte/Excursions">Excursions</a></h3>
              <p>Des visites dans les 4 coins du Pérou</p>
            </div>
                  </div>
                              
                  </div>
                  </div>
                  </div>

    </div>

</section>-->
<section id="imagenes-ferias" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">Blog</h2>
      	 <br>
      	 <h4><p align="center" style="color: #4b4b4b">Tierras de los Andes estará presente en la Feria Internacional de Turismo de Turismo que tendrá lugar los días 20, 21 y 22 de octubre en Montreal, Canadá.</p></h4>
    	<br>
        
        <div class="col-sm-12">
        	<center>
        		<a href="{{ URL::to('http://www.salontourismevoyages.com/') }}"><img src="img/feria1.jpg" class="img-rounded"></a>
          		<h3 style="color: #4b4b4b">20 - 21 - 22 Octobre 2017</h3>
            	<a href="{{ URL::to('http://www.google.com') }}" p>Salon International Tourisme Voyages (Montréal, Canada)</p></a>
        	</center>
        </div>
        
        
        
      </div>
    </div>
  </section>
  

<section id="about-us" class="parallax" style="color: #4b4b4b" "padding-top:10px; padding-bottom: 10px">
    <br>
    <br>
    
    <div class="container">
      <div class="row">
      	<h2 align="center" style="color: #4b4b4b">À medida</h2>
      	 <br>
    	<br>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/es/tours/Group"><img src="{{url('')}}/img/grupo1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">En grupo</h3></a>
            	<p>Un viaje que satisfaga a todos</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/es/tours/Family"><img src="{{url('')}}/img/familia1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">En Familia</h3></a>
            	<p>Aproveche un viaje adecuado tanto para adultos como para jóvenes</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/es/tours/Couple"><img src="{{url('')}}/img/couple1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Pareja</h3></a>
            	<p>Comparte momentos inolvidables con tu pareja</p>
        	</center>
        </div>
        <div class="col-sm-3">
        	<center>
        		<a href="{{url('')}}/es/tours/Friends"><img src="{{url('')}}/img/amigos1icono.png" class="img-rounded">
          		<h3 style="color: #4b4b4b">Amigos</h3></a>
            	<p>Comparte momentos inolvidables entre amigos</p>
        	</center>
        </div>
        
      </div>
    </div>
  </section>





  <section id="portfolio" style="padding-top:0px; padding-bottom: 0px">
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
          <h2>Prepare su viaje</h2>
          <p> </p>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6">
          <div class="folio-item wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="300ms">
            <div class="folio-image">
              <img class="img-responsive" src="img/peru_portada.jpg" alt="">
            </div>
            <div class="overlay">
              <div class="overlay-content">
                <div class="overlay-text">
                  <div class="folio-info">
                    <h3>Peru</h3>
                    <p>Información general, Formalidades, Salud y seguridad, ¿Qué debo traer ?, Mejor estación, Vacaciones, Información práctica.</p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informacion General de Peru</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informacion General <br>
                        <p align="center"> Peru tiene :</p> <br>
                        • Una población de alrededor de 30 millones. <br>
                         • Ingresos bancarios netos de $ 301.500 millones en 2011. <br>
                         • Un área total de 1.285.220 km², tres veces la superficie de Francia. <br>
                         • 2414 Km de costa. <br>
                         • Un país que tiene una frontera común con Chile, Argentina, Brasil, Ecuador y Bolivia. <br>
                         • Un país con la cumbre del Monte Huascarán a 6768 metros sobre el nivel del mar. <br>
                         <br>
                         Un destino especial: <br>
                         • Perú tiene 28 de los 31 climas del planeta (en algunas partes del país, el clima es soleado todo el año) • 84 de los 104 ecosistemas del mundo están presentes en Perú. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Salud y Seguridad<br>

                        General: En Perú, es importante respetar algunas reglas de higiene y salud. Le aconsejamos que:
 
                        • No beba agua del grifo a menos que sea hervida o purificada usando pellets. <br>
                        • Lávese las manos regularmente para reducir el riesgo de contaminación. <br>
                        • Evitar la carne y el pescado comprados en el mercado: prefieren los restaurantes para probar especialidades como el ceviche. <br>

                        Vacunas: Para ingresar al Perú desde Francia, ninguna vacuna es obligatoria. Algunos sin embargo se recomiendan incluyen: <br>
                        • Difteria-tétano-poliomielitis <br>
                        • Fiebre amarilla (en caso de estancia en el Amazonas, obligatoria en caso de estancia en Venezuela desde el Perú) <br>
                        • Influenza (recomendado para los sujetos más frágiles, muchos casos de gripe AH1N1 detectados en Perú) <br> <br>
 
                        Estancia en la Amazonia: Además de la vacunación contra la fiebre amarilla, se puede recomendar el tratamiento de la malaria (consulte el consejo de su médico) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/peru3.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        ¿Qué debo llevar?<br>
                         Aquí está una lista exhaustiva de qué traer durante un viaje a Perú <br>
 
General: - Un bolso o un bolso suave - Una mochila de 20 a 30 litros - Zapatos cómodos - Un sombrero o un casquillo - Gafas de sol - Una chaqueta impermeable de Gore Tex - Ropa caliente por las tardes con la altitud, la temperatura cae rápidamente - Un kit de farmacia - Una bufanda o cuello - Pantalones cortos

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Mejor Temporada, Vacaciones <br>
                        El Perú también se compone de regiones tan numerosas como distintas (costa, Andes, Amazonia) caracterizadas por climas muy diferentes entre sí:
                        • En la costa, el verano del sur (de noviembre a abril) presenta altas temperaturas, mientras que el invierno es más fresco (pero nunca frío) y marcado por nieblas matutinas. <br>
                        • En los Andes y la Amazonia hay dos estaciones principales: la estación seca (mayo a octubre) y la estación húmeda (noviembre a abril). Si es posible viajar en la región andina durante la estación lluviosa, no es aconsejable caminar en las montañas, donde la nieve hace que los senderos sean peligrosos. <br>
                        • En los Andes, el tiempo puede ser muy variable a lo largo de un día. Por lo tanto, le aconsejamos que proporcione varias prendas de vestir, es decir, calientes para las noches frescas, más ligeros para los días a menudo soleados, y una ropa de lluvia. <br>

                         Como el Perú está muy cerca del ecuador, el sol es vertical y fuerte. Este fenómeno es muy amplificado por la altitud. No se olvide de usar un sombrero, protector solar y gafas de sol con un alto grado de protección.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/peru2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informaciones prácticas<br>
                        CAMBIO HORARIO De marzo a octubre (horario de verano), será necesario revertir su reloj de 7 horas llegando a Perú, y de 6 horas sólo de noviembre a febrero. <br>
                        ELECTRICIDAD Voltaje: 110 / 220V
                        Frecuencia: 50/60 Hertz Los enchufes eléctricos en Perú son de dos tipos: de teléfonos y comunicaciones Es muy fácil comunicarse con amigos o familiares de Perú, cabinas telefónicas son muchas, y muy buena cobertura de Internet. <br>
                        Para llamar desde Perú a Francia: 00 + 33 + número del corresponsal (sin el 0 inicial). <br>
                        Para llamar de Francia a Perú: 00 + 51 + código de ciudad (sin el 0) + número del corresponsal. <br>
                        Para realizar llamadas internas: código de área + número si se llama en otra área. De lo contrario, no marque el código de área.
                        <br>
                        CORREO <br>

                        Usted encontrará buzones en cada aeropuerto, y en la gran mayoría de los hoteles. Sin embargo, recomendamos que se prefieran los postes centrales. Lleva al menos 10 días para que el destinatario reciba una carta de Lima.<br><br>
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
              <img class="img-responsive" src="img/bolivia_portada.jpg" alt="">
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
        <div class="modal fade bs-example-modalBoliva-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel1" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-header" style="background-color: #2a6f14">
                      <button type="button" data-dismiss="modal" align="rigth" style="border-color: transparent;background-color: transparent; color: #fff">&times;</button>
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informations générales Bolivia</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic-bolvia" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/bolivia1.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informations générales <br>
                        <p align="center"> Bolivia tiene :</p> <br>
                        • Una población de alrededor de 30 millones. <br>
                         • Ingresos bancarios netos de $ 301.500 millones en 2011. <br>
                         • Un área total de 1.285.220 km², tres veces la superficie de Francia. <br>
                         • 2414 Km de costa. <br>
                         • Un país que tiene una frontera común con Chile, Argentina, Brasil, Ecuador y Bolivia. <br>
                         • Un país con la cumbre del Monte Huascarán a 6768 metros sobre el nivel del mar. <br>
                         <br>
                         Un destino especial: <br>
                         • Perú tiene 28 de los 31 climas del planeta (en algunas partes del país, el clima es soleado todo el año) • 84 de los 104 ecosistemas del mundo están presentes en Perú. <br></p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia2.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                      Salud y Seguridad<br>

                        General: En Perú, es importante respetar algunas reglas de higiene y salud. Le aconsejamos que:
 
                        • No beba agua del grifo a menos que sea hervida o purificada usando pellets. <br>
                        • Lávese las manos regularmente para reducir el riesgo de contaminación. <br>
                        • Evitar la carne y el pescado comprados en el mercado: prefieren los restaurantes para probar especialidades como el ceviche. <br>

                        Vacunas: Para ingresar al Perú desde Francia, ninguna vacuna es obligatoria. Algunos sin embargo se recomiendan incluyen: <br>
                        • Difteria-tétano-poliomielitis <br>
                        • Fiebre amarilla (en caso de estancia en el Amazonas, obligatoria en caso de estancia en Venezuela desde el Perú) <br>
                        • Influenza (recomendado para los sujetos más frágiles, muchos casos de gripe AH1N1 detectados en Perú) <br> <br>
 
                        Estancia en la Amazonia: Además de la vacunación contra la fiebre amarilla, se puede recomendar el tratamiento de la malaria (consulte el consejo de su médico)   <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/bolivia3.jpg" width="100%;" alt="...">
                      <div> ¿Qué debo llevar? <br>
                        Aquí está una lista exhaustiva de qué traer durante un viaje a Perú <br>
 
General: - Un bolso o un bolso suave - Una mochila de 20 a 30 litros - Zapatos cómodos - Un sombrero o un casquillo - Gafas de sol - Una chaqueta impermeable de Gore Tex - Ropa caliente por las tardes con la altitud, la temperatura cae rápidamente - Un kit de farmacia - Una bufanda o cuello - Pantalones cortos
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="images/portfolio/peru.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Mejor Temporada, Vacaciones<br>
                        El Perú también se compone de regiones tan numerosas como distintas (costa, Andes, Amazonia) caracterizadas por climas muy diferentes entre sí:
                        • En la costa, el verano del sur (de noviembre a abril) presenta altas temperaturas, mientras que el invierno es más fresco (pero nunca frío) y marcado por nieblas matutinas. <br>
                        • En los Andes y la Amazonia hay dos estaciones principales: la estación seca (mayo a octubre) y la estación húmeda (noviembre a abril). Si es posible viajar en la región andina durante la estación lluviosa, no es aconsejable caminar en las montañas, donde la nieve hace que los senderos sean peligrosos. <br>
                        • En los Andes, el tiempo puede ser muy variable a lo largo de un día. Por lo tanto, le aconsejamos que proporcione varias prendas de vestir, es decir, calientes para las noches frescas, más ligeros para los días a menudo soleados, y una ropa de lluvia. <br>

                         Como el Perú está muy cerca del ecuador, el sol es vertical y fuerte. Este fenómeno es muy amplificado por la altitud. No se olvide de usar un sombrero, protector solar y gafas de sol con un alto grado de protección.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/bolivia2.png" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informacion practica<br>
                        CAMBIO HORARIO De marzo a octubre (horario de verano), será necesario revertir su reloj de 7 horas llegando a Perú, y de 6 horas sólo de noviembre a febrero. <br>
                        ELECTRICIDAD Voltaje: 110 / 220V
                        Frecuencia: 50/60 Hertz Los enchufes eléctricos en Perú son de dos tipos: de teléfonos y comunicaciones Es muy fácil comunicarse con amigos o familiares de Perú, cabinas telefónicas son muchas, y muy buena cobertura de Internet. <br>
                        Para llamar desde Perú a Francia: 00 + 33 + número del corresponsal (sin el 0 inicial). <br>
                        Para llamar de Francia a Perú: 00 + 51 + código de ciudad (sin el 0) + número del corresponsal. <br>
                        Para realizar llamadas internas: código de área + número si se llama en otra área. De lo contrario, no marque el código de área.
                        <br>
                        CORREO <br>

                        Usted encontrará buzones en cada aeropuerto, y en la gran mayoría de los hoteles. Sin embargo, recomendamos que se prefieran los postes centrales. Lleva al menos 10 días para que el destinatario reciba una carta de Lima.<br><br>
                      </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                  </a>
                  <a class="right carousel-control" href="#carousel-example-generic-bolvia" role="button" data-slide="next">
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
  </section>





  <section id="team" style="padding-top: 0px">
      <br>
      <br>
      <br>
      <br>
      
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Quienes somos ?</h2>
            <p>Tierras de los Andes es un S.A.C, que abrió sus puertas en el año 2000. Nuestro principal objetivo es crear una completa vacaciones fuera de los caminos trillados. </p>
            <p>Tierras de los Andes es una agencia que organiza estancias y ofrece una amplia selección de servicios y servicios para clientes individuales o grupales. Conocemos cualquier tipo de estancia, desde el "descubrimiento" de viaje a la aventura de caminata, a través de estancias de negocios. Damos la bienvenida a familias así como a compañías de todo el mundo para descubrir Perú y más generalmente América del Sur.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Nuestro espiritu de trabajo</h2>
            <p>Tierras de los Andes ofrece una amplia gama de servicios, desde las operaciones de planificación hasta la coordinación de viajes a la medida y el servicio al cliente de calidad. Este tour operador peruano se basa en un equipo de profesionales dando lo mejor de sí mismos para garantizar los mejores servicios posibles a los viajeros y garantizar la satisfacción completa.
             <p> Un espíritu de aventura: Perú es un paraíso para el turismo de aventura. Ya sea subiendo a las montañas, caminando por antiguos senderos incaicos, recorriendo las carreteras que atraviesan el país, o rafting en aguas blancas. Tierras de los Andes te ofrece todo tipo de viajes de aventura dependiendo del nivel que buscas: De adrenalina extrema a aventuras más sencillas para aficionados o entusiastas.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>El equipo de Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
          <p align="center">
              Experiencia y entusiasmo para crear y ofrecerle los viajes más originales a Perú. Operamos desde el corazón de los Andes, Cusco, donde se encuentra nuestra sede central.
          </p>
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

          <div class="col-sm-12">
            <div class="team-member wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
              <div class="member-image">
                <img class="img-responsive" src="img/gruponuevo4.gif" alt="">
              </div>
              <div class="member-info">
                
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

  <div class="heading text-center col-sm-8 col-sm-offset-2">
<h2>Blog</h2>
</div>
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
      
      <br>
      <br>
      <br>
      <br>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Testimonios</h2>
          <p align="center">Comparta vuestras experiencias con nosotros</p>
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
                      <span class="cetagory"></span><!--TOUR???-->
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
                      <span class="cetagory">in </span><!--TOUR???-->
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
                      <span class="cetagory"></span><!--TOUR???-->
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
          

      </div>

        <div class="heading text-center col-sm-8 col-sm-offset-2" style="margin-top:-35px">
          <a class="blog-left-control" href="#post-carousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="blog-right-control" href="#post-carousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
        </div>

    </div>
        <div class="heading text-center col-sm-8 col-sm-offset-2">
            <br><br>
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Ingrese su testimonio
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
        id="favoritesModalLabel">Ingrese su testimonio</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Escriba su testimonio</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required" style="border: 2px solid #e6e6e6;">
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
                      <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required="required" style="border: 2px solid #e6e6e6;">
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
                  <button type="" class="btn-submit">Enviar ahora</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>






  </section><!--/#testimonial-->

  <div class="a2a_kit a2a_kit_size_32 a2a_floating_style a2a_default_style" style="bottom:150px;">
    <a class="a2a_button_facebook"></a><br>
    <a class="a2a_button_twitter"></a><br>
    <a class="a2a_button_google_plus"></a><br>
    <a class="a2a_button_pinterest"></a><br>
</div>

<section id="map-section" style="padding-top: 10%;">
    <br>
    
      <center>
        <h2>Contient</h2>
      </center>
      <br>
      
      <div class="col-sm-12">
          
          
          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                <center>
                   <div id="google-map" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div> 
                </center>
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Direcci&oacute;n:Calle Turquezas E-11 Urb. Kenedy A - CUSCO - PERU</p>
                <p> Tel&eacute;fono: 00 51 84 247277</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          <div class="col-sm-6">
            
            <div class="panel panel-default">
              <div class="panel-body">
                
                  <div id="google-map1" class="wow fadeIn" data-wow-duration="1000ms" data-wow-delay="400ms"></div>
                
              </div>
              <div class="panel-footer" style="color: #000;">
                <p> Direcci&oacute;n:Calle Bolivar 221 Oficina 4 1er piso Miraflores - Lima - Perú</p>
                <p> Tel&eacute;fono: 00 51 1 2434475</p>
                <p> Email: <a href="#"> terandes@terandes.com</a></p>
              </div>
            </div>
            
            
          </div>

          
      </div>
      <div class="heading text-center col-sm-8 col-sm-offset-2">
<button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#contactModal">
  Contactenos
</button>
</div>
      
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
</section>


<div class="modal fade" id="contactModal" 
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
        id="favoritesModalLabel">Contactenos</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Contactenos</h3>
          <p></p>
        
                 <br>
          <form id="main2-contact-form" name="contact-form" method="post" action="{{ route('publictestimonials.store') }}" enctype="multipart/form-data">
             <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input type="hidden" name="status" value="disapproved">
              <div class="row  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="name" class="form-control" placeholder="Nombre" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <input type="email" name="email" class="form-control" placeholder="Email" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                     
                    <div class="col-sm-6">
                    <div class="form-group">
                      <input type="text" name="nationality" class="form-control" placeholder="Nacionalidad" required="required" style="border: 2px solid #e6e6e6;">
                    </div>
                  </div>
                      
              </div>
                
                     
                  </div>
                <div class="form-group">
                  <textarea name="testimonial" id="testimonial" class="form-control" rows="4" placeholder="Contacto" style="border: 2px solid #e6e6e6;" required="required"></textarea>
                </div>
                <div class="form-group">
                  <button type="" class="btn-submit">Enviar</button>
                </div>
              </form>
                 </div>
     

 </div>
    </div>
</div>




<style>
  h4{
    color: #fff;
    
  }
  a{
    color: #000;
  }
  a:hover{
    color: #018416;
  }
  .panel-footer{
    background-color: #e6ece7;
  }
  ul#menu li {
    display:inline;
}
footer{
  background-color: rgb(16,54,9);
}
</style>



<!--inicio del footer-->

 <footer >
            
    <div class="footer-top wow fadeInUp animated" style="padding-top: 0px;" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;background-color: rgb(13,52,14)">
        
           <!-- 
      <div class="container text-center">
        <div class="row">
          
       
        <div class="col-lg-18">
          <div class="col-sm-2" style="padding-top: 10%; padding-rigth:1pt">
            
              <a href="#"><img height="160%" width="160%" src="img/terandes-logo.png"  ></a>
            
          </div>
          
          <div class="col-sm-6" style="padding-left:2cm">
            <div class="col-sm-12">
              <h4>TOURS</h4>
            </div>
            <div class="col-sm-6" >
              <h4>Aventure</h4>
              <img src="images/Aventura.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Haute Montagne</h4>
                <img src="images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Decouverte</h4>
              <img src="images/Descubir.jpg" height="60%" width="60%" class="img-circle">
            </div>
            <div class="col-sm-6">
              <h4>Excursions</h4>
                <img src="images/Excursiones.jpg" height="60%" width="60%" class="img-circle">
            </div>
            
          </div>
          <div class="col-sm-4">
            <h4>Suscribete</h4>
            <br>
            <h5 style="color: #fff;">Suscríbase para estar al tanto de noticias y notificaciones nuevas</h5>
            <center>
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:230px" >
              <button type="" class="btn-submit text-center" style="background-color:#fff;width:300px;text-align: center;color:#000;margin-left:5px" >Suscribirme ahora</button>
                  
          </form>
            </center>
          </div>
        </div>
        
         </div>
      </div>
  
      -->

<div class="container-fluid">
  <div class="row" style="text-align: center; color: white;">
 
     <div class="col-xs-12 col-md-8">
      <div class="row" sty>
        <div class="col-xs-12">
            <h2><strong>TOURS</strong></h2>
        </div>
    
      </div>
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Aventura</h4>
              <a href="{{url('')}}/es/tours/decouverte/Aventure"><img src="images/Aventura.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Haute Montagne</h4>
                <a href="{{url('')}}/es/tours/decouverte/High-mountain"><img src="images/Alta_montaña.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
                  <h4>Decouverte</h4>
              <a href="{{url('')}}/es/tours/decouverte/Discover"><img src="images/Descubir.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
            <a href="{{url('')}}/es/tours/decouverte/Excursions"><div class="col-xs-12 col-sm-6 col-md-3">
                   <h4>Excursions</h4>
                <img src="images/Excursiones.jpg" height="60%" width="60%" class="img-circle"></a>
            </div>
        </div>
    </div>
     <div class="col-xs-12 col-md-4">
            <h2><strong>Suscribete</strong></h2>
        
            <h5 style="color: #fff;">Suscríbase para tener noticias y notificaciones nuevas</h5>
          
              <form action="{{route('publicnewsletters.store')}}" method="post">
            {{ csrf_field() }}
              <?php $url = Request::path();?>
              <input type="hidden" name="language" value="{{$url}}">
              <input name='email' placeholder='example@mail.com' class="form-control text-center" type="email" style="width:90%">
              <button type="submit" class="btn-submit text-center" style="width:90%">Suscribirme ahora</button>
                  
          </form>
           
    </div>
  </div>
</div>
    </div>
    
  </footer>


  <!--fin  del footer-->








@endsection



