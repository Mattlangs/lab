<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ... your head content ... -->
</head>
<body>
    <h1>Edit Product</h1>
    <form action="/product/update/<?= $pro['id'] ?>" method="post">
        <!-- ... your form fields pre-filled with $pro data ... -->
        <input type="text" name="ProductName" placeholder="ProductName">
       <input type="text" name="ProductDescription" placeholder="ProductDescription">
       <input type="text" name="ProductCategory" placeholder="ProductCategory">
       <input type="text" name="ProductQuantity" placeholder="ProductQuantity">
       <input type="text" name="ProductPrice" placeholder="ProductPrice">
        <input type="submit" value="Update">
    </form>
</body>
</html>
