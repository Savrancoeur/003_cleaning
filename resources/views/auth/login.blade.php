<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Icon -->
    <link rel="icon" href="">
    <!-- Fontawesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
          integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
<section style="height: 100vh;" class="d-flex align-items-center">
    <div class="container-fluid align-items-center">
        <div class="row justify-content-center text-primary">
            <div class="col-12">
                <form action="" method="POST" class="bg-body-tertiary rounded-3 p-3 w-25  mx-auto">
                    @csrf
                    <div class="text-center mt-3">
                        <i class="loginIcon fa-solid fa-user text-primary"></i>
                        <h3 class="mt-3">Login User Account</h3>
                    </div>
                    <hr>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="">
                        @error('email')
                        <div id="name" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label"> Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="">
                        @error('password')
                        <div id="name" class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <button class="form-control btn btn-primary">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

</body>

</html>
