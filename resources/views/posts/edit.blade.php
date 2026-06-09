<h1>edit post</h1>

<form method="POST" action="{{ route('posts.update',$post) }}">
    @csrf
    @method('PUT')

    <div>
        <input type="text" name="name" value="{{old('name',$post->name)}}">
    </div>
    <div>
        <textarea name="content">{{old('content',$post->content)}}</textarea>
    </div>
    <div>
        <button type="submit">Lưu</button>
    </div>
</form>