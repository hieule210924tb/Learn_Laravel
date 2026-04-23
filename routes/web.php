<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    return 'ok';
});
Route::get('/test/{age}', function () {
    return 'ok';
})->name('test-age')->middleware('check.age');
Route::get('/trang-chu', 'HomeController@index'); //Route gọi đến controller
Route::get('/trang-chu2', [HomeController::class, 'index2']);
Route::get('/trang-chu3', [HomeController::class, 'index3']);

Route::controller(HomeController::class)->group(function () { //Gom nhóm router và gọi đến controller HomeController
    Route::get('/trang-chu', 'index');
    Route::get('/trang-chu2', 'index2');
    Route::get('/trang-chu3', 'index3');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/product', 'soLuong');
    Route::get('/product/{soluong}', 'soLuong');
});


Route::prefix('admin')->name('admin.')->group(function () { // route nhóm và tiền tố
    Route::get('/user', function () {
        return "Hàm route user - admin";
    });
    Route::get('/dashboard', function () {
        return "Hàm route dashboard - admin";
    });
});
Route::get('/tin-tuc', function () {
    return view('tintuc');
});
Route::match(['GET', 'POST'], '/tin-tuc', function (Request $request) {
    //Kiểm tra phương thức
    if ($request->isMethod('POST')) {
        return "Phương thức POST đã xảy ra";
    }
    return view('tintuc'); //Mặc định xảy ra phương thức get
});
// Route::post('/tin-tuc', function () {
//     return view('post-new');
// })->name('post-new');
Route::get('/user/{id}/{type}', function ($id, $type) { // Truyền tham số vào route
    //Lưu tên người dùng lên session
    return "Người dùng có id là: " . $id . " và type =" . $type;
});
Route::put('/user', function (Request $request) { // update
    $newName = $request->input('fullname');

    session(['name' => $newName]);

    return 'Tên sau khi update là :' . session('name');
})->name('user-get');
//cập nhật tên người dùng

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
