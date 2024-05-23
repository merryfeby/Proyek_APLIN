<?php
?>
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
	<nav class="relative px-4 py-4 flex justify-between items-center bg-white">
    <div class="flex flex-row justify-center items-center">
      <i class="fa-solid fa-ticket text-indigo-500 text-lg"></i>
      <h1 class="font-semibold text-lg text-indigo-500 ml-2">Moviemate</h1>
    </div>
		<ul class="absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2  mx-auto flex items-center w-auto space-x-6">
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="/homeUser">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
      <li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="/offers">Offers</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold text-indigo-500 hover:text-indigo-700" href="/movies">Movies</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="/historyTicket">History Ticket</a></li>
		</ul>
		<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-xl transition duration-200 text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Merry08<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
			<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
			</svg>
		</button>
		<!-- Dropdown menu -->
		<div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg w-auto border border-gray-200 shadow-xl">
			<div class="px-4 py-3 text-sm text-gray-700">
				<div>sipengeming69@gmail.com</div>
				<div class="font-medium truncate mt-1">Balance : Rp 50000</div>
			</div>
			<ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownInformationButton">
				<li><a href="/topup" class="block px-4 py-2  hover:bg-indigo-100">Top Up Balance</a></li>
				<li><a href="#" class="block px-4 py-2  hover:bg-indigo-100">Log Out</a></li>
			</ul>
		</div>
	</nav>
  <div class="px-40 py-10 bg-gray-100">
    <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">History Ticket</h2>
    <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8">
			<div class="flex justify-between items-center mb-5">
        <select id="locations" class="text-white  bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center">
          <option value="d" class="text-sm text-gray-700 bg-white" selected>Newest</option>
          <option value="a" class="text-sm text-gray-700 bg-white">Oldest</option>
        </select>
				<h2 class="text-sm font-normal text-gray-400 text-left">Sorted by newest</h2>
      </div>
      <div class="flex flex-col">
				{{-- LIST HISTORY       --}}
        <div class="flex flex-col bg-gray-100 rounded-xl border border-gray-200 mb-5">
          <div class="flex bg-indigo-500 text-white rounded-t-lg justify-between items-center px-5 py-2">
            <h2 class="text-sm font-semibold text-left"></i>Order ID #210124</h2>
            <h2 class="text-xs font-semibold text-left"></i>5/6/2024</h2>
          </div>
          <div class="flex flex-col px-5 py-2 border-gray-300 border-b">
            <h2 class="text-md font-semibold text-left mb-2 text-gray-600">Elemental</h2>
            <h2 class="text-sm font-normal text-gray-600 text-left mb-1"><i class="fa-solid fa-sm fa-location-dot mr-2 text-indigo-500"></i>XXI Nganjuk</h2>
            <h2 class="text-sm font-normal text-left text-gray-600"></i><i class="fa-solid fa-sm fa-clock mr-2 text-indigo-500"></i>Studio 1 • 17:00</h2>
          </div>
					<div class="flex flex-col px-5 py-2 border-gray-300 border-b">
						<h2 class="text-sm font-semibold text-gray-600 text-left mb-1"></i>Seats</h2>
						<div class="flex justify-between items-center">
							<h2 class="text-sm font-normal text-left text-gray-600">A12</h2>
							<h2 class="text-sm font-normal text-left text-gray-600">RP 50000</h2>
						</div>
						<div class="flex justify-between items-center">
							<h2 class="text-sm font-normal text-left text-gray-600">A12</h2>
							<h2 class="text-sm font-normal text-left text-gray-600">RP 50000</h2>
						</div>
					</div>
					<div class="flex flex-col px-5 py-2">
						<div class="flex justify-between items-center">
							<h2 class="text-sm font-semibold text-gray-600 text-left mb-1"></i>Total </h2>
							<h2 class="text-sm font-normal text-left text-gray-600">RP 100000</h2>
						</div>
					</div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>