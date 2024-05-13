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
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/bootstrap-icons/css/bootstrap-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.snow.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/quill/quill.bubble.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/simple-datatables/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Link ke SheetJS library -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>

    {{-- My Css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>
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

{{-- Vendor JS Files --}}
<script src="{{ asset('vendor/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap/bundle.min.js') }}"></script>
<script src="{{ asset('vendor/chart.js/chart.umd.js') }}"></script>
<script src="{{ asset('vendor/echarts.js/echarts.min.js') }}"></script>
<script src="{{ asset('vendor/quill/quill.min.js') }}"></script>
<script src="{{ asset('vendor/simple-datatables/simple-datatables.js') }}"></script>
<script src="{{ asset('vendor/tinymce/tinymce.min.js') }}"></script>
<script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
{{--  --}}

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>
<script src="{{ asset('js/script.js') }}"></script>

</html>
