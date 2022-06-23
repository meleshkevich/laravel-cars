<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create new product</title>
</head>
<body>
     @include('common/navigation')
     
    <h1>Add new product</h1> 

    <form action="" method="post">
        @csrf
            <label>Product code:</label>
            <input
                type="text"
                name="productCode"
                value=""
            >

            <label>Product name:</label>
            <input
                type="text"
                name="productName"
                value=""
            >
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
            
            <label>Product scale:</label>
            <input
                type="text"
                name="productScale"
                value=""
            >

              <label>Manufactured by:</label>
            <input
                type="text"
                name="productVendor"
                value=""
            >

             <label>Product description:</label>
            <input
                type="text"
                name="productDescription"
                value=""
            >

            <label>Available in stock:</label>
            <input
                type="text"
                name="quantityInStock"
                value=""
            >
             
            <label>Selling price: </label>
            <input
                type="number"
                name="buyPrice"
                value=""
            >

            <label>Recommended price: </label>
            <input
                type="number"
                name="MSRP"
                value=""
            >
         <br>
        <button>Create</button>
        <br>
     

    </form>
</body>
</html>