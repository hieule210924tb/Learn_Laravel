<h1>POST INDEX</h1>
@auth
<a href="{{ route('posts.create') }}">create</a>
@endauth

<ul>
    @foreach($posts as $post)
    <li>
        <h3>Bài viết: {{ $post->name}} </h3>
        <a href="{{ route('posts.edit',$post) }}">edit</a>
        <form method="POST" action="{{ route('posts.destroy',$post) }}" style="display: inline;">
            @csrf
            @method('DELETE')
            <button type="submit">delete</button>
        </form>
        <a href="{{ route('posts.show',$post) }}">show</a>
    </li>
    @endforeach
</ul>