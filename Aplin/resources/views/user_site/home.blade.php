@extends('user_site.userLayout')
@section('content') 
  <div class="min-h-screen p-10 flex flex-col items-center justify-center" style="background-image: url('https://assets-global.website-files.com/6009ec8cda7f305645c9d91b/640776f5bf589aa0c82c42e4_movie%20poster%20design.jpg');">
    <h2 class="text-7xl font-bold text-center text-white">Hi, {{session('login')}}!</h2>
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
@endsection