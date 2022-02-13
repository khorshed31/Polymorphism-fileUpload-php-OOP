<?php


namespace App\classes;


class Product
{

    protected $file;
    protected $directory;
    protected $products;
    protected $product;
    protected $name;
    protected $price;
    protected $description;
    protected $imageName;
    protected $tempPath;

    public function __construct($post = null, $file = null)
    {
        $this->file = $file;
        $this->imageName = $file['image']['name'];
        $this->tempPath = $file['image']['tmp_name'];
        $this->directory = 'assets/img/upload/'.$this->imageName;
//        $this->name = $post['name'];
//        $this->price = $post['price'];
//        $this->description = $post['desc'];
    }

    public function index(){

        header('Location: action.php?pages=product');
    }

    public function newProduct(){

        move_uploaded_file($this->tempPath, $this->directory);
    }
}