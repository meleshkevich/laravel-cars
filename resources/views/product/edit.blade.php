<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new product</title>
</head>
<body>
    <nav>
        <a href="/">Home</a>
        <a href="/create-product">Add new product</a>
    </nav>
    <h1>Edit product</h1> 
 
    <form action="{{ route('product.update', ['productId' => $product->id]) }}" method="post">
         @method('put')
        @csrf
            <label>Product code:</label>
            <input
                type="text"
                name="productCode"
                value="{{old('productCode', $product->productCode)}}"
            >

            <label>Product name:</label>
            <input
                type="text"
                name="productName"
                value="{{old('productName', $product->productName)}}"
            >
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
            
            <label>Product scale:</label>
            <input
                type="text"
                name="productScale"
                value="{{old('productScale', $product->productScale)}}"
            >

              <label>Manufactured by:</label>
            <input
                type="text"
                name="productVendor"
                value="{{old('productVendor', $product->productVendor)}}"
            >

             <label>Product description:</label>
            <input
                type="text"
                name="productDescription"
                value="{{old('productDescription', $product->productDescription)}}"
            >

            <label>Available in stock:</label>
            <input
                type="text"
                name="quantityInStock"
                value="{{old('quantityInStock', $product->quantityInStock)}}"
            >
             
            <label>Selling price: </label>
            <input
                type="text"
                name="buyPrice"
                value="{{old('buyPrice', $product->buyPrice)}}"
            >

            <label>Recommended price: </label>
            <input
                type="text"
                name="MSRP"
                value="{{old('MSRP', $product->MSRP)}}"
            >
         <br>
        <button>Edit product</button>
        <br>
     

    </form>
</body>
</html>