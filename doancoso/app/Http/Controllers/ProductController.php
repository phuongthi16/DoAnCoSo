<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getAllProducts()
    {
        $products = DB::select("select * from sanpham ");
        if (!empty($products)) {
            return view('home', ['products' => $products]);
        }
    }

    public function getDetailProduct($id)
    {
        if (!empty($id)) {
            $product = DB::select("select * from sanpham where id='$id'");
            if (!empty($product)) {
                return view('detail', ['product' => $product]);
            }

        }

    }

}
