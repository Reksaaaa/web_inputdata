<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            transition: 0.3s;
            border-radius: 15px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.2);
        }

        body {
            font-family: 'Arial', sans-serif;
            min-height: 85vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .form-control {
            border-radius: 20px;
        }

        .btn-primary {
            background-color: #ff4b2b;
            border-color: #ff4b2b;
            border-radius: 20px;
        }

        .btn-primary:hover {
            background-color: #ff416c;
            border-color: #ff416c;
        }

        .text-muted {
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center text-muted">Login</h2>
                        <div class="card-body">
                            @if (Session::has('error'))
                                <div class="alert alert-danger" role="alert">
                                    {{ Session::get('error') }}
                                </div>
                            @endif
                            <form action="{{ route('login') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label text-muted">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label text-muted">Password</label>
                                    <input type="password" class="form-control" id="password" name="password"
                                        aria-describedby="password" required>
                                </div>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-primary">Sign Up</button>
                                </div>
                            </form>
                            <div class="text-center mt-3 text-muted">
                                Don't have an account yet? <a href="/register" class="text-muted">Register</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
