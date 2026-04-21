<h1>VIEW TIN TUC</h1>

<form action="/tin-tuc" method="POST">
    @csrf
    <input type="text" name="fullname" placeholder="Họ tên">

    <button type="submit">Gửi</button>
</form>