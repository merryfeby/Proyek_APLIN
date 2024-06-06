<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /> -->
    <script src="https://kit.fontawesome.com/b9b5e10605.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="fa-solid fa-ticket"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="#">MovieMate</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/profilekaryawan" class="sidebar-link">
                        <i class="fa-solid fa-user"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-film"></i>
                        <span>Add screening</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/listmoviekar" class="sidebar-link">
                        <i class="fa-solid fa-clapperboard"></i>
                        <span>List screening</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/listfilm" class="sidebar-link">
                        <i class="fa-solid fa-video"></i>
                        <span>List movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/addoffer" class="sidebar-link">
                        <i class="fa-solid fa-tags"></i>
                        <span>Add Offer</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="/historytrans" class="sidebar-link">
                        <i class="fa-solid fa-clock-rotate-left"></i>
                        <span>Transaction History</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer">
                <a href="#" id="logout-link" class="sidebar-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
                <form id="logout" action="/logout" method="post" style="display: none;">
                    @csrf
                </form>
            </div>
        </aside>
        <div class="main p-3">

            @if(session('error'))
                <div class="alert alert-danger">
                    <span class="font-medium">{{ session('error') }}</span> Try submitting again.
                </div>
            @endif

            @if(session('success'))
                <div class="alert alert-success">
                    <span class="font-medium">{{ session('success') }}</span>
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <h1>Add Movie</h1>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                  Producer
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                  <li><a class="dropdown-item" href="#">Disney</a></li>
                  <li><a class="dropdown-item" href="#">FOX</a></li>
                  <li><a class="dropdown-item" href="#">MCU</a></li>
                </ul>
              </div>
              <br>
              <div class="container">
                <div class="d-flex flex-row justify-content-evenly flex-wrap">
                    @foreach ($listmovie as $item)
                        <div class="card" style="width: 18rem;">
                            <img src="{{ $item['poster'] }}" class="card-img-top" alt="..." >
                            <div class="card-body">
                            <h5 class="card-title">{{$item['title']}}</h5>
                            <p class="card-text">{{$item['synopsis']}}</p>
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#dateTimeModal" movie-id={{$item['id']}}>Add movie</a>
                            </div>
                        </div>       
                    @endforeach
                  </div>
              </div>
        </div> 
    
    </div>

    <!-- Modal -->
    <div class="modal fade" id="dateTimeModal" tabindex="-1" aria-labelledby="dateTimeModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="dateTimeModalLabel">Select Datetime and Studio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="dateTimeForm" action="/addscreening" method="POST">
                        @csrf
                        <input type="hidden" name="movie_id" id="movie_id">
                        <div class="mb-3">
                            <label for="datetime" class="form-label">Date</label>
                            <input type="datetime-local" class="form-control" id="date" name="date" required>
                        </div>
                        <div class="mb-3">
                            <label for="studio" class="form-label">Studio</label>
                            <select class="form-control" id="studio" name="studio" required>
                                @foreach($studio as $studio)
                                    <option value="{{ $studio['id'] }}">{{ $studio['id'] }}</option>
                                @endforeach
                            </select>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" form="dateTimeForm">Add</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $('#logout-link').click(function(event) {
            event.preventDefault();

            $.ajax({
                url: '/logout',
                type: 'POST',
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    window.location.href = '/';
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                    alert('Logout failed. Please try again.');
                }
            });
        });

        var dateTimeModal = document.getElementById('dateTimeModal');
        dateTimeModal.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget;
            var movieId = button.getAttribute('movie-id'); 
            var modalBodyInput = dateTimeModal.querySelector('.modal-body #movie_id');
            modalBodyInput.value = movieId;
        });
    </script>


    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>