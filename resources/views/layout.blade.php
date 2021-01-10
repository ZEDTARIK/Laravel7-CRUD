<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Laravel</title>
</head>
<body>

    <div class="container">
        <div class="row mt-2">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="{{ route('posts.index')}}"> Post </a>
                    <a class="nav-item nav-link" href="{{ route('client.index')}}"> Client </a>
                    <a class="nav-item nav-link" href="{{ route('customer.index')}}"> Customer </a>
                </div>
            </nav>
        </div>
        <div class="row mt-2">
            <div class="col-md-10 mx-auto">
                @if ( session()->has('status'))
                    <div class="alert alert-dismissible alert-success">
                    <strong> {{ session()->get('status') }} </strong>
                    </div>
                @endif
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
                @yield('content')
            </div>
        </div>

    </div>
    

</body>
</html>