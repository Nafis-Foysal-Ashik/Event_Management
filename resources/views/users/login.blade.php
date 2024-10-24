<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">

  <div class="p-10 max-w-lg mx-auto mt-24 bg-white rounded shadow-lg">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">Login</h2>
      <p class="mb-4">Log into your account</p>
    </header>

    <form method="POST" action="/users/authenticate">
      @csrf

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-300 rounded p-2 w-full" name="email" value="{{ old('email') }}" />

        @error('email')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">Password</label>
        <input type="password" class="border border-gray-300 rounded p-2 w-full" name="password" />

        @error('password')
          <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <button type="submit" class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-700">
        Sign Up
      </button>

      <div class="mt-8 text-center">
        <p>
          Don't have an account?
          <a href="/register" class="text-laravel">Register</a>
        </p>
      </div>
    </form>
  </div>

</body>
</html>
