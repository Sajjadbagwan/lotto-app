<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Raise A Lotto</title>

        <!--Favicon-->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicon/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicon/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon/favicon-16x16.png') }}">

        <!-- Fonts -->
        <!-- <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Baskervville:ital@0;1&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> -->

        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/bootstrap-datetimepicker.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/jquery-ui.theme.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('css/slick.css') }}" />
        <link rel="stylesheet" href="{{ asset('scss/main.css') }}" />

        <!-- jQuery and other libraries -->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    </head>

    <body>
        <div class="pageMain">
            <!-- Header Include -->
            @include(view: 'template/header')
                <main class="main">
                    <div class="container">
                        <div class="sectionHeader">
                            
                        </div>
                        <!-- Main content section -->
                        <div class="main-section">
                            @yield('content')
                        </div>
                    </div>
                </main>
                <!-- Footer Include -->
                @include('template/footer')
        </div>

    <!--Bootstrap jQuery-->
    <script type="text/javascript" src="{{asset('js/slick.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/jquery-ui.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap-datetimepicker.js')}}"></script>
    <!-- Auto-hide Alert & Toast -->

</body>
    
</html>
