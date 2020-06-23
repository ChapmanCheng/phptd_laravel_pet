<!doctype html>
<html lang="en">

@include('head')

<body style="background-color: #4d4d4d !important">
    @include ('nav')
    <main role="main" class="container">
        @yield('contents')
    </main>
    @include('footer')
    @include('js')
</body>

</html>