<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/journal/bootstrap.css">
    <title>Laravel</title>
</head>
<body>

    <div class="container">
        
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