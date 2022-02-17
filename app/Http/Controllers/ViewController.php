<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    private $city;
    private $mobile;
    private $data = [];
    protected $data2 =[];

    private $products;

    public function index(){
        return view('home');
    }

    public function bitm(){
        $this->city = "Dhaka";
        $this->mobile = "0162012";

        $this->data = [10, 20, 50.4, 'BITM', true];

        $this->data2 = [
            0 => [
                'name' => 'hasib',
                'city' => 'dhaka',
                'mobile'=> '1213'
            ],
            1 => [
                'name' => 'Rafi',
                'city' => 'Lalbagh',
                'mobile'=> '4544'
            ],
            2 => [
                'name' => 'Tarok',
                'city' => 'Lokkhibazar',
                'mobile'=> '9949'
            ]
        ];



        return view('bitm',
            [
                'shykot' => $this->city,
                'topu'  => $this->mobile,
                'fahim' => $this->data,
                'multiArray' => $this->data2
            ]);

    }

    public function about(){

        $this->products = Product::getAllProduct();
//        return $this->products;
        return view('about', ['products' => $this->products]);

    }
    public function contact(){
        return view('contact');
    }

    public function detail($asa){
//        return $asa;
        $this->products = Product::getAllProduct();
        foreach($this->products as $item){
            if($item['id'] == $asa){
                return view('detail', ['data' => $item]);
            }
        }

    }
}
