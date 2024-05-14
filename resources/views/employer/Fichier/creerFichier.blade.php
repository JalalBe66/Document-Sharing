@extends("templates.templateF")

@section("css-integration","css/creerFichier.css")
@section("contenu")

<div id="bigContainner" style="width:100%;height:650px">
    <form enctype="multipart/form-data" action="{{route('fichier.store')}}" method="post" id="creerContainner">
        @csrf
        <div id="titre">
            Créer Nouveau Fichier
        </div>
        <div class="inp" id="nom-cont">
            <label for="nom">Nom</label><br>
            <input class="form-control" type="text" name="nom" id="inp-nom">
        </div>
        <div class="inp" id="type-cont">
            <label for="">Type</label><br>
            <select name="type" id="inp-type">
                <option value="TXT">Fichier Text</option>
                <option value="PDF">Fichier PDF</option>
                <option value="IMG">Image</option>
                <option value="MP4">Video (MP4)</option>
                <option value="Autre">Autre</option>
            </select>
        </div>
        <div class="inp" id="url-cont">
            <label for="file-upload" class="custom-file-upload">
                Choisie votre fichier
            </label>
            <input name="url" id="file-upload" type="file" />
        </div>
        <input name="propriétaire" value="{{auth()->user()->id}}"  />
        <input name="dossier" value="{{$idDossier}}"   />
        <div class="inp" id="sub-cont">
            <button id="button-id" type="submit">Ajouter</button>
        </div>


    </form>
</div>

@endsection