<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <title>Create new product</title>
</head>
<body>
     @include('common/navigation')
    <main> 
    <h1>Add new product</h1> 

    <form action="" method="post">
        @csrf
        
        
            <label>Product code:</label>
            <input
                type="text"
                name="productCode"
                value=""
            >
            <br>
            <br>
            <label>Product name:</label>
            <input
                type="text"
                name="productName"
                value=""
            >
            <br>
            <br>
            <label>Product line:</label>
            <select name="productLine">
                <option value="Classic Cars">Classic Cars</option>
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
                value=""
            >
            <br>
            <br>
              <label>Manufactured by:</label>
            <input
                type="text"
                name="productVendor"
                value=""
            >
            <br>
            <br>
             <label>Product description:</label>
            <input
                type="text"
                name="productDescription"
                value=""
            >
            <br>
            <br>
            <label>Available in stock:</label>
            <input
                type="text"
                name="quantityInStock"
                value=""
            >
            <br>
            <br>
            <label>Selling price: </label>
            <input
                type="number"
                name="buyPrice"
                value=""
            >
            <br>
            <br>
            <label>Recommended price: </label>
            <input
                type="number"
                name="MSRP"
                value=""
            >
        <br>
        <br>
        
        <button class="create-btn">Create</button>
        <br>
     

    </form>    
    </main>   
    @include ('common/footer') 
</body>
</html>