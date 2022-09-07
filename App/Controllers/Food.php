<?php

namespace Project\Controllers;

class Food
{
    public $id;
    public $name;
    public $price;
    public function __construct()
    {
        session_start();
    }
    public function store($data)
    {

        $_SESSION['foodlist'][] = $data;

        $_SESSION['massage'] = "Successfully Created!!!";

        // $foodlist = [['id' => '1112', 'name' => 'Kacchi', 'price' => '450', 'stock' => '1000'], ['id' => '1113', 'name' => 'Chicken Biriani ', 'price' => '450', 'stock' => '2000']];

        // echo "<pre>";
        // print_r($foodlist);



        // array_push($foodlist, $data);
        // print_r($foodlist);
        // array_push($_SESSION, $data);

        echo "<pre>";
        print_r($_SESSION);
    }



    public function show($id)
    {
        echo "<pre>";
        //print_r($_SESSION['foodlist']);
        $foodlist = $_SESSION['foodlist'];
        $foodInfo = null;
        foreach ($foodlist as $key => $food) {
            if ($food['id'] == $id) {
                $foodInfo = $_SESSION['foodlist'][$key];
            }
        }
        //print_r($foodInfo);
        return $foodInfo;
    }


    public function edit($id)
    {
        echo "<pre>";
        //print_r($_SESSION['foodlist']);
        $foodlist = $_SESSION['foodlist'];
        $editFood = null;
        foreach ($foodlist as $key => $food) {
            if ($food['id'] == $id) {
                $editFood = $_SESSION['foodlist'][$key];
            }
        }
        //print_r($foodInfo);
        // $_SESSION['massage']= "Successfully Updated!!!";
        return $editFood;
        // $_SESSION['foodlist'][] = $data;

    }





    public function update($data)
    {

        $_SESSION['foodlist'][] = $data;

        $_SESSION['massage'] = "Successfully Updated!!!";
    }
    public function destroy($id)
    {

        $foodlist = $_SESSION['foodlist'];
        foreach ($foodlist as $key => $food) {
            if ($food['id'] == $id) {
                unset($_SESSION['foodlist'][$key]);
            }
        }
        $_SESSION['massage'] = "Successfully Deleted!!!";
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