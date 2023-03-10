<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes._head')
</head>

<body>
    <div class="loader_bg">
        <div class="loader"></div>
    </div>
    <div>
        @include('includes._header')
        @yield('content')
        @include('includes._footer')
    </div>
    @include('includes._javascriptLinks')
    @yield('scripts')
</body>

</html>
