@extends('templates.templateF')
@section("css-integration","css/allFichier.css")
@section("contenu")

@isset($id)
    <div id="bigContainner">
        <a href="{{route('fichier.create',$id)}}" title="Ajouter un fichier" id="add-F" >
        <div class="contain-croix">
            <div id="LT"></div>
            <div id="RT"></div>
        </div>
        <div class="contain-croix">
            <div id="LB"></div>
            <div id="RB"></div>
        </div>
        </a>

        <div  id="div-fichier" style="width:100%;display:flex;justify-content:center">
            <div id="fichier-content" style="display:flex;flex-wrap:wrap;width:95%;padding:3%">
                @isset($fichiers)
                    @foreach($fichiers as $fichier)
                    <div id="fichier" style="box-shadow: 0.5px 0.5px 4px grey;width:23%;height:120px;margin:1%;background-color:white;border-radius:15px">
                        <div id="logo-fichier">
                            <div id="logo" style="background-image:url('{{$fichier->imageFile}}');">

                            </div>
                        </div>

                        <div id="name-telecharger">
                            <div id="name">
                                {{$fichier->nomFile}}
                            </div>
                            <div id="tel">
                                <a href="{{route('fichier.download',$fichier->id)}}" id="telecharger">
                                    Telecharger
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endisset
            </div>
        </div>
    </div>
@endisset
@endsection