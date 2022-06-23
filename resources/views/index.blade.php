<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model store</title>
    <script src="{{ mix('js/loadData.js') }}" defer></script>
    <script src="{{ mix('js/searchData.js') }}" defer></script>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/create-product">Add new product</a>
         <a href="{{ route('login') }}">Login</a>
        @guest
        <a href='{{ route('register') }}'> Register here! </a>
        
        @endguest
         <form action="{{ route('logout') }}" method="post">
            @csrf
            <button>Log out</button>
        </form>
    
    </nav>
    <h1>Welcome to our amaizing model store!</h1>
    
    @include('product/search')
    
    <div id="search_results"></div>

    <h2>Alternatively, please feel free to explore available product categories - populate from DB</h2>
    @foreach ($categories as $item)
        <button class="btn">{{$item->productLine}}</button>      
    @endforeach
      
        <div id="selected_cars"></div>

</body>
</html>

        