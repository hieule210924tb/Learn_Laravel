<style>
.login-admin {
    display: flex;
    min-width: 100vw;
    text-align: center;
    min-height: 100vh;
    justify-content: center;
    align-items: center;
}

.login-admin form input,
.login-admin form button {
    display: block;
    margin-top: 10px;
}

h2 {
    text-align: center;
}

.login-admin form label {
    display: flex !important;
    align-items: center;
    gap: 5px;
}
</style>

<h2 class="text-center">Login Admin</h2>
<div class="login-admin">
    <form method="POST" action="{{ route('admin.login.submit') }}">
        @csrf

        <input type="email" name="email" placeholder="Nhập email" value="{{old('email')}}">
        <input type="password" name="password" placeholder="Mật khẩu">
        <label for="">
            <input type="checkbox" name="remember">Remember
        </label>
        <button type="submit">Login Admin</button>
    </form>
</div>