<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Login</title>
</head>
<body>
    <div class="container" id="login-page">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 m-4">
                <h3>Log in</h3>
                <hr>
                <form action="">
                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="text" v-model="information_login.email" name="email" id="email" class="form-control" placeholder="example@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-form-label">Password</label>
                        <input type="password" class="form-control" v-model="information_login.password" name="password" id="password">
                    </div>
                    <div class="form-group mt-2 justify-content-center">
                        <button class="btn btn-primary" type="button" @click="login">Login</button>
                    </div>
                    <br>
                    <a href="{{route('registre')}}">Je n'ai pas un compte!</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/vue.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
        const api_login = '{{ route('api.login.user') }}';
    </script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>
</html>