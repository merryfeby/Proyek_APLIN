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
		<button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="bg-indigo-500 hover:bg-indigo-600 text-white font-bold rounded-xl transition duration-200 text-sm px-5 py-2.5 text-center inline-flex items-center" type="button"><?php echo e(session('login')); ?><svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
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
        <form action="/user/logout" method="post">
          <?php echo csrf_field(); ?>
          <li><button type="submit" class="block text-left w-full px-4 py-2  hover:bg-indigo-100">Log Out</button></li>
        </form>
			</ul>

		</div>
	</nav>
  <div>
    <div class="min-h-screen p-10 flex flex-col items-center justify-center" style="background-image: url('https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/640776f5bf589aa0c82c42e4_movie%20poster%20design.jpg');">
      <h2 class="text-7xl font-bold text-center text-white">Hi, <?php echo e(session('login')); ?>!</h2>
      <h2 class="text-7xl font-bold text-center text-white">Welcome to MovieMate.</h2>
      <div class="flex w-[50%]">
        <h2 class="-xl font-semibold text-center text-white mt-4">"Step into the world of MovieMate, where your cinematic journey begins with effortless online ticket booking!"<h2>
      </div>
    </div>
    <div class="p-10 bg-gray-100">
      <h2 class="text-4xl font-bold text-center text-indigo-500 text-center mt-10 mb-8">Now Showing</h2>
      <div class="flex justify-center items-center gap-6">
        <div class="container w-60 bg-white rounded-xl shadow-lg p-4">
          <img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-lg font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-sm font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-sm font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
          <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Buy Ticket</button>
        </div>
        <div class="container w-60 bg-white rounded-xl shadow-lg p-4">
          <img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-lg font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-sm font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-sm font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
          <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Buy Ticket</button>
        </div>
        <div class="container w-60 bg-white rounded-xl shadow-lg p-4">
          <img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-lg font-semibold  text-black text-center my-2">Elemental</h2>
          <h2 class="text-sm font-normal  text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-sm font-normal  text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
          <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Buy Ticket</button>
        </div>
      </div>
    </div>

    <div class="p-10 mb-10 bg-gray-100 flex flex-col justify-center items-center">
      <h2 class="text-4xl font-bold  text-indigo-500 text-center mt-10 mb-8">Movies</h2>
      <div class="flex justify-center items-center gap-6 flex-wrap w-[60%]">
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold  text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal  text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal  text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
        <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400 ">
          <img class="rounded-xl w-40" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" />
          <h2 class="text-md font-semibold text-center text-black text-center my-2">Elemental</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2">Romance, Kids</h2>
          <h2 class="text-xs font-normal text-center text-indigo-500 text-center my-2"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
        </button>
      </div>
    </div>
    <div class="p-10 mb-10 bg-gray-100 flex flex-col justify-center items-center">
      <h2 class="text-4xl font-bold text-center text-indigo-500 mt-10 mb-8">Promotion</h2>
      <div class="flex justify-center items-center gap-6 flex-wrap w-[70%]">
        <div class="bg-gradient-to-br from-purple-600 to-indigo-600 text-white text-center py-6 px-10 rounded-lg shadow-md relative">
          <img src="https://media.licdn.com/dms/image/D560BAQGiAr4aoJn7nA/company-logo_200_200/0/1693888943426/go_pay_logo?e=2147483647&v=beta&t=lN1Jy_LJdR45k0D6mRgCX7LUlFrs0XmL_l3YCgfsXZk" class="w-16 mx-auto mb-2 rounded-lg">
          <h3 class="text-lg font-semibold mb-2">20% off on your next cinema ticket booking<br>using GOPAY</h3>
          <div class="flex items-center justify-center mb-4">
            <span id="cpnCode" class="border-dashed border text-white px-2 py-1 rounded-l text-sm">MOVIEGOPAY20</span>
            <span id="cpnBtn" class="border border-white bg-white text-purple-600 px-2 py-1 rounded-r cursor-pointer text-sm">Copy Code</span>
          </div>
          <p class="text-xs">Valid Till: 20Dec, 2024</p>
          <div class="w-8 h-8 bg-gray-100 rounded-full absolute top-1/2 transform -translate-y-1/2 left-0 -ml-4"></div>
          <div class="w-8 h-8 bg-gray-100 rounded-full absolute top-1/2 transform -translate-y-1/2 right-0 -mr-4"></div>
        </div>
      </div>
    </div>
    <div class="relative bg-gradient-to-br from-indigo-500 to-blue-500">
      <div class="px-4 pt-12 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8">
        <div class="mb-8 ">
          <div class="flex justify-center items-center flex-col">
          <div class="flex flex-row items-center">
            <i class="fa-solid fa-ticket text-white text-2xl"></i>
            <h1 class="font-semibold text-2xl text-white ml-2">Moviemate</h1>
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
  </div>
</body>
</html><?php /**PATH C:\Users\ASUS\Documents\GitHub\Proyek_APLIN\Aplin\resources\views/homeUser.blade.php ENDPATH**/ ?>