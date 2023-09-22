<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Product Management</title>
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
      display: block;
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
      <label for="ProductName">Product Name:</label>
      <input type="hidden" name="id" value="<?= isset($pro['id']) ? $pro['id'] : '' ?>">
      <input type="text" name="ProductName" id="ProductName" placeholder="Product Name" value="<?= isset($pro['ProductName']) ? $pro['ProductName'] : '' ?>">
      
      <label for="ProductDescription">Product Description:</label>
      <input type="text" name="ProductDescription" id="ProductDescription" placeholder="Product Description" value="<?= isset($pro['ProductDescription']) ? $pro['ProductDescription'] : '' ?>">
      
      <label for="ProductCategory">Category:</label>
      <select name="ProductCategory" id="ProductCategory">
        <option value="Clothes" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Clothes') ? 'selected' : '' ?>>Clothes</option>
        <option value="Utensils" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Utensils') ? 'selected' : '' ?>>Utensils</option>
        <option value="Drink" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Drink') ? 'selected' : '' ?>>Drink</option>
        <option value="Jewelry" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Jewelry') ? 'selected' : '' ?>>Jewelry</option>
        <option value="Other" <?= (isset($pro['ProductCategory']) && $pro['ProductCategory'] === 'Other') ? 'selected' : '' ?>>Other</option>
      </select>
      
      <label for="ProductQuantity">Product Quantity:</label>
      <input type="text" name="ProductQuantity" id="ProductQuantity" placeholder="Product Quantity" value="<?= isset($pro['ProductQuantity']) ? $pro['ProductQuantity'] : '' ?>">
      
      <label for="ProductPrice">Product Price:</label>
      <input type="text" name="ProductPrice" id="ProductPrice" placeholder="Product Price" value="<?= isset($pro['ProductPrice']) ? $pro['ProductPrice'] : '' ?>">
      
      <input type="submit" value="Save">
    </form>
    
    <h2>Product List</h2>
    <table>
      <thead>
        <tr>
          <th>Product Name</th>
          <th>Product Description</th>
          <th>Product Category</th>
          <th>Product Quantity</th>
          <th>Product Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($product as $pr): ?>
          <tr>
            <td><?= isset($pr['ProductName']) ? $pr['ProductName'] : '' ?></td>
            <td><?= isset($pr['ProductDescription']) ? $pr['ProductDescription'] : '' ?></td>
            <td><?= isset($pr['ProductCategory']) ? $pr['ProductCategory'] : '' ?></td>
            <td><?= isset($pr['ProductQuantity']) ? $pr['ProductQuantity'] : '' ?></td>
            <td><?= isset($pr['ProductPrice']) ? $pr['ProductPrice'] : '' ?></td>
            <td class="action-links">
              <a href="/delete/<?= $pr['id'] ?>">Delete</a>
              <a href="/edit/<?= $pr['id'] ?>">Edit</a>
            </td>
          </tr>
        <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>
