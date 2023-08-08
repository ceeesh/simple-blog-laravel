<x-layout>
  <div class="w-full bg-[#edf2f8] h-screen overflow-hidden">
    <div class="mt-10 w-1/2 mx-auto">
      <h1 class="text-5xl font-bold text-center">Profile</h1>
      <h1 class="text-center mt-5"><a href="/profile/{{$user->id}}/edit">Edit</a></h1>
      <div class="flex flex-col justify-center">
        <div class="mx-auto mt-10">
          <img class="text-center w-36 rounded-full border-8 border-red-200" src="{{$user->picture ? asset('storage/'.$user->picture) 
          : asset("./images/user.png")}}"/>
        </div>

        <div>
          <h1 class="text-2xl text-center mt-10">{{$user->email}}</h1>
          <h1 class="text-2xl text-center mt-10">{{$user->name}}</h1>
        </div>


      </div>
    </div>
  </div>

</x-layout>