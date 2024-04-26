<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- Title --}}
    <title>Maintance</title>
    {{-- Icon Line --}}
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    {{-- Bootrtrap --}}

    <!-- Link ke SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
    @vite('resources/css/app.css')

    {{-- My Css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="wrapper">
        {{-- Navbar --}}
        @include('navbar.navbar')


        {{-- content --}}
        <div class="main p-3">
            <div class="text-center">
                @yield('container')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
</body>

</html>
