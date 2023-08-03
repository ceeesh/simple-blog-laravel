<div class="w-full h-screen">
  <form action="/blogs" method="POST">
    @csrf
    <div>
      <label>Title</label>
      <input type="text" name="title" />
    </div>

    <div>
      <label>Description</label>
      <input type="text" name="description" />
    </div>

    <button type="submit">Submit</button>
  </form>
</div>