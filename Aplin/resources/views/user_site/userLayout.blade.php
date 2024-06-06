<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MovieMate </title>
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
    ::-webkit-scrollbar {
    display: none;
    }
		</style>
</head>
<body class="bg-gray-100 text-gray-900 min-h-screen w-100">
	<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
    <div class="flex flex-row justify-center items-center">
      <i class="fa-solid fa-ticket text-indigo-500 text-lg"></i>
      <h1 class="font-semibold text-lg text-indigo-500 ml-2">MovieMate</h1>
    </div>
		<ul class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  mx-auto flex items-center w-auto space-x-6">
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="{{ route('home.index') }}">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold text-indigo-500 hover:text-indigo-700" href="{{ route('movies.index')}}">Movies</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="{{ route('history.index') }}">History Ticket</a></li>
		</ul>
		<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-xl transition duration-200 text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">{{ session('login')->username }}<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
			</svg>
		</button>
		<!-- Dropdown menu -->
		<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-auto border border-gray-200 shadow-xl">
			<div class="px-4 py-3 text-sm text-gray-700">
				<div>{{ session('login')->email }}</div>
				<div class="font-medium truncate mt-1">Balance: Rp {{ number_format(session('login')->balance, 0, ',', '.')  }}</div>
			</div>
			<ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
				<li><a href="{{ route('topup.index') }}" class="block px-4 py-2  hover:bg-indigo-100">Top Up Balance</a></li>
        <form action="/logout" method="post">
          @csrf
          <li><button type="submit" class="block text-left w-full px-4 py-2  hover:bg-indigo-100">Log Out</button></li>
        </form>
			</ul>
		</div>
	</nav>
  <div>
    @yield('content')
  </div>
  <div class="relative bg-gradient-to-br from-indigo-500 to-blue-500">
    <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
      <div class="mb-8 ">
        <div class="flex justify-center items-center flex-col">
        <div class="flex flex-row items-center">
          <i class="fa-solid fa-ticket text-white text-2xl"></i>
          <h1 class="font-semibold text-2xl text-white ml-2">MovieMate</h1>
        </div>
          <div class="mt-4 w-[50%]">
            <p class="text-sm text-white">
              Join our community of movie enthusiasts and stay updated with the latest releases, exclusive offers, and special screenings. At MovieMate, we're not just booking tickets; we're curating moments that you'll cherish forever.
            </p>
          </div>
        </div>
      </div>
      <div class="flex flex-col justify-between pt-5 pb-10 border-t border-deep-purple-accent-200 sm:flex-row">
        <p class="text-sm text-gray-100">
          © Copyright 2024 Moviemate team.
        </p>
        <div class="flex items-center mt-4 space-x-4 sm:mt-0">
          <i class="fa-brands fa-square-twitter text-white"></i>
          <i class="fa-brands fa-square-instagram text-white"></i>
          <i class="fa-brands fa-square-facebook text-white"></i>
        </div>
      </div>
    </div>
  </div>

	@yield('scripts')
</body>
</html>