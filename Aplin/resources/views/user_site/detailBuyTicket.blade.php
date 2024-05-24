@extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100 container">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Buy Ticket</h2>
  {{-- <h2 class="text-sm font-normal text-gray-400 text-left mb-4">15:00 (20 April 2024)</h2> --}}
  <div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
    <img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" style="width: 250px" />
    <div class="flex flex-col px-5">
      <div class="">
        <h2 class="text-2xl font-semibold text-left text-black mb-2">Elemental</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-2">Romance, Kids</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1"><i class="fa-solid fa-video mr-2"></i></i></span>Studio 1</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min • 17:00 - 19:30</h2>
      </div>
      <div>
        <h2 class="text-md font-semibold text-left text-black mb-1">Details</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Producer : Pixar </h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Director : John Lasseter and Pete Docter </h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-3">Cast : Jennifer Lawrence as Ember, Chris Pratt as Terra, Zendaya as Aqua, and Tom Holland as Zephyr</h2>
        <h2 class="text-xs font-normal text-justify text-gray-500  mb-1">"Elemental" follows the journey of Ember, a spirited young fire sprite, who embarks on a quest to restore balance to the world when the elemental forces of nature start to unravel. Alongside her newfound friends, Terra, an earth guardian, Aqua, a water nymph, and Zephyr, a playful air sylph, Ember discovers that an ancient evil threatens to consume their world by disrupting the harmony of the elements. Together, they must harness the power of their respective elements and overcome their differences to save their home from destruction, learning valuable lessons about friendship, cooperation, and the importance of preserving the delicate balance of nature along the way.</h2>
      </div>
    </div>
  </div>

  <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8 mt-10">
    <form action="">
      <div class="m-5">
        <div class="flex justify-center">
          <select id="locations" class="text-white  bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center mb-5">
            <option value="d" class="text-sm text-gray-700 bg-white" selected>All Cinemas</option>
            <option value="a" class="text-sm text-gray-700 bg-white">XXI Nganjuk</option>
            <option value="b" class="text-sm text-gray-700 bg-white">CGV Bogor</option>
            <option value="c" class="text-sm text-gray-700 bg-white">XXI Surabaya</option>
          </select>
        </div>
        <div class="flex flex-col">
          <div class="flex flex-col bg-gray-100 p-5 rounded-xl border border-gray-200 mb-5">
            <div class="flex border-b border-gray-300 justify-between mb-5 pb-2">
              <h2 class="text-md font-semibold text-left text-black mr-5 "><i class="fa-solid fa-location-dot mr-2 text-indigo-500"></i>XXI Nganjuk</h2>
              <h2 class="text-md font-semibold text-left text-black mr-5 "><i class="fa-solid fa-money-bill-wave mr-2 text-indigo-500"></i>Rp 50000</h2>
            </div>
            <div class="flex flex-row">
              <button type="submit" name="" class="tracking-wide font-semibold border-2 border-indigo-500 text-black px-2 w-auto py-2 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-2">13:00</button>
              <button type="submit" name="" class="tracking-wide font-semibold border-2 border-indigo-500 text-black px-2 w-auto py-2 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-2">13:00</button>
              <button type="submit" name="" class="tracking-wide font-semibold border-2 border-indigo-500 text-black px-2 w-auto py-2 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-2">13:00</button>
              <button type="submit" name="" class="tracking-wide font-semibold border-2 border-indigo-500 text-black px-2 w-auto py-2 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-2">13:00</button>
            </div>
          </div>
        </div>
      </div>
      <h2 class="text-2xl font-semibold text-center text-black mb-10">Select your seats</h2>
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
      <div class="flex justify-center m-5">
        <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-auto py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none px-5">Proceed to Checkout</button>
      </div>
    </form>
  </div>
</div>
@endsection