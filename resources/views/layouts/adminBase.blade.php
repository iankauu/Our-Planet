<!DOCTYPE html>
<html lang="en">

<head>
    @yield('stylesheets')
    @include('includes._adminStyleSheetLinks')
</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <div>
        @include('includes._adminHeader')
        @yield('content')
        @include('includes._footer')
    </div>
    @include('includes._adminJavascriptLinks')
    @yield('scripts')
</body>

</html>
