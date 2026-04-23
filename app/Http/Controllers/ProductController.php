<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // public function soLuong($soluong)
    // {   //có 3 cách truyền
    //     // return view('tintuc', ["soluong" => $soluong]); //cách 1: 
    //     return view('tintuc', compact('soluong')); //cách 2
    //     //compact: chuyển mảng thành biến 
    //     return view('tintuc')->with('soluong', $soluong); //cách 3
    // }
    public function soLuong()
    {
        return view('tintuc');
    }
}
