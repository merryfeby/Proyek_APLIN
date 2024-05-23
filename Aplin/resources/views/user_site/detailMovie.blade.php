@extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100 container">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Detail Movie</h2>
  {{-- <h2 class="text-sm font-normal text-gray-400 text-left mb-4">15:00 (20 April 2024)</h2> --}}
  <div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
    <img class="rounded-xl" src="https://upload.wikimedia.org/wikipedia/id/7/7a/Elemental-_Force_of_Nature_poster_Indonesia.jpg" alt="" style="width: 250px" />
    <div class="flex flex-col px-5">
      <div class="">
        <div class="flex items-center mb-2">
          <h2 class="text-2xl font-semibold text-left text-black">Elemental</h2>
          <div class="bg-red-200 text-red-700 font-semibold rounded-lg text-xs px-3 py-1 ml-5 text-center items-center ">
            UNAVAILABLE
          </div>
          {{-- <div class="bg-emerald-200 text-emerald-700 font-semibold rounded-lg text-xs px-3 py-1 ml-5 text-center items-center ">
            AVAILABLE
          </div> --}}
        </div>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-2">Romance, Kids</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>130 min</h2>
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
</div>
@endsection