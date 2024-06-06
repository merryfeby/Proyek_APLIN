@extends('user_site.userLayout')
@section('content') 
<div class="p-10 mb-10 bg-gray-100 flex flex-col justify-center items-center">
  <h2 class="text-4xl font-bold text-indigo-500 text-center mt-10 mb-8">Movies</h2>
  <div class="mb-5">
    <form id="searchForm" action="{{ route('movies.search')}}" method="post">
      @csrf
      <div class="flex flex-row mb-5">
        <input type="text" name="username" id="username" class="text-xs w-[30rem] px-4 py-2.5 rounded-l-lg font-medium bg-white border border-gray-200 placeholder-gray-400 focus:outline-none focus:border-gray-400 focus:bg-white" placeholder="Search your favorite movie here">
        <button type="submit" name="search" class="text-sm font-normal bg-indigo-500 text-gray-100 w-20 px-4 py-2.5 rounded-r-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center justify-center focus:shadow-outline focus:outline-none mr-4">Search</button>
      </div>
    </form>
  </div>
  <div id="searchResults" class="flex justify-center items-center gap-6 flex-wrap w-[60%]">
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

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#searchForm').on('submit', function(event) {
            event.preventDefault(); 

            $.ajax({
                url: "{{ route('movies.search') }}",
                method: "POST",
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    $('#searchResults').html('');

                    if (response.movies.length > 0) {
                        response.movies.forEach(function(movie) {
                            $('#searchResults').append(`
                                <form action="{{ url('movies/${movie.id}/detail') }}" method="get">
                                    @csrf
                                    <button class="container w-44 bg-white rounded-xl shadow-lg p-3 transition duration-300 hover:border-2 hover:border-indigo-400">
                                        <img class="rounded-xl w-40 h-60 object-cover" src="${movie.poster}" alt="Movie Poster" />
                                        <div class="text-center my-2">
                                            <h2 class="text-md font-semibold text-black overflow-hidden text-ellipsis whitespace-nowrap" style="height: 1.5em;">${movie.title}</h2>
                                        </div>
                                        <div class="text-center my-2">
                                            <h2 class="text-xs font-normal text-indigo-500">${movie.genre}</h2>
                                        </div>
                                        <div class="text-center my-2">
                                            <h2 class="text-xs font-normal text-indigo-500"><span><i class="fa-solid fa-clock mr-2"></i></span>${movie.duration} min</h2>
                                        </div>
                                    </button>
                                </form>
                            `);
                        });
                    } else {
                        $('#searchResults').append('<div class="font-bold">No movies found</div>');
                    }
                },
                error: function(xhr, status, error) {
                    console.error(error);
                    $('#searchResults').html('<div>An error occurred. Please try again.</div>');
                }
            });
        });
    });
</script>
@endsection
