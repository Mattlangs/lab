<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your head content ... -->
</head>
<body>
    <h1>Create Product</h1>
    <form action="/product/store" method="post">
        <!-- ... your form fields ... -->
       <input type="text" name="ProductName" placeholder="ProductName">
       <input type="text" name="ProductDescription" placeholder="ProductDescription">
       <input type="text" name="ProductCategory" placeholder="ProductCategory">
       <input type="text" name="ProductQuantity" placeholder="ProductQuantity">
       <input type="text" name="ProductPrice" placeholder="ProductPrice">
        <input type="submit" value="Create">
    </form>
</body>
</html>
