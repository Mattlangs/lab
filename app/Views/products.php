<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body, h1, h2, h3, p, ul, li {
      margin: 0;
      padding: 0;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f0f0f0;
      padding: 20px;
    }

    .container {
      max-width: 800px;
      margin: 0 auto;
      background-color: #fff;
      padding: 20px;
      border-radius: 5px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    form label {
      font-weight: bold;
      margin-bottom: 5px;
    }

    form input[type="text"],
    form select {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    form select {
      height: 40px;
    }

    form input[type="submit"] {
      background-color: #007BFF;
      color: #fff;
      border: none;
      border-radius: 3px;
      padding: 10px 20px;
      cursor: pointer;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: left;
    }

    th {
      background-color: #007BFF;
      color: #fff;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }

    .action-links a {
      text-decoration: none;
      margin-right: 10px;
      color: #007BFF;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>Product Management</h1>
    <form action="/save" method="post">
      <div class="form-group">
        <label for="ProductName">Product Name:</label>
        <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
        <input type="text" class="form-control" name="ProductName" id="ProductName" placeholder="Product Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
      </div>
      
      <div class="form-group">
        <label for="ProductDescription">Product Description:</label>
        <input type="text" class="form-control" name="ProductDescription" id="ProductDescription" placeholder="Product Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
      </div>
      
      <div class="form-group">
        <label for="ProductCategory">Product Category:</label>
        <select class="form-control" name="ProductCategory" id="ProductCategory">
          <option value="Clothes" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Clothes') ? 'selected' : '' ?>>Clothes</option>
          <option value="Utensils" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Utensils') ? 'selected' : '' ?>>Utensils</option>
          <option value="Drink" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drink') ? 'selected' : '' ?>>Drink</option>
          <option value="Food" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Food') ? 'selected' : '' ?>>Food</option>
          <option value="Other" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Other') ? 'selected' : '' ?>>Other</option>
        </select>
      </div>
      
      <div class="form-group">
        <label for="ProductQuantity">Product Quantity:</label>
        <input type="number" class="form-control" name="ProductQuantity" id="ProductQuantity" placeholder="Product Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
      </div>
      
      <div class="form-group">
        <label for="ProductPrice">Product Price:</label>
        <input type="number" class="form-control" name="ProductPrice" id="ProductPrice" placeholder="Product Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
      </div>
      
      <input type="submit" class="btn btn-primary" value="Save">
    </form>
    
    <h2>Product List</h2>
    <ul>
      <?php foreach ($product as $pr): ?>
        <li>
          <strong>Product Name:</strong> <?= isset($pr['ProductName']) ? $pr['ProductName'] : '' ?><br>
          <strong>Product Description:</strong> <?= isset($pr['ProductDescription']) ? $pr['ProductDescription'] : '' ?><br>
          <strong>Product Category:</strong> <?= isset($pr['ProductCategory']) ? $pr['ProductCategory'] : '' ?><br>
          <strong>Product Quantity:</strong> <?= isset($pr['ProductQuantity']) ? $pr['ProductQuantity'] : '' ?><br>
          <strong>Product Price:</strong> <?= isset($pr['ProductPrice']) ? $pr['ProductPrice'] : '' ?><br>
          <span class="action-links">
            <a href="/delete/<?= $pr['id'] ?>">Delete</a>
            <a href="/edit/<?= $pr['id'] ?>">Edit</a>
          </span>
        </li>
      <?php endforeach ?>
    </ul>
  </div>
</body>
</html>
