<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product details</title>
</head>
<body>
    @include('common/navigation')
      @auth
      <a href="{{route('product.edit', ['productId' => $product->id])}}" >
        <button class="edit">Edit product</button>
      </a>
      @endauth
    
    @include('common/message')  
    
    <h1>Product details</h1>
    <p>Product code: {{$product->productCode}}</p>
    <p>Product name: {{$product->productName}}</p>
    <p>Product line: {{$product->productLine}}</p>
    <p>Product scale: {{$product->productScale}}</p>
    <p>Manufactured by: {{$product->productVendor}}</p>
    <p>Product description: {{$product->productDescription}}</p>
    <p>Available in stock: {{$product->quantityInStock}}</p>
    {{-- to add some currency!!! --}}
    <p>Selling price: {{$product->buyPrice}}</p>
    <p>Recommended price: {{$product->MSRP}}</p>
    <br>
    
</body>
</html>
 