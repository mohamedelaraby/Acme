<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Acme - @yield('title')</title>

            <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        </head>
    <body>

        {{-- include the navbar --}}
        @include('inc.navbar')
    
        {{-- Home page content --}}
        <div class="container">
            {{-- if this is the home page include the showcase --}}  
            @if(Request::is('/'))
                @include('inc.showcase')
            @endif
        

            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-8">
                    @yield('content')
                </div>
                <div class="col-sm-4 col-md-4 col-lg-4">
                    @include('inc.sidebar')
                </div>
            </div>
        
        
    
    
    

        {{-- /.Container --}}
        </div>
        
        {{-- Footer --}}
            <footer class="footer text-center" id="footer">
            <p class="lead">Copyrights 2019 &COPY; Acme</p>
            {{-- for dynamic time we need javascript --}}
            </footer>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>
