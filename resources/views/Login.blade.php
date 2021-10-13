<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>ACL - Laravel | Login</title>

    <style>
        body{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        #login{
            border: 1px solid #A1A1A1;
            padding: 15px;
            border-radius: 8px;
        }
    </style>

  </head>

  <body>

    <div class="col-sm-4 mt-5" id='login'>

        <form method="POST" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Email</label>
              <input type="email" name="email" class="form-control">
            </div>
            <div class="mb-3">
              <label class="form-label">Senha</label>
              <input type="password" name="senha" class="form-control" >
            </div>
            <button type="submit" class="btn btn-success">Log In</button>
        </form>

        @if (session('login_erro'))
            <p class="text-center text-danger">{{session('login_erro')}}</p>
        @endif

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
