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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    {{-- Bootsctrap Icon --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- My Css --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <div class="login p-3">
        <div class="text-center">
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <main class="form-signin w-100 m-auto">
                        @if(Session::has('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('error') }}
                      </div>
                    @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <img class="mb-4" src="{{ asset('images/Seamolec.png') }}" alt="" width="72"
                                height="72">
                            <h1 class="h3 mb-3 fw-normal"></h1>

                            <div class="form-floating">
                                <input type="text" name="email" class="form-control" id="email"
                                    placeholder="name@example.com">
                                <label for="email">Email</label>
                            </div>

                            <div class="form-floating mt-2">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                                <label for="floatingPassword">Password</label>


                                <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
                                <p class="mt-5 mb-3 text-body-secondary">&copy; By:Reksa Reynald Dontol</p>
                        </form>
                    </main>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
