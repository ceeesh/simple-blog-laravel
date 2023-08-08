<x-layout>
  <div class="font-bold w-full h-screen  overflow-hidden">
    <div class="w-full h-screen bg-[url('images/loginbg.jpg')] bg-cover bg-center bg-no-repeat blur-lg -z-50 absolute">
    </div>
    <form method="POST" action="/create" class="w-1/4 mx-auto mt-44">
      @csrf
      <h1 class="text-center text-white text-xl mb-5">REGISTRATION</h1>
      <div class="text-black flex flex-col mb-5">

        <input name="name" class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700"
          placeholder="Name" type="text" />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex flex-col mb-5">

        <input name="email" class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700"
          placeholder="Email" type="email" />
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex flex-col mb-5">

        <input name="password" class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700"
          placeholder="Password" type="password" />
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex flex-col">

        <input name="password_confirmation"
          class="w-full block bg-gray-200 bg-opacity-50 p-3 font-normal placeholder:text-gray-700 "
          placeholder="Password Confirmation" type="password" />
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div
        class="bg-white font-medium text-base mt-5 mx-8 p-2 text-center shadow-2xl shadow-black bg-gray-200 bg-opacity-50 text-white hover:bg-opacity-10 transition-all duration-300 delay-75">
        <button type="submit" class="w-full ">REGISTER</button>
      </div>
    </form>
  </div>
</x-layout>