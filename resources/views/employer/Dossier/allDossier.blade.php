@extends("templates.templateF")
@section("css-integration","css/allDossier.css")
@section("contenu")
<div id="bigContainner">
    <a href="{{route('CreerDoc')}}" title="Ajouter un dossier" id="add-F" >
    <div class="contain-croix">
        <div id="LT"></div>
        <div id="RT"></div>
    </div>
    <div class="contain-croix">
        <div id="LB"></div>
        <div id="RB"></div>
    </div>
</a>

@isset($dossiers)
<div id="div-dossier" style="width:100%;display:flex;justify-content:center;">
    <div id="dossier-content" style="display:flex;flex-wrap:wrap;width:95%;padding:3%">
        @foreach($dossiers as $dossier)
        <div id="dossier" style="box-shadow: 0.5px 0.5px 4px grey;width:25%;height:150px;margin:1%;background-color:white;border-radius:15px">
            <div id="titre" style="font-weight:bolder;font-size:24px;font-family:arial">
                <div id="logo-doc" style="background-image:url('imgs/dossier.png');"></div>
                {{$dossier->nomDoc}}
            </div>
            <div id="description">
                {{$dossier->descDoc}}
            </div>
            <div id="more-date">
                <a href="{{route('fichier.index',$dossier->id)}}" id="more">
                    Afficher
                </a>
                <div id="date">
                    {{$dossier->created_at}}
                </div>
            </div>
        </div>
     
        @endforeach

    </div>
</div>

@endisset
</div>

@endsection