<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/thong-bao', function () {
    $so1 = app('thongBao');
    $so2 = app('thongBao');
    $so3 = app('thongBao');

    return $so1->index() . '</br>' . $so2->index() . '</br>' . $so3->index();
});


Route::get('/cache-put', function () {
    //Lưu giá trị vào cache theo cách truyền thống
    $cache = app()->make('cache'); // Lấy service từ container
    $cache->put('name', 'Hieu', 60);
    return "Đã lưu giá trị thành công";
});
Route::get('/cache-get', function () {
    //Lấy giá trị từ cache theo cách truyền thống
    $value = Cache::get('name');
    return "Giá trị lấy từ cache" . $value;
});

//dùng Facades 
Route::get('/cache-put-fa', function () {
    //Lưu giá trị vào cache dùng facede laravel
    Cache::put('name', 'Hieu-facede', 60);
    return "Đã lưu giá trị thành công";
})->name('cache-facedes');
//Helper name('cache-facedes')
Route::get('/cache-get-fa', function () {
    //Lấy giá trị từ cache dùng facede laravel
    $cache = app()->make('cache'); // Lấy service từ container
    $value = $cache->get('name');
    return "Giá trị lấy từ cache" . $value;
});
