<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
use App\Models\CategoryModel;

class ProductController extends BaseController
{
    private $product;
    private $categories;

    public function __construct()
    {
        $this->product = new ProductModel();
        $this->categories = new CategoryModel();
    }
    public function delete($id)
    {
        $this->product->delete($id);
        return redirect()->to('/product');
    }
    public function edit($id)
    {
        $data = [
            'product' => $this->product->findAll(),
            'pro' => $this->product->where('id', $id)->first(), 
        ];

        if (!$data['pro']) {
            echo 'ERROR';
        }
    
        return view('products', $data);
    }
    
    public function save()
    {
        $id =$_POST['id'];
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        if($id!= null){
            $this->product->set($data)->where('id' , $id)->update();
        }else{
         $this->product->save($data);
        }

        $savecategory = 
        [
            'ProductCategory' => $this->request->getVar('ProductCategory'),
        ];

        $this->categories->save($savecategory);

        return redirect()->to('/product');

    }
    public function product($product)
    {
        echo $product;
    }
    public function matt()
    {
        $data['product'] = $this->product->findAll();
        return view('products',$data);
    }
    public function index()
    {
       
    }

}
