@extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">History Ticket</h2>
  <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8">
    {{-- <div class="flex justify-between items-center mb-5">
      <select id="locations" class="text-white  bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2 text-center inline-flex items-center">
        <option value="d" class="text-sm text-gray-700 bg-white" selected>Newest</option>
        <option value="a" class="text-sm text-gray-700 bg-white">Oldest</option>
      </select>
      <h2 class="text-sm font-normal text-gray-400 text-left">Sorted by newest</h2>
    </div> --}}
    <div class="flex flex-col">
      @foreach($orders as $order)
      <div class="flex flex-col bg-gray-100 rounded-xl border border-gray-200 mb-5">
          <div class="flex bg-indigo-500 text-white rounded-t-lg justify-between items-center px-5 py-2">
              <h2 class="text-sm font-semibold text-left">Order ID #{{ $order->orderNumber }}</h2>
              <h2 class="text-xs font-semibold text-left">{{ $order->created_at->format('Y/m/d') }}</h2>
          </div>
          <div class="flex flex-col px-5 py-2 border-gray-300 border-b">
              <h2 class="text-md font-semibold text-left mb-2 text-gray-600">{{ $order->screening->movie->title }}</h2>
              <h2 class="text-sm font-normal text-left text-gray-600"><i class="fa-solid fa-sm fa-location-dot mr-2 text-indigo-500"></i>{{ $order->screening->studio->location->location}}</h2>
              <h2 class="text-sm font-normal text-left text-gray-600"><i class="fa-solid fa-sm fa-clock mr-2 text-indigo-500"></i>{{ $order->screening->studio->name}} • {{ \Carbon\Carbon::parse($order->screening->starttime)->format('H:i') }}</h2>
          </div>
          <div class="flex flex-col px-5 py-2 border-gray-300 border-b">
              <h2 class="text-sm font-semibold text-gray-600 text-left mb-1">Seats</h2>
              @foreach($order->orderDetails as $orderDetail)
              <div class="flex justify-between items-center">
                  <h2 class="text-sm font-normal text-left text-gray-600">{{ $orderDetail->seat->seatrow }}{{ $orderDetail->seat->seatnumber }}</h2>
                  <h2 class="text-sm font-normal text-left text-gray-600">Rp {{ number_format($orderDetail->price, 0, ',', '.')  }}</h2>
              </div>
              @endforeach
          </div>
          <div class="flex flex-col px-5 py-2">
              <div class="flex justify-between items-center">
                  <h2 class="text-sm font-semibold text-gray-600 text-left mb-1">Total</h2>
                  <h2 class="text-sm font-normal text-left text-gray-600">Rp {{ number_format($order->grandtotal, 0, ',', '.')  }}</h2>
              </div>
          </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection