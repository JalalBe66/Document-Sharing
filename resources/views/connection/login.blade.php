@extends("templates.templateC")

@section("titre","Login")
@section("css-integration" , "css/Login.css")
@section("contenu")

  <div id="bigContainner">
    <div id="containner">
      <form id="form-side"  method="post" action="{{route('Login.post')}}">
        @csrf
        <div class="titre">
          <div style="font-size: 30px;text-align:center;font-weight:700;font-family:arial">Se connecter</div>
        </div>
        <div class="inp">
          <label >Email</label>
          <input type="email"  class="form-control"  name="email">
        </div>
        <div class="inp">
          <label >Password</label>
          <input  name="password" type="password" class="form-control" >
        </div>
        @if(session()->has("error"))
          <span style="color: red;">{{session("error")}}</span>
        @endif
        <div class="inp-submit">
          <button style="font-weight: bolder;" class="button-submit" type="submit">Login</button>
          <span>ou</span>
          <a  id="a-submit" href="auth/google"> 
            <div id="google-logo" style="background-image: url('imgs/google.png');">

            </div>
            <div style="font-weight: bolder;" id="google" >Google</div>
          </a>
        </div>
      
      </form>
      <div id="image-side">
        <div id="image-div" style="background-image:url('imgs/login.png') ;">
      
        </div>
      </div>
    </div>
  </div>
@endsection
