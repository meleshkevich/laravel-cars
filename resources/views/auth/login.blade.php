<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Login</title>
</head>
<body>
     @include('common/navigation')
        <main>
        <h1>Log in</h1>

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

            <form action="{{ route('login') }}" method="post">

                @csrf

                <label for="">Email:</label><br>
                <input type="email" name="email" value="{{ old('email') }}"><br>
                <br>

                <label for="">Password:</label><br>
                <input type="password" name="password" value=""><br>
                <br>

                <button class='login-btn'>Login</button>

            </form>
        </main>
    @include ('common/footer') 
</body>
</html>