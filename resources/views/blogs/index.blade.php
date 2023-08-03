<x-layout>
  <div class="bg-[#edf2f8] w-full h-screen">
    <h1><a href="/blogs/create">Create new one</a></h1>
    @foreach($blogs as $blog)
    <h1>Title: {{$blog->title}}</h1>
    <p>Description: {{$blog->description}}</p>
    @endforeach
  </div>
  <div></div>
</x-layout>