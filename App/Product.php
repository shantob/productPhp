<?php

namespace Project;

class Product
{
    public $Id;
    public $name;
    public $price;
    public function store($data)
    {
        session_start();

        $_SESSION['products'][]= $data;
        // echo "<pre>";
        // print_r($_SESSION);
      
    }
}
  // $products = [
        //     ['id' => '001', 'name' => 'Shirt', 'price' => '200/-'],
        //     ['id' => '002', 'name' => 'T-Shirt', 'price' => '150/-'],
        //     ['id' => '003', 'name' => 'Snikers', 'price' => '400/-'],
        // ];
        // echo '<pre>';
        // print_r($products);
       
       

        // array_push($_SESSION, $data);
        // // array_push($products, $data);
        // print_r($_SESSION);