<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="//unpkg.com/alpinejs" defer></script>
  <title>Blog</title>
</head>

<body>
  <nav class="flex justify-between items-center h-16 bg-gray-100 bg-opacity-20">
    <h1 class="font-medium text-2xl ml-4">BLOG</h1>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
       <span class="font-bold capitalize hover:text-blue-500 transition-all duration-300 delay-75"> <a href="/profile/{{auth()->user()->id}}" >{{auth()->user()->name}}</a></span>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
        @csrf
        <button type="submit" class="hover:text-blue-500 transition-all duration-300 delay-75">
           Logout
        </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-blue-500 transition-all duration-300 delay-75">Register</a>
      </li>
      <li>
        <a href="/" class="hover:text-blue-500 transition-all duration-300 delay-75">
          Login</a>
      </li>
      @endauth
    </ul>
  </nav>
  <main>
    {{$slot}}
  </main>
  <x-flash-message />
</body>

</html>