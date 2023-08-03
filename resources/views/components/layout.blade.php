<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <nav class="flex justify-between items-center mb-4">
    <h1>BLOG</h1>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
       <span class="font-bold uppercase">Welcome {{auth()->user()->name}}</span>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
        @csrf
        <button type="submit">
          <i class="fa-solid fa-door-closed"></i> Logout
        </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a>
      </li>
      <li>
        <a href="/" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
          Login</a>
      </li>
      @endauth
    </ul>
  </nav>
  <main>
    {{$slot}}
  </main>
</body>

</html>