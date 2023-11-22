@extends('layouts/app')

@section('content')
<div class="mx-auto col-8 mt-5 border rounded shadow-lg w-60">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/upload/1.png" class="d-block w-100" alt="1">
            </div>
            <div class="carousel-item">
                <img src="/upload/2.png" class="d-block w-100" alt="2">
            </div>
            <div class="carousel-item">
                <img src="/upload/3.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="/upload/4.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="/upload/5.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="/upload/6.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="/upload/7.png" class="d-block w-100" alt="3">
            </div>
            <div class="carousel-item">
                <img src="/upload/8.png" class="d-block w-100" alt="3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="mx-auto col-8 border rounded p-5 shadow my-5">
<h2>A propos</h2>
    <div>
        <p class="fw-semibold">Vous n’êtes pas satisfaite du résultat quand vous vous épilez chez vous ? Confiez votre maillot à une pro. Manon,
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
</div>


@endsection
