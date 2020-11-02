<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="bg-light">
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
            <form action="{{ route('register') }}" method="post" class="col-md-7 col-12">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <p class="h3">Register</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name" class="lead">Full name</label>
                            <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="number" class="lead">Phone number</label>
                            <input id="number" type="text" name="number" value="{{ old('number') }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password" class="lead">Password</label>
                            <input id="password" type="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-between">

                        <a href="{{ route('login') }}" class="btn btn-light">
                            Login
                        </a>
                        <button type="submit" class="btn btn-primary">Register now</button>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>

        </div>
    </div>
</div>
</body>
</html>
