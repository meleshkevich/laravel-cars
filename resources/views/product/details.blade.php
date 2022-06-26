<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Product details</title>
</head>
<body>
   @include('common/navigation')
  <main>
   
      @auth
      <a href="{{route('product.edit', ['productId' => $product->id])}}" >
        <button class="edit">Edit product</button>
      </a>
      @endauth
    
    @include('common/message')  
    
    <h1>Product details</h1>

     <div class="split">
        <div class="split-left">
          <p>Product code: {{$product->productCode}}</p>
          <p>Product name: {{$product->productName}}</p>
          <p>Product line: {{$product->productLine}}</p>
          <p>Product scale: {{$product->productScale}}</p>
          <p>Manufactured by: {{$product->productVendor}}</p>
          <p>Product description: {{$product->productDescription}}</p>
          <p>Available in stock: {{$product->quantityInStock}}</p>          
          <p>Recommended price: {{$product->MSRP}} EUR</p>
          <p>Our special price: {{$product->buyPrice}} EUR</p>
    
        </div>
        <div class="split-right">
          <img src="https://via.placeholder.com/300x350" alt="" />
        </div>
      </div>    
 
  </main>  
</body>
</html>
 