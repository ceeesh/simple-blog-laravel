<x-layout>
  <div class="font-bold w-full h-screen bg-red-200 overflow-hidden">
    <form method="POST" action="/create" class="w-1/4 border border-black mx-auto mt-64">
      @csrf
      <h1 class="text-center">Register</h1>
      <div class="text-black flex">
        <div class="bg-white">logo</div>
        <input name="name" class="w-full" placeholder="Name" type="text" />
        @error('name')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex">
        <div class="bg-white">logo</div>
        <input name="email" class="w-full" placeholder="Email" type="email" />
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex">
        <div class="bg-white">logo</div>
        <input name="password" class="w-full" placeholder="Password" type="password" />
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <div class="text-black flex">
        <div class="bg-white">logo</div>
        <input name="password_confirmation" class="w-full" placeholder="Password Confirmation" type="password" />
        @error('password_confirmation')
        <p class="text-red-500 text-xs mt-1">{{$message}}</p>
        @enderror
      </div>

      <button type="submit" class="bg-white">Login</button>
    </form>
  </div>
</x-layout>