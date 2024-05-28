@extends('user_site.userLayout')
@section('content') 
<div class="p-10 mb-10 bg-gray-100 flex flex-col justify-center items-center">
  <h2 class="text-4xl font-bold text-indigo-500 text-center mt-10 mb-8">Movies</h2>
  <div class="mb-5">
    <div class="flex flex-row mb-5">
      <input type="text" name="username" id="username" class="text-xs w-[30rem] px-4 py-2.5 rounded-l-lg font-medium bg-white border border-gray-200 placeholder-gray-400 focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Search your favorite movie here">
      <button onclick="" type="submit" name="search" class="text-sm font-normal bg-indigo-500 text-gray-100 w-20 px-4  py-2.5 rounded-r-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-4">Search</button>
    </div>
    <div class="flex justify-center">
      <select id="locations" class="text-white  bg-indigo-500 hover:bg-indigo-700 focus:ring-4 focus:ring-indigo-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center mb-5">
        <option value="d" class="text-sm text-gray-700 bg-white" selected>All Genre</option>
        <option value="a" class="text-sm text-gray-700 bg-white">Romance</option>
        <option value="b" class="text-sm text-gray-700 bg-white">Kids</option>
        <option value="c" class="text-sm text-gray-700 bg-white">Kaki 3</option>
      </select>
    </div>
  </div>
  <div class="flex justify-center items-center gap-6 flex-wrap w-[60%]">
    @foreach ($movie as $i)
    <form action="{{ route('movies.detail', ['id' => $i->id]) }}" method="get">
      @csrf
      <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400">
        <img class="rounded-xl w-40 h-60 object-cover" src="{{$i->poster}}" alt="Movie Poster" />
        <div class="text-center my-2">
          <h2 class="text-md font-semibold text-black overflow-hidden text-ellipsis whitespace-nowrap" style="height: 1.5em;">{{$i->title}}</h2>
        </div>
        <div class="text-center my-2">
          <h2 class="text-xs font-normal text-indigo-500">{{$i->genre}}</h2>
        </div>
        <div class="text-center my-2">
          <h2 class="text-xs font-normal text-indigo-500"><span><i class="fa-solid fa-clock mr-2"></i></span>{{$i->duration}} min</h2>
        </div>
      </button>
    </form>
    @endforeach
  </div>
</div>
@endsection