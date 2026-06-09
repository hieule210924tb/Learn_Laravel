@can('update',$post)
<form action="/posts/{{$post->id}}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $post->name }}">
    <button type="submit">update</button>
</form>
@endcan

@cannot('update',$post)
Bạn không được quyền sửa bài này
@endcannot