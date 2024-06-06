@extends('user_site.userLayout')
@section('content') 
<div class="px-40 py-10 bg-gray-100 container mx-auto">
  <h2 class="text-xl font-bold text-indigo-500 text-left mb-2">Detail Seat</h2>
  <div class="container w-full flex flex-row bg-white rounded-xl  border border-gray-200 p-8">
    <div class="flex flex-col px-5">
      <div class="">
        <h2 class="text-2xl font-semibold text-left text-black mb-2">{{ $movie->title }}</h2>
        {{-- <h2 class="text-sm font-normal text-left text-indigo-500  mb-1"><i class="fa-solid fa-video mr-2"></i></i></span></h2> --}}
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-4"><span><i class="fa-solid fa-clock mr-2"></i></span>{{ $startTimeFormatted }} - {{$endTimeFormatted}} ({{ $movie->duration }} min)</h2>
        <h2 class="text-sm font-normal text-left text-indigo-500  mb-1"><i class="fa-solid fa-video mr-2"></i>Studio {{ $screening->studio->name }} </h2>
      </div>
    </div>
  </div>
  <div class="container w-full flex flex-col bg-white rounded-xl  border border-gray-200 p-8 mt-10">
    <h2 class="text-2xl font-semibold text-center text-black mb-10">Select your seats</h2>
      <div class="flex justify-center items-center">
        <div class="flex flex-col gap-4">
            <div class="flex items-center justify-center">
                <div class="flex flex-wrap gap-4 items-center justify-center mx-10 w-[50%]">
                    @foreach ($seats as $item)
                        <div id="seat_{{ $item->id }}" class="seat-div" style="background-color: gray; width: 2rem; height: 2rem; font-weight: 600; display: flex; justify-content: center; align-items: center; border-radius: 0.25rem; cursor: pointer;" onclick="toggleSeatColor(this)">
                            {{ $item->seatrow }}{{ $item->seatnumber }}
                            <input type="hidden" name="{{ $item->id }}" value="{{ $item->id }}">
                        </div>
                    @endforeach
                </div>
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
        <form id="seatForm" action="{{ route('order.checkout')}}" method="POST">
            @csrf
            <input type="hidden" name="seats" id="seatIdsInput">
            <input type="hidden" name="screeningID" value="{{$screening->id}}">
            <input type="hidden" name="ticketprice" value="{{$screening->ticketprice}}">
            <button type="submit" name="login" class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-auto py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none px-5">Proceed to Checkout</button>
        </form> 
      </div>
    </form>
  </div>
  </div>
</div>

<script>
    let seatschosen = [];
    function toggleSeatColor(div) {
        let seatId = div.id.replace('seat_', ''); // Extract the seat ID from the div's ID

        if (div.style.backgroundColor === 'gray') {
            div.style.backgroundColor = 'green';
            seatschosen.push(seatId); // Insert seat ID into seatschosen array
        } else {
            div.style.backgroundColor = 'gray';
            let index = seatschosen.indexOf(seatId);
            if (index !== -1) {
                seatschosen.splice(index, 1); // Remove seat ID from seatschosen array
            }
        }

        console.log(seatschosen); // Output the seatschosen array (for testing)
        document.getElementById('seatIdsInput').value = seatschosen.join(',');
    }
</script>

@endsection