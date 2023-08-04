<x-layout>
  <div class="font-bold w-full h-screen overflow-hidden">
    <div class="w-full h-screen bg-[url('images/loginbg.jpg')] bg-cover bg-center bg-no-repeat blur-lg -z-50 absolute">
    </div>
    <form method="POST" action="/authenticate" class="w-1/4 mx-auto mt-64 z-50">
      @csrf
      <h1 class="text-center text-white text-xl mb-5">LOGIN</h1>
      <div class="text-black flex ">
        <div class="bg-white bg-gray-700 bg-opacity-80 p-4"><img src="{{asset("./images/user.png")}}" class="w-5" />
        </div>
        <input class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700 "
          placeholder="Email" name="email" type="email" />
      </div>
      <div>
        @error('email')
        <p class="text-red-300 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>


      <div class="text-black flex mt-5 ">
        <div class="bg-white bg-gray-700 bg-opacity-80 p-4"><img src="{{asset("./images/lock.png")}}" class="w-5" />
        </div>
        <input class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700 "
          placeholder="Password" name="password" type="password" />

      </div>
      <div>
        @error('password')
        <p class="text-red-300 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div
        class="bg-white font-medium text-base mt-5 mx-8 p-2 text-center shadow-2xl shadow-black bg-gray-200 bg-opacity-50 text-white  hover:bg-opacity-10">
        <button type="submit" class="w-full">LOGIN</button>
      </div>

    </form>
  </div>
</x-layout>