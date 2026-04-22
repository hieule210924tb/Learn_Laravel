<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Schema::table('comment', function (Blueprint $table) {
        //     $table->unsignedInteger('user_id')->after('post_id'); // thêm trường user_id vào bảng comment sau post_id

        //     // Thiết lập khóa ngoại
        //     $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        // });
        // Schema::drop('cache'); // Xóa bảng cache
        // Schema::rename('cache', 'caches'); // Đổi tên bảng cache thành caches
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};