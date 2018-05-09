@extends('website.partials.de.main')
@section('title', 'Terandes')
@section('keywords', 'agence voyage perou, voyage perou, tour operateur perou, aventure inca perou, agence de voyages au perou, voyage au perou, circuit perou, perou tourisme')
@section('description', 'Tierras de los Andes: Agence de voyages et Tour opérateur péruvien spécialiste des voyages découverte, aventure, randonnée et trekking en petit groupe et sur mesure')

@section('translate')
    <div class="top-header">

        <div class="wrap-top">

            <div class="info-top pull-left">
              
                <<small class="top-element"><strong><a href="#">Info: terandes@terandes.com</a></strong></small>
                <small class="top-element"><a href="#">Rufen Sie uns an: 00 51 84 247277</a></small>
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
              <h3><a href="{{url('')}}/de/tours/decouverte/Discover">Entdeckung </a> </h3>
              <p>Entdecken Sie das Land und seine Unausweichlichkeiten in aller Einfachheit</p>
            </div>
                    </div>
        <div class="col-sm-4">
            <div>
              <img src="images/aventura.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/de/tours/decouverte/Aventure">Abenteuer</a></h3>
              <p>Für diejenigen, die trekking an Orten noch authentisch und wild lieben</p>
            </div>
                    </div>
                    <div class="col-sm-4">
               <div>
              <img src="images/Alta_montana.png" style="width: 90px; height: 90px">
            </div>
            <div class="service-info">
                <h3><a href="{{url('')}}/de/tours/decouverte/High-Mountain">Hoher Berg</a></h3>
              <p>Für Liebhaber von hohen Gipfeln und neuen Herausforderungen</p>
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
                <h3><a href="{{url('')}}/de/tours/decouverte/Excursions">Ausflüge</a></h3>
              <p>Besuche in den 4 Ecken von Peru</p>
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
            <h2>Die</h2>
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
              <h3>In der Gruppe</h3>
              <p>Eine Reise, die alle befriedigen wird</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_familia.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>Familie</h3>
              <p>Nutzen Sie die passende Reise für Erwachsene und Jugendliche</p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="450ms">
            <div>
              <img src="images/en_pareja.jpg" style="width:90px; height: 90px">
            </div>
            <div class="service-info">
              <h3>Paar</h3>
              <p>Teilen Sie unvergessliche Momente mit Ihrem Partner</p>
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
          <h2>Bereiten Sie Ihre Reise vor</h2>
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
                    <p>Allgemeine Informationen, Formalitäten, Gesundheit und Sicherheit, Was sollte ich mitbringen?, Beste Jahreszeit, Feiertage, Praktische Informationen.</p>
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
                     <img class="img-responsive" src="img/4.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Allgemeine Informationen über Peru ist: </p> <br>
                         • Eine Bevölkerung von etwa 30 Millionen. <br>
                         • Netto-Bankertrag von 301,5 Milliarden US-Dollar im Jahr 2011. <br>
                         • Eine Gesamtfläche von 1.285.220 km², dreimal so groß wie Frankreich. <br>
                         • 2414 km Küste. <br>
                         • Ein Land mit einer gemeinsamen Grenze zu Chile, Argentinien, Brasilien, Ecuador und Bolivien. <br>
                         • Ein Land mit dem Gipfel des Berges Huascarán auf 6768 Meter über dem Meeresspiegel. <br>
                         <br>
                         Ein besonderes Reiseziel: <br>
                         • Peru hat 28 der 31 Klimas auf dem Planeten (in einigen Landesteilen herrscht das ganze Jahr über ein sonniges Wetter) • 84 der 104 Ökosysteme der Welt sind in Peru vertreten. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/4.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Gesundheit und Sicherheit <br>
                        Allgemein: In Peru ist es wichtig, einige Regeln für Hygiene und Gesundheit einzuhalten. Wir beraten Sie:
 
                        • Trinken Sie kein Leitungswasser, außer es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Risiko einer Kontamination zu verringern. <br>
                        • Vermeiden Sie Fleisch und Fisch, die auf dem Markt gekauft werden. Bevorzugen Sie Restaurants, um Spezialitäten wie Ceviche zu probieren. <br>

                        Impfstoffe: Um aus Frankreich nach Peru einzureisen, ist kein Impfstoff erforderlich. Einige werden jedoch empfohlen: <br>
                        • Diphtherie-Tetanus-Poliomyelitis <br>
                        • Gelbfieber (Aufenthalt im Amazonasgebiet, obligatorisch bei einem Aufenthalt in Venezuela aus Peru) <br>
                        • Influenza (empfohlen für die zerbrechlichsten Personen, viele Fälle von Influenza AH1N1 in Peru) <br> <br>
 
                        Aufenthalt in Amazonien: Zusätzlich zur Gelbfieberimpfung kann eine Behandlung gegen Malaria empfohlen werden (siehe Rat Ihres Arztes) <br>

                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/4.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Was sollte ich mitbringen?
                         Hier ist eine erschöpfende Liste von was während einer Reise nach Peru zu bringen ist <br>
 
Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/4.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                       Beste Jahreszeit, Feiertage <br>
                        Peru besteht auch aus so unterschiedlichen Regionen (Küste, Anden, Amazonien), die sich durch sehr unterschiedliche Klimate auszeichnen: <br>
                        • An der Küste zeigt der Südsommer (November bis April) hohe Temperaturen, während der Winter kühler (aber nie kalt) ist und von Morgennebel geprägt ist. <br>
                        • In den Anden und Amazonien gibt es zwei Hauptsaisons: die Trockenzeit (Mai bis Oktober) und die Regenzeit (November bis April). Wenn es während der Regenzeit möglich ist, in der Andenregion zu reisen, ist es nicht ratsam, in den Bergen zu wandern, wo Schneefälle die Wege gefährlich machen. <br>
                        • In den Anden kann das Wetter im Laufe eines Tages sehr variabel sein. Wir empfehlen Ihnen deshalb, verschiedene Kleidung, das heißt warm für die kühlen Abende, heller für Tage oft sonnig und eine Regenkleidung zu bieten. <br>

                         Da Peru dem Äquator sehr nahe ist, ist die Sonne vertikal und stark. Dieses Phänomen wird durch die Höhe stark verstärkt. Vergessen Sie nicht, einen Hut, Sonnencreme und Sonnenbrille mit einem hohen Schutz zu tragen.</p>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/4.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Praktische Informationen <br>
                        ZEITUNTERSCHIED Von März bis Oktober (Sommerzeit), dauert es Ihre Uhr 7 Stunden in Peru und 6 Stunden von November bis Februar Ankunft zurück. <br>
                        STROM Spannung: 110 / 220V
                        Frequenz: 50/60 Hertz Steckdosen in Peru sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder der Familie aus Peru zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        So rufen Peru nach Frankreich: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru zu nennen: 00 + 51 + Vorwahl (ohne 0) + Nummer. <br>
                        Um interne Anrufe: Vorwahl + Nummer, wenn in einer anderen Region genannt. Ansonsten wählen Sie nicht die Ortsvorwahl.
                        <br>
                        MAIL <br>

                        Sie finden Postfächer in jedem Flughafen und in der überwiegenden Mehrheit der Hotels. Wir empfehlen jedoch, die zentralen Stationen vorzuziehen. Es dauert mindestens 10 Tage für den Empfänger einen Brief von Lima zu erhalten. <br>
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
                        Allgemeine Informationen über Peru ist: </p> <br>
                         • Eine Bevölkerung von etwa 30 Millionen. <br>
                         • Netto-Bankertrag von 301,5 Milliarden US-Dollar im Jahr 2011. <br>
                         • Eine Gesamtfläche von 1.285.220 km², dreimal so groß wie Frankreich. <br>
                         • 2414 km Küste. <br>
                         • Ein Land mit einer gemeinsamen Grenze zu Chile, Argentinien, Brasilien, Ecuador und Bolivien. <br>
                         • Ein Land mit dem Gipfel des Berges Huascarán auf 6768 Meter über dem Meeresspiegel. <br>
                         <br>
                         Ein besonderes Reiseziel: <br>
                         • Peru hat 28 der 31 Klimas auf dem Planeten (in einigen Landesteilen herrscht das ganze Jahr über ein sonniges Wetter) • 84 der 104 Ökosysteme der Welt sind in Peru vertreten. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                         Gesundheit und Sicherheit <br>
                        Allgemein: In Peru ist es wichtig, einige Regeln für Hygiene und Gesundheit einzuhalten. Wir beraten Sie:
 
                        • Trinken Sie kein Leitungswasser, außer es wird gekocht oder mit Pellets gereinigt. <br>
                        • Waschen Sie Ihre Hände regelmäßig, um das Risiko einer Kontamination zu verringern. <br>
                        • Vermeiden Sie Fleisch und Fisch, die auf dem Markt gekauft werden. Bevorzugen Sie Restaurants, um Spezialitäten wie Ceviche zu probieren. <br>

                        Impfstoffe: Um aus Frankreich nach Peru einzureisen, ist kein Impfstoff erforderlich. Einige werden jedoch empfohlen: <br>
                        • Diphtherie-Tetanus-Poliomyelitis <br>
                        • Gelbfieber (Aufenthalt im Amazonasgebiet, obligatorisch bei einem Aufenthalt in Venezuela aus Peru) <br>
                        • Influenza (empfohlen für die zerbrechlichsten Personen, viele Fälle von Influenza AH1N1 in Peru) <br> <br>
 
                        Aufenthalt in Amazonien: Zusätzlich zur Gelbfieberimpfung kann eine Behandlung gegen Malaria empfohlen werden (siehe Rat Ihres Arztes) <br>
                      </div>
                    </div>
                     <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Was sollte ich mitbringen?
                         Hier ist eine erschöpfende Liste von was während einer Reise nach Peru zu bringen ist <br>
 
Allgemein: - Eine Tasche oder eine weiche Tasche - Ein Rucksack von 20 bis 30 Liter - Bequeme Schuhe - Ein Hut oder eine Kappe - Sonnenbrille - Eine wasserdichte Gore Tex Jacke - Warme Kleidung für die Abende mit Höhe, Temperatur sinkt schnell - Ein Apotheke-Kit - Ein Schal oder Hals-Cover - Shorts oder pantacourts
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                        Beste Jahreszeit, Feiertage <br>
                        Peru besteht auch aus so unterschiedlichen Regionen (Küste, Anden, Amazonien), die sich durch sehr unterschiedliche Klimate auszeichnen: <br>
                        • An der Küste zeigt der Südsommer (November bis April) hohe Temperaturen, während der Winter kühler (aber nie kalt) ist und von Morgennebel geprägt ist. <br>
                        • In den Anden und Amazonien gibt es zwei Hauptsaisons: die Trockenzeit (Mai bis Oktober) und die Regenzeit (November bis April). Wenn es während der Regenzeit möglich ist, in der Andenregion zu reisen, ist es nicht ratsam, in den Bergen zu wandern, wo Schneefälle die Wege gefährlich machen. <br>
                        • In den Anden kann das Wetter im Laufe eines Tages sehr variabel sein. Wir empfehlen Ihnen deshalb, verschiedene Kleidung, das heißt warm für die kühlen Abende, heller für Tage oft sonnig und eine Regenkleidung zu bieten. <br>
                      </div>
                    </div>
                    <div class="item">
                      <img class="img-responsive" src="img/11.jpg" width="100%;" alt="...">
                      <div class="carousel-caption">
                         Praktische Informationen <br>
                        ZEITUNTERSCHIED Von März bis Oktober (Sommerzeit), dauert es Ihre Uhr 7 Stunden in Peru und 6 Stunden von November bis Februar Ankunft zurück. <br>
                        STROM Spannung: 110 / 220V
                        Frequenz: 50/60 Hertz Steckdosen in Peru sind von zwei Arten: TELEFON UND TELEKOMMUNIKATION Es ist sehr einfach, mit Freunden oder der Familie aus Peru zu kommunizieren, Telefonzellen sind viele, und sehr gute Internet-Abdeckung. <br>
                        So rufen Peru nach Frankreich: 00 + 33 + Nummer (ohne die erste 0). <br>
                        Um von Frankreich nach Peru zu nennen: 00 + 51 + Vorwahl (ohne 0) + Nummer. <br>
                        Um interne Anrufe: Vorwahl + Nummer, wenn in einer anderen Region genannt. Ansonsten wählen Sie nicht die Ortsvorwahl.
                        <br>
                        MAIL <br>

                        Sie finden Postfächer in jedem Flughafen und in der überwiegenden Mehrheit der Hotels. Wir empfehlen jedoch, die zentralen Stationen vorzuziehen. Es dauert mindestens 10 Tage für den Empfänger einen Brief von Lima zu erhalten. <br>
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
            <h2>Wer wir sind ?</h2>
            <p>Tierras de los Andes ist eine S.A.C (Société Anonyme Fermée), die im Jahr 2000 ihre Pforten öffnete. Unser Hauptziel ist es, eine vollständige, abgelegene Tour durch Peru zu schaffen. </p>
            <p>Tierras de los Andes ist eine Agentur, die Aufenthalte organisiert und eine große Auswahl an Dienstleistungen und Dienstleistungen für Einzelpersonen oder Gruppen anbietet. Wir konzipieren jede Art von Aufenthalt, von der "Entdeckungsreise" zum Abenteuer-Trek, durch Geschäftsaufenthalte. Wir begrüßen Familien sowie Firmen aus der ganzen Welt, um Peru und ganz allgemein Südamerika zu entdecken.</p>
          </div>

        </div>
        <div class="col-sm-6">
          <div class="about-info wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
            <h2>Unser Geisteszustand</h2>
            <p>Tierras de los Andes bietet ein breites Leistungsspektrum von der Planung über die maßgeschneiderte Reisekoordination bis zum hochwertigen Kundenservice. Dieser peruanische Reiseveranstalter setzt auf ein Team von Fachleuten, die das Beste von sich geben, um den Reisenden den bestmöglichen Service zu bieten und somit die totale Zufriedenheit zu garantieren.</p>
            <p>Ein Abenteuergeist: Peru ist ein Paradies für Abenteuertourismus. Ob Sie die Berge erklimmen, auf alten Inka-Pfaden wandern, durch das Netz von Straßen, die das Land durchziehen, wandern oder Wildwasser-Rafting. Tierras de los Andes bietet Ihnen alle Arten von Abenteuerreisen je nach dem Niveau, das Sie suchen: Von extremem Adrenalin bis zu einfacheren Abenteuern für Amateure oder Enthusiasten.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="heading text-center col-sm-8 col-sm-offset-2 wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="300ms">
          <h2>Das Team Tierras de los Andes <a href="{{url('')}}/tours/decouverte/le-perou-en-famille"></a></h2>
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
          <h2>Über uns</h2>
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
  Geben Sie Ihre Aussage ein
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
        id="favoritesModalLabel">Geben Sie Ihre Aussage ein</h4>
      </div>
             <div class="modal-body"> 

     <div style="padding:0 5 5 5">
          <h3>Geben Sie Ihre Aussage ein</h3>
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
                  <button type="submit" class="btn-submit">Jetzt senden</button>
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
            <h2>Enthält</h2>
            
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



