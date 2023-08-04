<x-layout>
  <div class="bg-[#edf2f8] h-screen w-full overflow-hidden">
    <div class=" w-2/5 mx-auto mt-24 text-center">
      <h1 class="font-bold text-3xl">{{$blog->title}}</h1>
      <h2 class="font-normal text-xl mt-8">{{$blog->description}}</h2>

      <div class="flex justify-center mt-10">
        <a href="/blogs/{{$blog->id}}/edit">
          <img src="{{asset("./images/edit.png")}}" class="w-5 inline mr-5" />
        </a>
        <a href="/home" class="hover:text-blue-500">
          <img src="{{asset("./images/home.png")}}" class="w-5 inline mr-5" />
        </a>
      </div>
    </div>
  </div>
</x-layout>