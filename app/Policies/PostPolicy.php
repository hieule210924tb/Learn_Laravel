<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class PostPolicy
{

    //admin thì đc quyền làm mọi thứ
    public function before(User $user, string $ability): bool|null
    {
        return $user->is_admin ? true : null;
    }
    /**
     * Determine whether the user can view any models.
     * Ai cũng xem được danh sách
     * ?User = User|null
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     * Ai cũng xem được những bài đã publish , bài nào chưa public chỉ mỗi tác giả xem được
     */
    public function view(User $user, Post $post): bool
    {
        return $post->is_public || ($user && $user->id === $post->user_id); //return true
    }

    /**
     * Determine whether the user can create models.
     * User đã login mới tạo bài viết
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     * chỉ có tác giả chủ bài viết mới được sửa
     */
    public function update(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can delete the model.
     * chỉ có tác giả chủ bài viết mới được xóa
     */
    public function delete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can restore the model.
     * chỉ có tác giả chủ bài viết mới được sửa restore

     */
    public function restore(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Post $post): bool
    {
        return $user->id === $post->user_id;
    }
}