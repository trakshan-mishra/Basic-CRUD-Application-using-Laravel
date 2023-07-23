<h1>edit blade file</h1>
<form action="{{ route('posts.update', ['id' => $posts->id]) }}" method="post">
    @csrf
    @method('PUT')
    <input type="hidden" name="_method" value="PUT">
    <label for="description">description</label>
    <textarea name="description" id="" cols="30" rows="10">
   {{( $posts->description)}}
    </textarea>
    <br>
    <button type="submit">
        update post
    </button>
</form>