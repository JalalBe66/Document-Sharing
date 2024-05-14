@extends("templates.templateF")
@section("css-integration","css/creerDossier.css")
@section("contenu")

<div id="bigContainner" style="width:100%;height:650px">
    <form action="{{route('addDoc',auth()->user()->id)}}" method="post" id="creerContainner">
        @csrf
        <div id="titre">
            Créer Nouveau Dossier
        </div>
        <div class="inp" id="titre-cont">
            <label for="nomDoc">Titre</label><br>
            <input class="form-control" type="text" name="nomDoc" id="inp-nom">
            @error("nomDoc")
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <div class="inp" id="desc-cont">
            <label for="descDoc">Description</label><br>
            <input  class="form-control" type="text" name="descDoc" id="inp-desc" />
            @error("descDoc")
                <div class="error">{{$message}}</div>
            @enderror
        </div>
        <input name="propriétaire" value="{{auth()->user()->id}}" style="visibility: hidden;" />
        <div class="inp" id="sub-cont">
            <button id="button-id" type="submit">Ajouter</button>
        </div>


    </form>
</div>

@endsection