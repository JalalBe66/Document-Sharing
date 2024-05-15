@extends("templates.templateF")
@section("css-integration","css/register.css")
@section("contenu")

<!-- <form class="row g-3" action="{{route('Register.post')}}" method="post">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nom</label>
    <input  name="nom" >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Prenom</label>
    <input type="prenom" name="prenom"  >
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input    name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input name="password" type="password"  id="inputPassword4">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Register</button>
  </div>
</form> -->
<div id="bigContainner">
    <div id="containner">
      <form id="form-side"  method="post" action="{{route('Register.post')}}">
        <div class="titre">
            <div style="font-size: 30px;text-align:center;font-weight:700;font-family:arial">Nouveau Employé</div>
        </div>
        @csrf
        <div class="form-section">
          <div class="inp">
            <div class="form-cont">

              <label >Nom</label>
              <input type="nom"  class="form-control"  name="nom">
            </div>
          </div>
          <div class="inp">
          <div class="form-cont">
            <label >Prenom</label>
            <input type="prenom"  class="form-control"  name="prenom">
          </div>
          </div>
        </div>
        <div class="form-section">
          <div class="inp">
          <div class="form-cont">
            <label >Email</label>
            <input type="email"  class="form-control"  name="email">
          </div>
          </div>
          <div class="inp">
          <div class="form-cont">
            <label >Password</label>
            <input name="password" type="password" class="form-control" >
          </div>
          </div>
          
        </div>
        @if(session()->has("success"))
          <span style="color: green;">{{session("success")}}</span>
        @endif
        <div class="inp-submit">
          <button style="font-weight: bolder;font-size:16px" class="button-submit" type="submit">Register</button>
          <span>ou</span>
          <a   id="a-submit" href="auth/google"> 
            <div id="google-logo" style="background-image: url('imgs/google.png');">

            </div>
            <div style="font-weight: bolder;font-size:16px" id="google" >Google</div>
          </a>
        </div>
      </form>
      </div>
    </div>
  
@endsection
