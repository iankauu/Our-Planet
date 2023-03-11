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
        @include('includes._adminSideBar')
        @yield('content')
    </div>
    @include('includes._adminJavascriptLinks')
    @yield('scripts')
</body>

</html>
