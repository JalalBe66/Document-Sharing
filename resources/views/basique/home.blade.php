@extends("templates.templateC")

@section("titre","Accueil")
@section("lign-nav-link-home" , "lign-nav-link active")
@section("nav-link-home" , "nav-link active")
@section("css-integration" , "css/Accueil.css")
@section("contenu")

<div id="grandContainner">

    <div id="containnerText" class="containnerElem">
        <div id="containnerText-titre" class="containnerText-elem">
            Bienvenue sur votre site de Partage et d'organisation de vos documents 
        </div>
        <div id="containnerText-paragraph" class="containnerText-elem">
            Notre plateforme offre une solution simple et efficace pour la gestion et le partage de vos documents en ligne
        </div>
        <div id="containnerText-cta" class="containnerText-elem">
        @guest
            <a href="{{ route('login') }}" class="connection-elem"><div>Connecter</div></a>
        @endguest
        @auth
            <a href="{{ route('login') }}" class="connection-elem"><div>Mon compte</div></a>
        @endauth
        </div>
    </div>

    <div id="containnerImg" class="containnerElem">
        <img width="450px" src="{{asset('imgs/bg.png')}}" alt="non">
    </div>
</div>
<div style="text-align: center; color:var(--bleu);font-weight:bolder;font-size:30px;margin-top:5%;margin-bottom:5%">Nos Fonctionnalités</div>
<div id="fonction-containner">
    <div class="fonction-elem-containner">
        <div id="fonction-elem-dowload" class="fonction-elem"></div>
        <p>Permet aux utilisateurs de télécharger des fichiers depuis leur appareil sur la plateforme.</p>
    </div>
    <div  class="fonction-elem-containner">
        <div id="fonction-elem-notification" class="fonction-elem"></div>
        <p>Envoie des email aux utilisateurs pour les informer des nouvelles activités sur leurs fichiers .</p>
    </div>
    <div  class="fonction-elem-containner">
        <div id="fonction-elem-organisation" class="fonction-elem"></div>
        <p>Offre la possibilité de créer des dossiers et de les organiser pour mieux structurer les documents.</p>
    </div>
</div>

@endsection