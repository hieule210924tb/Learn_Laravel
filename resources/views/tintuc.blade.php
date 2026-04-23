<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
</head>

<body>
    <h1>VIEW TIN TUC</h1>
    <form action="/tin-tuc" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="fullname" placeholder="Họ tên"> <br>
        <input type="text" name="email" placeholder="Email"> <br>
        <!-- <input type="file" name="thumb"> -->
        <button type="submit">Gửi</button>
    </form>
</body>

</html>