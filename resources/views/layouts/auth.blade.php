<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/metisMenu.min.css')}}" rel="stylesheet">
        <link href="{{asset('css/icons.css')}}" rel="stylesheet">
        <link href="{{asset('css/style.css')}}" rel="stylesheet">

        
     
    </head>
    <body>
        <div class="home-btn d-none d-sm-block">
        <a href="{{route('home')}}" class="text-white"><i class="fas fa-home h2"></i></a>
        </div>
        
        <!-- Begin page -->
        <div class="accountbg"></div>

        <div class="wrapper-page account-page-full">

            <div class="card">
                <div class="card-body">

                    <div class="text-center">
                    <a href="index.html" class="logo"><img src="{{asset('images/logo-dark.png')}}" height="22" alt="logo"></a>
                    </div>

                    <div class="p-3">
                        @yield('content')
                    </div>

                </div>
            </div>

         
            <div class="m-t-40 text-center">
                @yield('footer')
                <p>© {{date('Y')}} {{config('app.name')}} </p>
            </div>

        </div>
    </body>
</html>
