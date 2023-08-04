<div class="w-full h-screen">
  <form action="/blogs/{{$blog->id}}" method="POST">
    @csrf
    @method('PUT')

    <div>
      <label>Title</label>
      <input type="text" name="title" value="{{$blog->title}}"/>
    </div>

    <div>
      <label>Description</label>
      <input type="text" name="description" value="{{$blog->description}}"/>
    </div>

    <button type="submit">Submit</button>
  </form>
</div>