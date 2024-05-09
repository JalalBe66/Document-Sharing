<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/templateF.css')}}" />
    <link rel="stylesheet" href="{{ asset($__env->yieldContent('css-integration')) }}" />
</head>
<body>
    @isset(auth()->user()->email)
    <div id="bigContainer">
        <div  id="content-left" >
            <div id="profile-left-elem" >
                @auth
                <div style="background-image: url('{{auth()->user()->urlProfile}}');width:35px;background-size:contain;height:35px;background-position:center;border-radius:50% "></div>
                <p style="width: 60%;font-family:sans-serif;">{{auth()->user()->prenom}} {{auth()->user()->nom}}</p>
                @endauth
            </div>
            <div id="conn-info-containner">
                <div class="conn-info-elem">
                    <div style="background-image: url('imgs/profile.png')" class="icon-doc-elem"></div>
                    <p>Profile</p>
                </div>
                <!-- <div class="conn-info-elem">
                    <div style="background-image: url('imgs/logout.png')" class="icon-doc-elem"></div>
                    <p>Déconnecter</p>
                </div> -->
                <form onclick="logout()" class="conn-info-elem" id="logoutForm" action="{{ route('Logout') }}" method="post">
                    @csrf
                    <div id="logoutButton" style="cursor: pointer; background-image: url('imgs/logout.png')" class="icon-doc-elem" onclick="logout()"></div>
                    <p>Déconnecter</p>
                </form>

                <script>
                    function logout() {
                        document.getElementById('logoutForm').submit();
                    }
                </script>
                </div>
                <div id="doc-info-containner">
                    <div class="doc-info-elem">
                        <div style="background-image: url('imgs/folder.png')" class="icon-doc-elem"></div>
                        <p>Vos Dossiers</p>
                    </div>
                    <div class="doc-info-elem">
                        <div style="background-image: url('imgs/share.png')" class="icon-doc-elem"></div>
                        <p>Transfert</p>
                    </div>
                    <div class="doc-info-elem">
                        <div style="background-image: url('imgs/receive-email.png')" class="icon-doc-elem"></div>
                        <p>Boîte de réception</p>
                    </div>
                    <div class="doc-info-elem">
                        <div style="background-image: url('imgs/send-email.png')" class="icon-doc-elem"></div>
                        <p>Dossiers envoyés</p>
                    </div>
                </div>
            </div>
            <div id="div-service"></div>
            <div id="content-right">
                <div id="titre-content">
                    <div id="bienvenue">
                        Bienvenue , {{auth()->user()->nom}} {{auth()->user()->prenom}}
                    </div>
                    <div style="background-image: url('imgs/onetLogo.png')" id="marque-logo">
                    </div>
                </div>
                <div id="contenuPlace">
                    @yield("contenu")
                </div>
            </div>
        </div>
    @endisset
</body>
</html>