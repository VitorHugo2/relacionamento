<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Registro</title>
</head>
<body>
    
    <div class="container">
        
        <form action="{{route('users.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Nome</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="@error('name'){{$message}}@enderror" id="name" name="name" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="@error('email'){{$message}}@enderror" id="email" name="email" aria-describedby="emailHelp">
              
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="@error('password'){{$message}}@enderror"  id="password" name="password">
            </div>
            <div class="mb-3">
              <label for="repassword" class="form-label">Confirme a senha</label>
              <input type="text" class="form-control @error('password') is-invalid @enderror" placeholder="@error('password'){{$message}}@enderror" id="password_confirmation" name="password_confirmation">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            
          </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>