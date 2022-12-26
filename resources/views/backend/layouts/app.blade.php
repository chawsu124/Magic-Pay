<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">

    <title>@yield('title')</title>

    <link href="{{ asset('backend/css/main.css') }}" rel="stylesheet">

    <!-- dataTables link to css -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
    @yield('extra_css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        
        @include('backend.layouts.header')

        <div class="app-main">

            @include('backend.layouts.sidebar')
            
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <span>Copyright&copy; {{ date('Y') }} . All rights reserved by MagicPay</span>
                            </div>
                            <div class="app-footer-right">
                                <span>Developed by Chaw Su</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <script src="http://maps.google.com/maps/api/js?sensor=true"></script> -->
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('backend/js/main.js') }}"></script>

    <!-- datatables link to js -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('.back-btn').on('click',function(){
                window.history.go(-1);
                return false;
            })
        })
    </script>

    @yield('scripts')

</body>

</html>