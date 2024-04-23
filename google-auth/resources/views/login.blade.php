<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel google login demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <h1 class="text-center my-5 fw-bold display-4">Laravel google login demo</h1>
        <div class="row">
            <div class="col-lg-4 mx-auto card border-0 shadow">
                <form method="post" class="p-3">
                    <div class="my-3">
                        <label for="foremail">Email</label>
                        <input type="email" id="foremail" name="email" class="form-control">
                    </div>
                    <div class="my-3">
                        <label for="forpass">Password</label>
                        <input type="password" id="forpass" name="email" class="form-control">
                    </div>
                    <div class="my-3">
                        <button type="submit" class="btn bg-success text-white">Login</button>
                    </div>
                    <!-- Google Button -->
                    <div class="my-3">
                        <!-- <a href="{{ URL::to('googlelogin') }}" class="btn bg-primary text-white w-50">Login with Google</a> -->
                        <a href="{{ URL::to('googlelogin') }}">
                            <img src="{{ asset('googleloginbtn.png') }}" width="320px" alt="">
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>