<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Moviemate </title>
		<script src="https://cdn.tailwindcss.com"></script>
		<link rel="preconnect" href="https://fonts.bunny.net">
		<link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
		<script src="https://kit.fontawesome.com/fcd689d6ac.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
		<!-- Styles -->
		<style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
      * {
        font-family: 'Poppins', sans-serif;
      }
      </style>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen w-100">
  <div class="flex justify-center place-items-center w-100 min-h-screen">
    <div class="bg-white lg:w-1/4 sm:w-3/5 p-[4rem]  shadow sm:rounded-lg">
    <form action="/user/login" method="post">
        @csrf
        <div class="flex flex-row justify-center items-center">
					<i class="fa-solid fa-ticket text-indigo-500"></i>
          <h1 class="font-semibold text-indigo-500 pb-1 ml-2">Moviemate</h1>
        </div>
        <div>
          <h2 class="text-3xl font-bold text-black text-center my-8">Login</h2>
        </div>
        <div class="">
          <input type="text" name="username" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Username" required>
        </div>
        <div class="mt-5">
          <input type="password" name="password" class="w-full px-8 py-4 rounded-lg font-medium bg-gray-100 border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Password" required>
        </div>
        <div class="text-center flex flex-col">
          <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Login</button>
        <div>
					<p class="mt-6 text-xs text-gray-600 text-center">
						Don't have an account?
						<a href="/register" class="border-b border-indigo-500 border-dotted text-indigo-500 font-semibold">
								Register here
						</a>
					</p>
        </div>
        </div>
      </form>
    </div>
  </div>
</body>
</html>