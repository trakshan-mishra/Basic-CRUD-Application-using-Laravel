<h1>index file</h1>
@foreach ($posts as $item)
    <p> {{ $item->id }}</p>
    <p> {{ $item->description }}</p>
    <a href="{{ route('posts.show', ['id' => $item->id]) }}">show</a>

@endforeach