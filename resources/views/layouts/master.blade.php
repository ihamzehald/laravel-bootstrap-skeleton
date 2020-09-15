<!DOCTYPE html>
<html lang="en">

<head>
    @include('includes.head')
</head>

<body>
    @include('includes.header')

    @include('includes.hero')

        <main id="main">
            @yield('content')
        </main><!-- End #main -->

    @include('includes.footer')

</body>

</html>
