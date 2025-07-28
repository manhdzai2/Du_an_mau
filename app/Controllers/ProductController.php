<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    private $modelProduct;
    private $modelCategory;

    public function __construct()
    {
        $this->modelProduct = new Product();
        $this->modelCategory = new Category();
    }
    // index
    public function index()
    {
        $products = $this->modelProduct->getAll();
        return view('products.index', compact('products'));
    }
    // show
    public function show($id)
    {
        $product = $this->modelProduct->findById($id);
        return view('products.show', compact('product'));
    }
    // create
    public function create()
    {
        $categories = $this->modelCategory->getAll();
        return view('products.create', compact('categories'));
    }
    // store
    public function store()
    {
        $data = [
            'name' => $$_POST['name'],
            'price' => $$_POST['price'],
            'category_id' => $$_POST['category_id'],
            'date_entry' => $$_POST['date_entry'],
            'status' => $$_POST['status'],
            'image_cover' => is_upload('image_cover') ? $this->uploadFile($_FILES['image_cover'],'prodcuts') : null
        ];
        $this->modelProduct->insert($data);
        redirect('products');
    }
    // edit
    public function edit($id)
    {
         $product = $this->modelProduct->findById($id);
         $categories = $this->modelCategory->getAll();
        return view('products.edit', compact('product','categories'));
    }
    // update
    
    // destroy
    public function destroy($id)
    {
        $this->modelProduct->delete($id);
         redirect('products');
    }
}
