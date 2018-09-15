@extends('app')
@section('content')
<div class="welcome">
    <section class="section for-who has-text-centered">
        <div class="title">
            Voor wie?
        </div>
        <div class="container-small">
                De service en online portal van onterechtvast.nl zijn er volledig op gericht om jou te helpen in het claimen waar je recht op hebt! Van begin tot eind heb je duidelijkheid over alle stappen die je zelf moet ondernemen. Door onze ervaring kunnen wij samen jouw schadevergoeding claimen.
        </div>
    </section>
    <hr>
    <section class="section for-who">
        <div class="title has-text-centered">
            Wie zijn wij?
        </div>
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification is-danger">
                                <p class="title">Snel</p>
                                <p class="subtitle">Direct alle belangrijke documenten overzichtelijk in een persoonlijke portal</p>
                            </article>
                            <article class="tile is-child notification is-warning">
                                <p class="title">No Cure No Pay</p>
                                <p class="subtitle">Onze service is 30% goedkoper dan de meeste bedrijven. Geen resultaat is bij ons gewoon je
                                    geld terug.</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-vertical">
                    <div class="tile">
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification is-success">
                                <p class="title">Gemakkelijk</p>
                                <p class="subtitle">Vul je gegevens in en leun achterover terwijl wij het werk voor je doen</p>
                            </article>
                            <article class="tile is-child notification is-info">
                                <p class="title">Overzichtelijk</p>
                                <p class="subtitle">Wij begeleiden je van begin tot eind door de rechtelijke jungle</p>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <section class="section has-text-centered">
        <div class="title">
            Deze mensen gingen u voor:
        </div>
        <carousel :autoplay="{{ json_encode(true) }}" :per-page="1" :navigation-enables="{{ json_encode(true) }}" :loop="{{ json_encode(true) }}"
            :autoplay-timeout="5000">
            <slide>
                <div class="container-small">
                    <div class="title is-4 is-italic">
                        "Erg overzichtelijk"
                    </div>
                    <span class="is-italic">"Toen ik hoorde dat ik recht had op een schadevergoeding omdat ik onschuldig heb vastgezeten, wilde ik dit direct regelen. Toch vond ik het erg lastig om alle informatie daarvoor te vinden. Door Onterechtvast.nl werd voor mij direct het bedrag berekend waar ik wettelijk recht op had."</span>
                </div>
            </slide>
            <slide>
                <div class="container-small">
                    <div class="title is-4 is-italic">
                        "Precies wat ik zocht"
                    </div>
                    <span class="is-italic">Na betaling kon ik direct al mijn persoonlijke documenten vinden in de online portal. Ik wist precies wat ik moest doen en hierdoor kreeg veel vertrouwen toen ik naar de rechtbank ging. Helemaal geen advocaat nodig!</span>
                </div>
            </slide>
            <slide>
                <div class="container-small">
                    <div class="title is-4 is-italic">
                        "Echt waarde voor je geld"
                    </div>
                    <span class="is-italic">Eerst heb ik hulp gezocht bij een andere online rechtshulp, maar helaas werd ik daar niet wijzer van. Het was ook erg vaag waar ik nou voor zou moeten betalen. Met de online check van onterechtvast.nl was precies duidelijk hoeveel schadevergoeding ik terug kreeg. Voor die service is het de succes fee van 19% zeker waard.</span>
                </div>
            </slide>
        </carousel>
    </section>
    <hr>
    <section class="section">
        <div class="title has-text-centered">
            Alternatieven
        </div>
        <div class="container-small section">
            <div class="title is-4">
                Advocaat
            </div>
            <span>Een advocaat is waarschijnlijk de eerste waar je op uit komt voor hulp bij het indienen van een verzoek tot schadevergoeding. Zo’n advocaat heeft expertise, maar het is ook een dure oplossing. Daarbij is gebleken dat advocaten kantoren aan eenvoudige zaken als deze geen persoonlijke aandacht geven. Dan is een online service en altijd toegang tot je eigen gegevens wel zo fijn! Natuurlijk is het ook leuk om achteraf tegen je vrienden te kunnen vertellen dat je op eigen kracht geld hebt geclaimd bij de rechter.</span>
        </div>
        <div class="container-small section">
            <div class="title is-4">
                Zelf doen
            </div>
            <span>Sommige mensen kiezen er voor om eigenhandig de schadevergoeding te claimen. Onze ervaring is vaak dat het zelf doorlopen van dit proces onzekerheid met zich meebrengt. In de meeste gevallen komt de zaak niet eens bij de rechter omdat het verzoekschrift tot schadevergoeding niet juist is opgesteld. Ook horen wij vaak dat na de zitting de aangevraagde schadevergoedingen niet worden toegekend door:</span>
            <ul>
                <li>ontbrekend bewijs</li>
                <li>door de verkeerde feiten te noemen in de pleitnota</li>
                <li>door verkeerde antwoorden op de vragen van de rechter</li>
            </ul>
        </div>
    </section>
    <section class="section counter has-text-white">
        <counter></counter>
    </section>
    <section class="section has-text-centered">
        <div class="title">Is dit iets voor jou?
        </div>
        <div class="subtitle">Doe nu de test!</div>
        <a class="button is-outlines" href="{{ route('test') }}">Doe de test!</a>
    </section>
</div>
@endsection