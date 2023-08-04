<x-layout>
  <div class="bg-[#edf2f8] w-full h-screen">
    <h1 class="text-center pt-20 text-5xl font-bold">BLOGS</h1>

    @unless($blogs->isEmpty())
    <h1 class="text-center"><a href="/blogs/create" class="hover:text-blue-500">Create new one</a></h1>
    <table class="table-auto mx-auto w-5/6 shadow-2xl rounded bg-gray-100">
      <thead class="">
        <tr class="text-4xl">
          <th class="shadow px-10 py-5 rounded">Title</th>
          <th class="shadow px-10 py-5 rounded">Description</th>
          <th class="shadow px-10 py-5 rounded">Actions</th>
        </tr>
      </thead>
      <tbody>
        @foreach($blogs as $blog)
        <tr class="text-2xl">
          <th class="shadow px-10 py-5 hover:text-blue-500 rounded transition-all duration-300 delay-75"><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a>
          </th>
          <th class="shadow px-10 py-5 rounded">{{$blog->description}}</th>
          <th class="shadow px-10 py-5 rounded ">
            <a href="/blogs/{{$blog->id}}/edit">
              <img src="{{asset("./images/edit.png")}}" class="w-5 inline mr-5" />
            </a>
            <form method="POST" action="/blogs/{{$blog->id}}" class="inline ">
              @csrf
              @method('DELETE')
              <button class="text-red-500"><img src="{{asset("./images/trash-can.png")}}"
                  class="w-5 inline" /></button>
            </form>
          </th>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="mt-10 mx-36">{{$blogs->links()}}</div>
    @else
    <h1 class="text-center text-5xl mt-10"><a href="/blogs/create" class="hover:text-blue-500">Create A New Blog</a></h1>
    @endunless
  </div>

</x-layout>