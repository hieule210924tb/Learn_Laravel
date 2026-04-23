<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController
{
    public function index(Request $request)
    {

        //$email = $request->input('email');

        //$request->input : lấy dữ liệu của các ô input trong form
        //$request->all() : lấy toàn bộ dữ liệu từ form
        //$request->has(): kiểm tra xem ô input đó có tồn tại không
        //$request->method(): Kiểm tra xem method trong form đang dùng method gì
        //$request->file('thumb'): upload file
        // if ($request->hasFile('thumb')) {
        //     $path = $request->file('thumb')->store('images');
        //     return 'Đã upload thành công vào thư mục' . $path;
        // }
        //$request->validate : kiểm tra validate
        $validated = $request->validate([
            'fullname' => 'required | min:5 | max: 40',
            'email' => 'required |email'
        ]);
        return 'Dữ liệu hợp lệ' . $validated['fullname'];
    }
    public function index2(Request $request)
    {
        $data = 10;
        return view('tintuc', ['data' => $data]);
    }
}