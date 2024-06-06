{{-- @extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100 container">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Detail Movie</h2>
  <div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
    <img class="rounded-xl" src="{{ $data->poster }}" alt="" style="width: 250px" />
    <div class="flex flex-col px-5">
      <div class="">
        <div class="flex items-center mb-2">
          <h2 class="text-2xl font-semibold text-left text-black">{{ $data->title }}</h2>
          @if($hasScreening)
            <div class="bg-emerald-200 text-emerald-700 font-semibold rounded-lg text-xs px-3 py-1 ml-5 text-center items-center ">
              NOW SHOWING
            </div>
          @else
            <div class="bg-red-200 text-red-700 font-semibold rounded-lg text-xs px-3 py-1 ml-5 text-center items-center ">
              NO LONGER SHOWING
            </div>
          @endif
        </div>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-2">{{ $data->genre }}</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>{{ $data->duration }} min</h2>
      </div>
      <div>
        <h2 class="text-md font-semibold text-left text-black mb-1">Details</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Producer : {{ $data->producer }}</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Director : {{ $data->director }} </h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-3">Cast : {{ $data->cast }}</h2>
        <h2 class="text-xs font-normal text-justify text-gray-500  mb-1">{{ $data->synopsis }}</h2>
      </div>
    </div>
  </div>
</div>
@endsection --}}
@extends('user_site.userLayout')
@section('content') 
<div class="px-4 py-10 bg-gray-100 container mx-auto md:px-10 lg:px-20">
  <h2 class="text-lg md:text-xl font-bold text-indigo-500 text-left mb-2">Detail Movie</h2>
  <div class="w-full flex flex-col md:flex-row bg-white rounded-xl border border-gray-200 p-4 md:p-8">
    <img class="rounded-xl mb-4 md:mb-0 mx-auto md:mx-0" src="{{ $data->poster }}" alt="" style="width: 250px" />
    <div class="flex flex-col px-2 md:px-5">
      <div>
        <div class="flex flex-col md:flex-row items-center mb-2">
          <h2 class="text-lg md:text-2xl font-semibold text-left text-black">{{ $data->title }}</h2>
          @if($hasScreening)
            <div class="bg-emerald-200 text-emerald-700 font-semibold rounded-lg text-xs px-3 py-1 mt-2 md:mt-0 md:ml-5 text-center items-center">
              NOW SHOWING
            </div>
          @else
            <div class="bg-red-200 text-red-700 font-semibold rounded-lg text-xs px-3 py-1 mt-2 md:mt-0 md:ml-5 text-center items-center">
              NO LONGER SHOWING
            </div>
          @endif
        </div>
        <h2 class="text-sm md:text-base font-normal text-left text-indigo-500 mb-2">{{ $data->genre }}</h2>
        <h2 class="text-sm md:text-base font-normal text-left text-indigo-500 mb-4">
          <span><i class="fa-solid fa-clock mr-2"></i></span>{{ $data->duration }} min
        </h2>
      </div>
      <div>
        <h2 class="text-md font-semibold text-left text-black mb-1">Details</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-1">Producer: {{ $data->producer }}</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-1">Director: {{ $data->director }}</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-3">Cast: {{ $data->cast }}</h2>
        <h2 class="text-xs font-normal text-justify text-gray-500 mb-1">{{ $data->synopsis }}</h2>
      </div>
    </div>
  </div>
</div>
@endsection
