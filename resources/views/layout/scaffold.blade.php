<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    @include('include.style')
</head>
<body>
    @include('include.nav')
    @yield('content')
    <div class="mb-5"></div>
    @include('include.footer')
    @include('include.script')
</body>
</html>