<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Registration</title>
</head>
<body>
   <main>
    <h1>Register</h1>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('register') }}" method="post">
 
    @csrf
    <label for="">Name</label><br>    
    <input type="text" name="name" value="{{ old('name') }}"><br>    
    <br> 
    <label for="">Mail</label><br>  
    <input type="email" name="email" value="{{ old('email') }}"><br>    
    <br> 
    <label for="">Password</label><br>  
    <input type="password" name="password" value=""><br>    
    <br> 
    <label for="">Repeat password</label><br>  
    <input type="password" name="password_confirmation" value=""><br>    
    <br>  
    <button class="register-btn">Register</button>
 
</form>
   </main>
</body>
</html>