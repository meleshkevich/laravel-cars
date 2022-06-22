<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Model store</title>
    <script src="{{ mix('js/loadData.js') }}" defer></script>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/create-product">Add new product</a>
    </nav>
    <h1>Welcome to our amaizing model store!</h1>
    
    <h2>Get data for available products - search  <h2>     

    <h2>Alternatively, please feel free to explore available product categories - populate from DB</h2>
    @foreach ($categories as $item)
        <button class="btn">{{$item->productLine}}</button>      
    @endforeach
      
        <div id="selected-cars"></div>

</body>
</html>

        