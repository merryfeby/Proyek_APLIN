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
		<div class="lg:hidden">
			<button class="navbar-burger flex items-center text-indigo-500 p-3">
				<svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<title>Mobile menu</title>
					<path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
				</svg>
			</button>
		</div>
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="/homeUser">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
      <li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="#">Offers</a></li>
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
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="#">History Ticket</a></li>
		</ul>
		<a class="hidden lg:inline-block py-2 px-6 bg-indigo-500 hover:bg-indigo-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Profile</a>
	</nav>
  <div>
    <div class="min-h-screen p-10 flex flex-col items-center justify-center" style="background-image: url('https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/640776f5bf589aa0c82c42e4_movie%20poster%20design.jpg');">
      <h2 class="text-7xl font-bold text-center text-white">Hi, Merry08!</h2>
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

	<div class="navbar-menu relative z-50 hidden">
		<div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
		<nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
			<div class="flex items-center mb-8">
				<a class="mr-auto text-3xl font-bold leading-none" href="/homeUser">
				</a>
				<button class="navbar-close">
					<svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
					</svg>
				</button>
			</div>
			<div>
				<ul>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-indigo-50 hover:text-indigo-500 rounded" href="#">Home</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-indigo-50 hover:text-indigo-500 rounded" href="#">About Us</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-indigo-50 hover:text-indigo-500 rounded" href="#">Services</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-indigo-50 hover:text-indigo-500 rounded" href="#">Pricing</a>
					</li>
					<li class="mb-1">
						<a class="block p-4 text-sm font-semibold text-gray-400 hover:bg-indigo-50 hover:text-indigo-500 rounded" href="#">Contact</a>
					</li>
				</ul>
			</div>
			<div class="mt-auto">
				<div class="pt-6">
					<a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-indigo-500 hover:bg-indigo-700  rounded-xl" href="#">Profile</a>
				</div>
			</div>
		</nav>
	</div>

<script>
// Burger menus
document.addEventListener('DOMContentLoaded', function() {
    // open
    const burger = document.querySelectorAll('.navbar-burger');
    const menu = document.querySelectorAll('.navbar-menu');

    if (burger.length && menu.length) {
        for (var i = 0; i < burger.length; i++) {
            burger[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    // close
    const close = document.querySelectorAll('.navbar-close');
    const backdrop = document.querySelectorAll('.navbar-backdrop');

    if (close.length) {
        for (var i = 0; i < close.length; i++) {
            close[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }

    if (backdrop.length) {
        for (var i = 0; i < backdrop.length; i++) {
            backdrop[i].addEventListener('click', function() {
                for (var j = 0; j < menu.length; j++) {
                    menu[j].classList.toggle('hidden');
                }
            });
        }
    }
});
</script>  
</body>
</html><?php /**PATH C:\Users\ASUS\Documents\GitHub\Proyek_APLIN\Aplin\resources\views/homeUser.blade.php ENDPATH**/ ?>