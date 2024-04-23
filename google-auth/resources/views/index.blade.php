<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        User Info
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Welcome, {{ session('first_name') }}</h5>
                        <p class="card-text">Email: {{ session('email') }}</p>
                        <p class="card-text">Login with: {{ session('oauth_provider') }}</p>
                        <img src="{{ session('picture') }}" class="card-img-top" alt="User Picture">
                        <a href="{{ url('logout') }}" class="btn btn-primary mt-3">Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
