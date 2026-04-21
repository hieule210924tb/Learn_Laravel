<?php

namespace App\Providers;

use App\Services\ThongBao;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        $this->app->bind("thongBao", function () { // Hàm bind(): tạo mới đối tượng mỗi khi gọi đến
            return new ThongBao;                        //singleton :tạo một lần dùng mãi mãi
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
