@extends('layouts.app')

@section('content')
    <h1> {{ $title }} </h1>
    <h2>L'équipe :</h2>

    @foreach ($team as $membre)
        <div>
            <p>{{ $membre['firstName'] }}</p>
            <ul>
                <img src="{{ $membre['image'] }}" alt="{{ $membre['firstName'] }}">
                <li>
                    Status : {{ $membre['status'] }}
                </li>
            </ul>
        </div>
    @endforeach



    <h2>A propos</h2>
    <div>
        <p>Vous n’êtes pas satisfaite du résultat quand vous vous épilez chez vous ? Confiez votre maillot à une pro. Manon,
            de l’institut de beauté Maison Namasté à Ronchin, vous accueille en périphérie de Lille pour vous faire
            bénéficier de tout son savoir-faire en matière d’épilation. A vous les jambes lisses et le maillot impeccable !
        </p>
        <p>Manon croit en l’authenticité de chaque instant. Aussi, elle fera de votre rendez-vous un moment unique durant
            lequel vous vous sentirez aussi détendue que belle. A la carte : épilation pour femme comme pour homme, beauté
            des mains et des pieds, beauté du regard, soins du visage et du corps divins.</p>
        <p>Avant de découvrir les soins du visage de votre institut, Manon réalisera un diagnostic de peau afin de répondre
            au mieux à vos besoins. Ainsi, vous profiterez d’un soin personnalisé. Du démaquillage à l’application du sérum,
            en passant par l’extraction de vos comédons et un délicieux massage du visage, vous allez faire peau neuve et
            passer un pur moment de détente.
        </p>
        <p>Vous voulez magnifier votre regard ? L’institut de beauté Maison Namasté à Ronchin va devenir l’adresse favorite
            de vos jolis yeux. Offrez-leur une extension du plus bel effet. Choisissez entre une pose cil à cil, pour
            rallonger vos cils et leur offrir un effet “oeil de biche” naturel, un volume russe, pour obtenir une belle
            frange de cils fournie, ou une pose mixte, combo des deux, pour un regard renversant. Prête à vous mettre en
            valeur ? Prenez vite rendez-vous.</p>
    </div>
@endsection
