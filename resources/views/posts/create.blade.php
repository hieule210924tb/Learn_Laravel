<h1>CREATE POST</h1>


<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <div>
        <label for="">Name:</label>
        <input type="text" name="name" value="{{old('name')}}">
    </div>
    <div>
        <label for="">Content:</label>
        <textarea name="content"></textarea>
    </div>
    <div>
        <button type="submit">Thêm</button>
    </div>
</form>