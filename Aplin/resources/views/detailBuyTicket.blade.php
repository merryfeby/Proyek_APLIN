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
		<ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-6">
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="/homeUser">Home</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
      <li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="#">Cinemas</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold text-indigo-500 hover:text-indigo-700" href="#">Movies</a></li>
			<li class="text-gray-300">
				<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" class="w-4 h-4 current-fill" viewBox="0 0 24 24">
					<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
				</svg>
			</li>
			<li><a class="text-sm font-semibold  text-indigo-500 hover:text-indigo-700" href="#">History Ticket</a></li>
		</ul>
		<a class="hidden lg:inline-block py-2 px-6 bg-indigo-500 hover:bg-indigo-600 text-sm text-white font-bold rounded-xl transition duration-200" href="#">Profile</a>
	</nav>
  <div class="px-40 py-10 bg-gray-100 container">
    <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Buy Ticket</h2>
		<h2 class="text-sm font-normal text-gray-400 text-left mb-4">15:00 (20 April 2024)</h2>
		<div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
			<img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" style="width: 250px" />
			<div class="flex flex-col px-5 justify-between">
				<div class="">
					<h2 class="text-2xl font-semibold text-left text-black mb-2">Elemental</h2>
					<h2 class="text-sm font-normal text-left text-indigo-500 mb-2">Romance, Kids</h2>
					<h2 class="text-sm font-normal text-left text-indigo-500  mb-1"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
					<h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>Studio 1 • 17:00 - 19:30</h2>
				</div>
				<div>
					<h2 class="text-md font-semibold text-left text-black mb-1">Details</h2>
					<h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Producer : Pixar </h2>
					<h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Director : John Lasseter and Pete Docter </h2>
					<h2 class="text-sm font-normal text-left text-indigo-500  mb-3">Cast : Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr</h2>
					<h2 class="text-sm font-normal text-justify text-gray-500  mb-1">"Elemental" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water nymph, and Zephyr, a playful air sylph, Ember discovers that an ancient evil threatens to consume their world by disrupting the harmony of the elements. Together, they must harness the power of their respective elements and overcome their differences to save their home from destruction, learning valuable lessons about friendship, cooperation, and the importance of preserving the delicate balance of nature along the way.</h2>
				</div>
			</div>
			{{-- <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none">Buy Ticket</button> --}}
		</div>
		{{-- <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8 mt-10">
			select location dll
			<div>
				
			</div>
			<h2 class="text-2xl font-semibold text-left text-black mb-2">Select your seats</h2>
			
			<div class="flex justify-center items-center">
				<h2 class="text-2xl font-semibold text-black mb-2">SCREEN</h2>
				<div flex>

				</div>
			</div>
	  </div> --}}
		<div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8 mt-10">
			<h2 class="text-2xl font-semibold text-center text-black mb-5">Select your seats</h2>
			<h2 class="text-lg font-semibold text-black text-center mb-10 mt-8">SCREEN</h2>
			<div class="flex justify-center items-center">
				<div class="flex flex-col gap-4">
					<div class=" flex flex-row gap-4">
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-indigo-400 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-indigo-400 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">D1</button>
					</div>
					<div class=" flex flex-row gap-4">
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">C1</button>
					</div>
					<div class=" flex flex-row gap-4">
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">B1</button>
					</div>
					<div class=" flex flex-row gap-4">
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-indigo-700 text-white font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-indigo-700 text-white font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
						<button class="w-10 h-10 bg-gray-200 font-semibold flex justify-center items-center rounded-lg">A1</button>
					</div>
				</div>
			</div>
			<div class="flex flex-row justify-center items-center mt-10 gap-8">
				<div class="flex flex-row gap-2 justify-center items-center">
					<div class="w-4 h-4 bg-gray-200  rounded-full"></div>
					<h2 class="text-md font-semibold text-left text-black">Available</h2>
				</div>
				<div class="flex flex-row gap-2 justify-center items-center">
					<div class="w-4 h-4 bg-indigo-400 flex justify-center items-center rounded-full"></div>
					<h2 class="text-md font-semibold text-left text-black">Reserved</h2>
				</div>
				<div class="flex flex-row gap-2 justify-center items-center">
					<div class="w-4 h-4 bg-indigo-700 flex justify-center items-center rounded-full"></div>
					<h2 class="text-md font-semibold text-left text-black ">Selected</h2>
				</div>
			</div>
	  </div>
  
   
    {{-- <div class="relative bg-gradient-to-br from-indigo-500 to-blue-500">
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
  </div> --}}

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
</html>