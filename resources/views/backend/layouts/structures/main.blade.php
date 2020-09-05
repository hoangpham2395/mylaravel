<!DOCTYPE html>
<html lang="en">

<head>
    <title> {{env('APP_NAME')}} - Management </title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="{{asset('images/logomark.min.svg')}}" type="image/x-icon">
    <!-- Link css, js -->
    @include('backend.layouts.structures.header')
    @stack('links')
</head>

<body>
    <!-- Pre-loader -->
    @include('backend.layouts.structures.loader')

    <!-- Wrapper -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- Navigation -->
            @include('backend.layouts.structures.navigation')
            <!-- Content -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- Sidebar -->
                    @include('backend.layouts.structures.sidebar')
                    <!-- Main content -->
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    @yield('content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts  -->
    @include('backend.layouts.structures.footer')
    @stack('scripts')
</body>

</html>
