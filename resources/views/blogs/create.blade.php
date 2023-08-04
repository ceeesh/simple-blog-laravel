<x-layout>
  <div class="w-full h-screen bg-[#edf2f8] overflow-hidden">
    <div class="w-2/5 mx-auto mt-20">
      <a href="/home" class="hover:text-blue-500">
        <img src="{{asset("./images/home.png")}}" class="w-5 inline mr-5" />
      </a>
      <form action="/blogs" method="POST">
        @csrf

        <div class="text-center">
          <label class="text-3xl font-bold">Title</label>
          <input type="text" name="title" value="{{old('title')}}" class="p-2 rounded w-full mt-2" />
          @error('title')
          <p class="text-red-500 text-xs-mt-1">{{$message}}</p>
          @enderror
        </div>

        <div class="mt-10 text-center">
          <label class="text-3xl font-bold">Description</label>
          <textarea name="description" rows="6" class="p-2 rounded w-full mt-2">{{old('description')}}</textarea>
          @error('description')
          <p class="text-red-500 text-xs-mt-1">{{$message}}</p>
          @enderror
        </div>

        <button type="submit"
          class="bg-black text-white p-2 rounded hover:bg-white hover:text-black w-full mt-10 transition-all duration-300 delay-75">Submit</button>
      </form>
    </div>
  </div>
</x-layout>