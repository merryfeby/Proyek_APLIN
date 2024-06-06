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
    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    
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
                    <a href="/addmoviekar" class="sidebar-link">
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
                    <a href="#" class="sidebar-link">
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
                    <span class="font-medium">{{ session('error') }}</span> try submitting again.
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


            <div class="mb-5">
                <h1>Edit Movie</h1>
                <div class="register ">
                    <form action="/editmovie" method="post" id="formedit" >
                        @csrf

                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control w-25" name="title" id="title" disabled required>

                        <label for="duration" class="form-label">Duration</label>
                        <input type="text" class="form-control w-25" name="duration" id="duration" disabled required>

                        <label for="poster" class="form-label">Link poster</label>
                        <input type="text" class="form-control w-25" name="poster" id="poster" disabled required>
                        
                        <label for="synopsis" class="form-label">Synopsis</label>
                        <textarea class="form-control w-25 mb-3" name="synopsis" id="synopsis"  disabled required></textarea>
                        
                        <button type="submit" class="btn btn-primary click" disabled>Edit</button>

                        <input type="hidden" name="id" id="id">
                    </form>
                </div>
            </div>
            
            <h1>List Movie</h1>
            <table class="table table-hover table-bordered " id="movies-table">
                <thead>
                  <tr>
                    <th>Movie ID</th>
                    <th>Title</th>
                    <th>Duration</th>
                    <th>Poster</th>
                    <th>Synopsis</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($movie as $movie)
                    <tr>
                        <td>{{ $movie['id'] }}</td>
                        <td>{{ $movie['title'] }}</td>
                        <td>{{ $movie['duration'] }}</td>
                        <td><img src="{{$movie['poster']}}" alt="Not Found" srcset="" width="200" height="280"></td>
                        <td>{{ $movie['synopsis'] }}</td>
                        <td class="align-middle"><button type="button" class="btn btn-secondary changebtn" id="changebtn">Change</button></td>
                        <td class="align-middle">
                            <form action="/deletefilm" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $movie['id'] }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                    </tr>
                    @endforeach
                </tbody>
              </table>
              <br>
              
        </div>

    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#movies-table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,           
            });
        });

        $('.changebtn').click(function() {
            var row = $(this).closest('tr');
            var movieid = row.find('td:eq(0)').text();
            var title = row.find('td:eq(1)').text();
            var duration = row.find('td:eq(2)').text();
            var poster = row.find('img').attr('src');
            var synopsis = row.find('td:eq(4)').text();

            $('#title').prop('disabled', false);
            $('#duration').prop('disabled', false);
            $('#poster').prop('disabled', false);
            $('#synopsis').prop('disabled', false);
            $('.click').prop('disabled', false);

            $('#id').val(movieid);
            $('#title').val(title);
            $('#duration').val(duration);
            $('#poster').val(poster);
            $('#synopsis').val(synopsis);

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
                    alert('Logout failed.');
                }
            });
        });

        });
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>