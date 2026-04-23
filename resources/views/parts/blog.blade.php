<!-- Kế thừa layout từ tin tức -->

@extends('tintuc')
@section('title','Layout con blog')


@section('content')
<h1>Cách viết nội dung con ở file kế thừa </h1>
<h1>Trang con layout blog</h1>
<form action="/tin-tuc" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="fullname" placeholder="Họ tên"> <br>
    <input type="text" name="email" placeholder="Email"> <br>
    <input type="file" name="thumb">
    <x-button>Gửi</x-button>
</form>
@endsection

<x-alert type='info'>Cập nhật thành công</x-alert>
<x-alert type='danger'>Cập nhật thất bại</x-alert>
<x-alert>Cập nhật thành công</x-alert>

<x-message>Xin chào ngày mới</x-message>
<x-button type='danger'>Xác nhận</x-button>