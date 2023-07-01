<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush On The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <title>:: Crush On :: Home</title>
    @include('include.style');
</head>

<body class="font-opensans">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        @include('include.header')

        @include('include.sidebar')

        @include('include.theme')

        @include('include.brandprofile')

        @include('include.sidebarmenu')

        {{-- Kontent --}}
        @yield('content')
        {{-- end kontent --}}
    </div>
    @include('include.script')
</body>

</html>
