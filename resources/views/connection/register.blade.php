<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<form class="row g-3" action="{{route('Register.post')}}" method="post">
    @csrf
    
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
        @endforeach
    @endif
    @if(session()->has("error"))
        <div>{{session("error")}}</div>
    @endif
    @if(session()->has("success"))
        <div>{{session("success")}}</div>
    @endif
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
</form>
</body>
</html>
