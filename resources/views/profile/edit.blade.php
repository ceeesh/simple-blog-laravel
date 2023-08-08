<x-layout>

  <div class="w-full bg-[#edf2f8] h-screen overflow-hidden">
    <form method="POST" action="/profile/{{$user->id}}" class="w-1/4 mx-auto mt-44" enctype="multipart/form-data">
      @csrf
      @method('PUT')
      <h1 class="text-center text-xl mb-5">Edit</h1>
      
      <div class="text-black flex flex-col mb-5">

        <input name="name" class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700"
          placeholder="Name" type="text" value="{{$user->name}}"/>
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex flex-col mb-5">

        <input name="email" class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700"
          placeholder="Email" type="email" value="{{$user->email}}"/>
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex flex-col my-5">
        <label for="picture" class="inline-block text-lg mb-2">
          Add Profile Picture
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="picture" />
        @error('picture')
        <p class="text-red-500 text-xs-mt-1">{{$message}}</p>
        @enderror
      </div>
      <div
        class="bg-white text-black font-medium text-base mt-5 mx-8 p-2 text-center shadow-2xl shadow-black bg-gray-200 bg-opacity-50  hover:bg-opacity-10 transition-all duration-300 delay-75">
        <button type="submit" class="w-full ">SUBMIT</button>
      </div>
    </form>
  </div>
</x-layout>