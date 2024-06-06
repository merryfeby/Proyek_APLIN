@extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100 container mx-auto">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Buy Ticket</h2>
  {{-- <h2 class="text-sm font-normal text-gray-400 text-left mb-4">15:00 (20 April 2024)</h2> --}}
  <div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
    <img class="rounded-xl" src="{{ $data->poster }}" alt="" style="width: 250px" />
    <div class="flex flex-col px-5">
      <div class="">
        <h2 class="text-2xl font-semibold text-left text-black mb-2">{{ $data->title }}</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500 mb-2">{{ $data->genre }}</h2>
        {{-- <h2 class="text-sm font-normal text-left text-indigo-500  mb-1"><i class="fa-solid fa-video mr-2"></i></i></span></h2> --}}
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>{{ $data->duration }} min</h2>
      </div>
      <div>
        <h2 class="text-md font-semibold text-left text-black mb-1">Details</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Producer : {{ $data->producer }} </h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1">Director : {{ $data->director }} </h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-3">Cast : {{ $data->cast }}</h2>
        <h2 class="text-xs font-normal text-justify text-gray-500  mb-1">{{ $data->synopsis }}</h2>
      </div>
    </div>
  </div>

  <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8 mt-10">
    <form action="">
      <div class="m-5">
        <div class="flex justify-center">
          <select id="locations" class="text-white  bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center mb-5">
            <option value="d" class="text-sm text-gray-700 bg-white" selected>All Cinemas</option>
            @foreach ($location as $item)
              <option value="{{$item->id}}" class="text-sm text-gray-700 bg-white">{{$item->location}}</option>
            @endforeach
          </select>
        </div>
        @foreach ($studios as $studio)
          <div class="flex flex-col">
            <div class="flex flex-col bg-gray-100 p-5 rounded-xl border border-gray-200 mb-5">
              <div class="flex border-b border-gray-300 justify-between mb-5 pb-2">
                <h2 class="text-md font-semibold text-left text-black mr-5">
                  <i class="fa-solid fa-location-dot mr-2 text-indigo-500"></i>{{ $studio->name }}
                </h2>
                <h2 class="text-md font-semibold text-left text-black mr-5">
                  <i class="fa-solid fa-money-bill-wave mr-2 text-indigo-500"></i>
                  Rp {{ number_format($data->screening->firstWhere('studioID', $studio->id)->ticketprice, 0, ',', '.') }}
                </h2>
              </div>
              <div class="flex flex-row">
                @foreach ($screeningsByStudio[$studio->id] ?? [] as $screening)
                    <form action="{{ route('order.showseats') }}" method="post">
                      @csrf
                        <input type="hidden" name="screening_id" value="{{ $screening->id}}">
                        <input type="hidden" name="movie_id" value="{{ $screening->movieID}}">
                        <button type="submit" class="tracking-wide font-semibold border-2 border-indigo-500 text-black px-2 w-auto py-2 rounded-lg transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-2">
                            {{ $screening->starttime }}
                        </button>
                    </form>
                @endforeach
              </div>
            </div>
          </div>
        @endforeach
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