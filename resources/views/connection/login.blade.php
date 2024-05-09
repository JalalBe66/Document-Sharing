<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<form class="row g-3" method="post" action="{{route('Login.post')}}">
    @csrf
    @if(session()->has("error"))
      <div class="alert alert-danger">{{session("error")}}</div>
    @endif
    @if(session()->has("success"))
      <div class="alert alert-success">{{session("success")}}</div>
    @endif
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Email</label>
    <input  class="form-control" id="inputPassword4" name="email">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="inputPassword4">
  </div>

  <div class="col-12">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>
</form>
<a href="auth/google"> <button  class="btn btn-primary">Google</button></a>

</form>
</body>
</html>
