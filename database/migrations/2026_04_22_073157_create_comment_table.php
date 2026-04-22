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
        if (!Schema::hasTable('posts')) {
            Schema::create('posts', function (Blueprint $table) {
                // Để khớp với int(10) trong ảnh của bạn
                $table->increments('id');

                $table->string('name', 200)->nullable();
                $table->text('content')->nullable();
                $table->timestamps();
            });
        };
        if (!Schema::hasTable('comment')) {
            Schema::create('comment', function (Blueprint $table) {
                $table->id(); // ID của bảng comment (mặc định BigInt cũng được)
                $table->text('content')->nullable();

                // Khai báo cột post_id kiểu Integer (4 bytes) để khớp với increments('id') ở trên
                $table->unsignedInteger('post_id');

                // Thiết lập khóa ngoại
                $table->foreign('post_id')->references('id')->on('posts')->cascadeOnDelete();
                //postId : là khóa ngoại, on('post'): liên kết với bảng post, cascadeOnDelete(): xóa id là xóa cmt
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comment');
        Schema::dropIfExists('posts');
    }
};