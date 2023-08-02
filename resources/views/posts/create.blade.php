<h1>create blade file</h1>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <label for="description">description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>
    <button type="submit">
        post
    </button>
</form>