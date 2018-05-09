@extends('website.partials.it.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
              
                <<small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Chiamateci ora: 00 51 84 247277</a></small>
            </div>

            <div class="language-top pull-right">
                <small class="top-element-language">Langue:</small>
                <a class="route-language" href="{{url('')}}/"><img class="img-lng" src="{{url('')}}/img/lng/fr.png" alt="Idioma"></a>
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
              <h3><a href="{{url('')}}/it/tours/decouverte/Discover">Scoperta </a> </h3>
              <p>Scopri il paese e le sue inescapabili in tutta semplicità</p>
            </div>
                    </div>
        <div class="col-sm-4">
            <div>
              <img src="images/aventura.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/it/tours/decouverte/Aventure">Avventura</a></h3>
              <p>Per coloro che amano il trekking in luoghi ancora autentici e selvaggi</p>
            </div>
                    </div>
                    <div class="col-sm-4">
               <div>
              <img src="images/Alta_montana.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/it/tours/decouverte/High-Mountain">Alta montagna</a></h3>
              <p>Per gli amanti delle alte vette e nuove sfide</p>
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
                <h3><a href="{{url('')}}/it/tours/decouverte/Excursions">escursioni</a></h3>
              <p>Visite ai 4 angoli del Perù</p>
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
            <h2>À mesure</h2>
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
              <h3>Nel gruppo</h3>
              <p>Un viaggio che soddisferà tutti</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_familia.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>Famiglia</h3>
              <p>Approfitta di un viaggio adatto per adulti e per i giovani</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_pareja.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>Paio</h3>
              <p>Condividi momenti indimenticabili con il tuo partner</p>
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
          <h2>Preparate il vostro viaggio</h2>
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
                    <p>Informazioni generali, Formalità, Salute e sicurezza, Cosa devo portare?, Migliore stagione, Vacanze, Informazioni pratiche.</p>
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
                      <h3 align="center" style="color: #fff; margin-top: 0px;">Informazioni generali Perù</h3>
                  </div>
            <div class="modal-content">
              <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Wrapper for slides -->
                  <div class="carousel-inner">
                    <div class="item active">
                     <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni generali <br> Perù è: </ p> <br>
                         • Una popolazione di circa 30 milioni. <br>
                         • Reddito bancario netto di 301,5 miliardi di dollari nel 2011
                         • Un'area totale di 1.285.220 km², tre volte l'area della Francia. <br>
                         • 2414 Km di costa. <br>
                         • Un paese che ha un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                         • Un paese con la vetta del Monte Huascarán a 6768 metri sul livello del mare. <br>
                         <br>
                         Una destinazione speciale: <br>
                         • Il Perù ha 28 dei 31 climi del pianeta (in alcune parti del paese, il clima è soleggiato tutto l'anno) • 84 dei 104 ecosistemi del mondo sono presenti in Perù. <br>

                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Salute e sicurezza <br>

                        Generale: In Perù, è importante rispettare alcune norme igieniche e sanitarie. Vi consigliamo di:
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                        • Evitare di carne e pesce acquistati sul mercato: preferite i ristoranti a provare specialità come ceviche. <br>

                        Vaccini: Per entrare in Perù dalla Francia, nessun vaccino è obbligatorio. Alcuni comunque consigliati sono: <br>
                        • Dipolo-tetano-poliomielite <br>
                        • Febbre gialla (in caso di soggiorno nell'Amazzonia, obbligatorio in caso di soggiorno in Venezuela da El Peru)
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Perù) <br> <br>
 
                        Soggiorno in Amazzonia: oltre alla vaccinazione contro la febbre gialla, si può raccomandare un trattamento per la malaria (consultare il consiglio del medico) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Cosa devo portare?<br>
                         Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù<br>
 
Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informations pratiques<br>
                        DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Pérou, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Pérou sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Pérou, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Pérou vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Pérou : 00 + 51 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.
                        <br><br>
                        COURRIER<br>

                        Vous trouverez des boites postales dans chaque aéroport, et dans la grande majorité des hôtels. Nous recommandons cependant de préférer les postes centrales.   Il faut compter au moins 10 jours pour le destinataire reçoive une lettre depuis Lima.<br><br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/5.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni pratiche
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Perù, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V
                        Frequenza: 50/60 Hertz prese elettriche in Perù sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Perù, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Perù verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 51 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                        MAIL <br>

                        Troverete cassette postali in tutti gli aeroporti e in maggior parte degli alberghi. Si consiglia comunque di preferire le stazioni centrali. Ci vogliono almeno 10 giorni per il destinatario di ricevere una lettera da Lima. <br>
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
                        Informazioni generali <br> Perù è: </ p> <br>
                         • Una popolazione di circa 30 milioni. <br>
                         • Reddito bancario netto di 301,5 miliardi di dollari nel 2011
                         • Un'area totale di 1.285.220 km², tre volte l'area della Francia. <br>
                         • 2414 Km di costa. <br>
                         • Un paese che ha un confine comune con il Cile, l'Argentina, il Brasile, l'Ecuador e la Bolivia. <br>
                         • Un paese con la vetta del Monte Huascarán a 6768 metri sul livello del mare. <br>
                         <br>
                         Una destinazione speciale: <br>
                         • Il Perù ha 28 dei 31 climi del pianeta (in alcune parti del paese, il clima è soleggiato tutto l'anno) • 84 dei 104 ecosistemi del mondo sono presenti in Perù. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                         Salute e sicurezza <br>

                        Generale: In Perù, è importante rispettare alcune norme igieniche e sanitarie. Vi consigliamo di:
 
                        • Non bere acqua di rubinetto a meno che non sia bollita o purificata utilizzando pellet. <br>
                        • Lavare le mani regolarmente per ridurre il rischio di contaminazione. <br>
                        • Evitare di carne e pesce acquistati sul mercato: preferite i ristoranti a provare specialità come ceviche. <br>

                        Vaccini: Per entrare in Perù dalla Francia, nessun vaccino è obbligatorio. Alcuni comunque consigliati sono: <br>
                        • Dipolo-tetano-poliomielite <br>
                        • Febbre gialla (in caso di soggiorno nell'Amazzonia, obbligatorio in caso di soggiorno in Venezuela da El Peru)
                        • Influenza (raccomandata per i soggetti più fragili, molti casi di influenza AH1N1 rilevati in Perù) <br> <br>
 
                        Soggiorno in Amazzonia: oltre alla vaccinazione contro la febbre gialla, si può raccomandare un trattamento per la malaria (consultare il consiglio del medico) <br>
                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        div class="carousel-caption">
                       Cosa devo portare?<br>
                         Ecco un elenco esaustivo di cosa portare durante un viaggio in Perù<br>
 
Generale: - Una borsa o un sacchetto morbido - Un zaino da 20 a 30 litri - Scarpe comode - Un cappello o un tappo - Occhiali da sole - Una giacca impermeabile Gore Tex - Abbigliamento caldo per le serate con altitudine, la temperatura scende rapidamente - un kit di farmacia - un coperchio di sciarpa o collo - pantaloncini
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Informations pratiques<br>
                        DÉCALAGE HORAIRE De mars à octobre (heure d’été), il faudra reculer votre montre de 7 heures en arrivant au Pérou, et de 6 heures seulement de novembre à février.   <br>
                        ÉLECTRICITÉ Voltage : 110/220V  <br>
                        Fréquence : 50/60 Hertz Les prises électriques au Pérou sont de deux types :  TÉLÉPHONE ET TÉLÉCOMMUNICATIONS Il est très facile de communiquer avec ses amis ou sa famille depuis le Pérou, les cabines téléphoniques étant nombreuses, et la couverture internet très bonne. <br>
                        Pour appeler du Pérou vers la France : 00 + 33 + numéro du correspondant (sans le 0 initial).  <br>
                        Pour appeler de la France vers le Pérou : 00 + 51 + indicatif de la ville (sans le 0) + numéro du correspondant.   <br>
                        Pour effectuer des appels intérieurs : indicatif de la région + numéro si l’on appelle dans une autre région. Sinon, ne pas composer l’indicatif.
                        <br><br>
                        COURRIER<br>

                        Vous trouverez des boites postales dans chaque aéroport, et dans la grande majorité des hôtels. Nous recommandons cependant de préférer les postes centrales.   Il faut compter au moins 10 jours pour le destinataire reçoive une lettre depuis Lima.<br><br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Informazioni pratiche
                        FUSO ORARIO Da marzo a ottobre (ora estiva), ci vorrà di nuovo l'orologio 7 ore che arrivano in Perù, e 6 ore da novembre a febbraio. <br>
                        ELETTRICITÀ Tensione: 110 / 220V
                        Frequenza: 50/60 Hertz prese elettriche in Perù sono di due tipi: TELEFONO E TELECOMUNICAZIONI E 'molto facile comunicare con gli amici o la famiglia dal Perù, cabine telefoniche sono molti, e molto buona copertura internet. <br>
                        Per chiamare il Perù verso la Francia: 00 + 33 + numero (senza il primo 0). <br>
                        Per chiamare dalla Francia al Perù: 00 + 51 + prefisso locale (senza lo 0) + numero. <br>
                        Per effettuare chiamate interne: il prefisso + il numero di zona se viene chiamato in un'altra area. Altrimenti, non comporre il codice di zona.
                        <br>
                        MAIL <br>

                        Troverete cassette postali in tutti gli aeroporti e in maggior parte degli alberghi. Si consiglia comunque di preferire le stazioni centrali. Ci vogliono almeno 10 giorni per il destinatario di ricevere una lettera da Lima. <br>
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
            <h2>Chi siamo?</h2>
            <p>Tierras de los Andes è un S.A.C (Société Anonyme Fermée), che ha aperto le sue porte nel 2000. Il nostro obiettivo principale è quello di creare una vacanza completa sulla pista battuta. </p>
             <p> Tierras de los Andes è un'agenzia che organizza soggiorni e offre una vasta gamma di servizi e servizi per la clientela individuale o di gruppo. Concepiremo qualsiasi tipo di soggiorno, dal viaggio "scoperto" all'avventura, attraverso soggiorni d'affari. Accogliamo famiglie e aziende provenienti da tutto il mondo per scoprire il Perù e più in generale l'America del Sud. </p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Il nostro stato d'trbajo </h2>
             <p> Tierras de los Andes offre una vasta gamma di servizi, dalle operazioni di pianificazione al coordinamento del viaggio su misura e al servizio clienti di qualità. Questo operatore turistico peruviano si affida a un team di professionisti che offrono il meglio di sé per garantire i migliori servizi possibili ai viaggiatori e garantire la completa soddisfazione. </p>
             <p> Uno spirito di avventura: il Perù è un paradiso per il turismo d'avventura. Se si arrampica le montagne, cammina sui sentieri antichi di Inca, attraversa la rete di strade che attraversano il paese o il rafting in acque bianche. Tierras de los Andes ti offre tutti i tipi di viaggi avventura a seconda del livello che stai cercando: dall'estrema adrenalina ad avventure più semplici per amatori o appassionati. </p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>La squadra Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
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
          <h2>Chi siamo</h2>
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
  inserisci la tua testimonianza
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
        id="favoritesModalLabel">inserisci la tua testimonianza</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Inserisci una testimonianza</h3>
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
                  <button type="submit" class="btn-submit">Invia ora</button>
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
            <h2> Contenido</h2>
            
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
                  <button type="submit" class="btn-submit">Invia ora</button>
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



