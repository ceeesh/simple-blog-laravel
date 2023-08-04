
<x-layout>
<h1>Title: {{$blog->title}}</h1>
<p>Description: {{$blog->description}}</p>
<h2>Edit: <a href="/blogs/{{$blog->id}}/edit" class="no-underline hover:text-blue-500">Edit me stupid</a></h2>
</x-layout>