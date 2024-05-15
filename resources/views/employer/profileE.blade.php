@extends("templates.templateF")
@section("css-integration","css/profile.css")
@section("contenu")

    <div id="GContainnerP">
        <div id="TContainnerP">
            
                <p>Mon Compte </p>
            
        </div>

        <form method="post" enctype="multipart/form-data" action="{{route('Profile.edit',auth()->user()->id)}}" id="modiP">
            @csrf
            @method("PUT")
            <div class="titreContent">
                Modifier vos information 
            </div>
            <div class="profileM">
                <div id="inpM"> 
                    <div id="contContInp">
                        <div class="contInp">
                            <div><label >Nom</label></div>
                            <div class="inp"><input id="inpV" value="{{auth()->user()->nom}}" placeholder="Nouveau Nom" type="text" name="nom" id=""></div>
                        </div>
                        <div class="contInp">
                            <div><label >Prenom</label></div>
                            <div class="inp"><input value="{{auth()->user()->prenom}}" id="inpV" placeholder="Nouveau Prenom" type="text" name="prenom" id=""></div>
                        </div>
                    </div>
                </div>
                <div id="imgM">
                    <div id="P-actuel" style="background-image: url('{{auth()->user()->urlProfile}}');background-size:cover;background-position:center;background-repeat:no-repeat"></div>
                    <div id="P-modify">
                        <label for="file-upload" class="custom-file-upload">
                            Choisie une image
                        </label>
                        <input name="image" id="file-upload" type="file" />
                    </div>
                </div>
            </div>
            <div   class="buttonP">
                    <button id="buttonS-t"  type="submit">Modifier</button>
            </div>
            </form>
            <div id="suppP">
                <div class="titreContent">
                    Supprimer votre compte
                </div>
                <div id="sup">
                    <div id="mailS">
                        <input type="text" disabled value="{{auth()->user()->email}}" placeholder="Saisie votre email" name="email" id="mail">
                    </div>
                    <form method="post" action="{{route('Profile.delete',auth()->user()->id)}}" id="inpS">
                        @csrf
                        @method("DELETE")
                        <div class="buttonP"><button id="buttonS-b" type="submit" >Supprimer</button></div>
                    </form>
                </div>
            </div>
        </div>

@endsection