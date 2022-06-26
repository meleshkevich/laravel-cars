<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Model store</title>
    <script src="{{ mix('js/loadData.js') }}" defer></script>
    <script src="{{ mix('js/searchData.js') }}" defer></script>
</head>
<body>
     <div id="bg"></div>
        @include('common/navigation')
    <main>       
        <h1>Welcome to our model store!</h1>
        
        @include('product/search')
        
        <div id="search_results"></div>

        <h2>Please feel free to explore available product categories</h2>
        @foreach ($categories as $item)
            <button class="categories-btn">{{$item->productLine}}</button>      
        @endforeach
        
            <div id="selected_cars"></div>
    </main>
@include ('common/footer')
</body>
</html>

        