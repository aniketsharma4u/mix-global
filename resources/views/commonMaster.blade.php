<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.header')
</head>

<body>
    @include('layouts.navbar')
    <div class="container">
        @yield('pageContent')
    </div>
    @include('layouts.footer')
</body>

</html>
