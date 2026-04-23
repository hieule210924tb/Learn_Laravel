<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title','tin tức')</title>
</head>

<body>
    <h1>Trang layout TIN TUC</h1>
    <div class="container">
        @yield('content')
    </div>
    <!-- <form action="/tin-tuc" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="fullname" placeholder="Họ tên"> <br>
        <input type="text" name="email" placeholder="Email"> <br>
        <input type="file" name="thumb">
        <button type="submit">Gửi</button>
    </form> -->
</body>

</html>