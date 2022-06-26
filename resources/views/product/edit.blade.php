<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Edit product</title>
</head>
<body>
     @include('common/navigation')
     <main>
 
    <form action="{{ route('product.update', ['productId' => $product->id]) }}" method="post">
         @method('put')
        @csrf
            <label>Product code:</label>
            <input
                type="text"
                name="productCode"
                value="{{old('productCode', $product->productCode)}}"
            >
            <br>
            <br>
            <label>Product name:</label>
            <input
                type="text"
                name="productName"
                value="{{old('productName', $product->productName)}}"
            >
             <br>
            <br>
            <label>Product line:</label>
            <select name="productLine">
                <option value="{{old('productLine', $product->productLine)}}">{{$product->productLine}}</option>
                <option value="Motorcycles">Motorcycles</option>
                <option value="Planes">Planes</option>
                <option value="Ships">Ships</option>
                <option value="Trains">Trains</option>
                <option value="Trucks and Buses">Trucks and Buses</option>
                <option value="Vintage Cars">Vintage Cars</option>
            </select>
             <br>
            <br>
            <label>Product scale:</label>
            <input
                type="text"
                name="productScale"
                value="{{old('productScale', $product->productScale)}}"
            >
            <br>
            <br>
              <label>Manufactured by:</label>
            <input
                type="text"
                name="productVendor"
                value="{{old('productVendor', $product->productVendor)}}"
            >
             <br>
            <br>
             <label>Product description:</label>
            <input
                type="text"
                name="productDescription"
                value="{{old('productDescription', $product->productDescription)}}"
            >
             <br>
            <br>
            <label>Available in stock:</label>
            <input
                type="text"
                name="quantityInStock"
                value="{{old('quantityInStock', $product->quantityInStock)}}"
            >
             <br>
            <br>
            <label>Selling price: </label>
            <input
                type="text"
                name="buyPrice"
                value="{{old('buyPrice', $product->buyPrice)}}"
            >
             <br>
            <br>
            <label>Recommended price: </label>
            <input
                type="text"
                name="MSRP"
                value="{{old('MSRP', $product->MSRP)}}"
            >
          <br>
            <br>
        <button class="search-btn">Edit product</button>
        <br>
     

    </form>
     </main>
    @include ('common/footer')
</body>
</html>