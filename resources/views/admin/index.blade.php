<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shinkyowa Admin - Login</title>
    <link rel="stylesheet" href="{{ asset('css/admin/login.css') }}">
</head>

<body>
    <section class="bg">
        <div class="login">
            <h1>Login</h1>
            <form action="/admin/login" method="POST">
                @csrf
                <input type="email" name="email" id="email" placeholder="Email....">
                <input type="password" name="password" id="password" placeholder="Password....">
                <button>Login</button>
            </form>
        </div>
    </section>
</body>

</html>
