<x-layout>
  <div  class="font-bold w-full h-screen overflow-hidden">
    <div class="w-full h-screen bg-[url('images/loginbg.jpg')] bg-cover bg-center bg-no-repeat blur-lg -z-50 absolute">
    </div>
    <form method="POST" action="/authenticate" class="w-1/4 border border-black mx-auto mt-64 z-50">
      @csrf
      <h1>HELLO</h1>
      <div class="text-black flex">
        <div class="bg-white bg-gray-700 bg-opacity-90 p-4"><img src="{{asset("./images/user.png")}}" class="w-5"/></div>
        <input class="w-full block bg-gray-200 bg-opacity-80 p-3 font-normal" placeholder="Email" name="email" type="email" />
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex mt-5">
        <div class="bg-white bg-gray-700 bg-opacity-90 p-4"><img src="{{asset("./images/lock.png")}}" class="w-5"/></div>
        <input class="w-full block bg-gray-200 bg-opacity-80 p-3 font-normal" placeholder="Password" name="password" type="password" />
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <button type="submit" class="bg-white ">Login</button>
    </form>
  </div>
</x-layout>