<h1>show file</h1>

<p> {{ $posts->description }}</p>

<a href="{{ route('posts.edit', ['id' => $posts->id]) }}">edit</a>

<form action="{{ route('posts.destroy', ['id' => $posts->id]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit">
        delete post
    </button>
</form>