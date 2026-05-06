<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController
{
    public function index()
    {
        //QUERY Builder 
        $rel = DB::table('users')->get(); // Lấy ra tất cả các dữ liệu
        $rel2 = DB::table('users')->first(); // lấy ra 1 dòng dữ liệu đầu tiên
        $rel3 = DB::table('users')->orderBy('created_at', 'desc')->get(); // Lấy ra tất cả các dữ liệu và sắp xếp giảm dần theo created_at
        // $rel4 = DB::table('users')->insert([
        //     'name' => 'Le Van Hieu 23',
        //     'email' => 'hle232e9@gmail.com',
        //     'password' => Hash::make('123456'),
        //     'created_at' => date("Y-m-d H:i:s")
        // ]); // thêm dữ liệu
        // $rel5 = DB::table('users')->where('id', 2)->update([
        //     'name' => 'Nguyễn Văn B',
        //     'email' => 'ngvanb@gmail.com'
        // ]); // update dữ liệu
        $rel6 = DB::table('users')->where('id', 13)->delete(); // Xóa dữ liệu
        echo ($rel6);

        // SQL thuần
        // $rel = DB::select("SELECT * FROM users");
        // $dated = date('Y-m-d H:i:s');
        // $rel = DB::insert("INSERT INTO users (name, email,password,created_at) VALUES ('hieua3', 'haie6@gmail.com','123456','$dated')");
        // $rel = DB::update("UPDATE users set name ='hiele235' where users.id =4");
        // $rel = DB::delete("DELETE from users where users.id = 8");
        // echo $rel;
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
        // $validated = $request->validate([
        //     'fullname' => 'required | min:5 | max: 40',
        //     'email' => 'required |email'
        // ]);
        // return 'Dữ liệu hợp lệ' . $validated['fullname'];
    }
    public function index2(Request $request)
    {
        $data = 10;
        return view('tintuc', ['data' => $data]);
    }
}
