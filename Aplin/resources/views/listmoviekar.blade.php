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
                    <a href="#" class="sidebar-link">
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
                <a href="#" class="sidebar-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
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
                <h1>Edit Screening</h1>
                <div class="register ">
                    <form action="/editscreening" method="post" id="formedit" >
                        @csrf
                        <label for="movieid" class="form-label">Movie ID</label>
                        <select class="form-control w-25" name="movieID" id="movieID" disabled>
                            @foreach($listmovie as $movie)
                                <option value="{{ $movie->movie['id'] }}">{{ $movie->movie['id'] }}</option>
                            @endforeach
                        </select>

                        <label for="studioid" class="form-label">Studio ID</label>
                        <select name="studioID" id="studioID" class="form-control w-25" disabled>
                            @foreach($studio as $studio)
                                <option value="{{ $studio['id'] }}">{{ $studio['id'] }}</option>
                            @endforeach
                        </select>

                        <label for="tayang" class="form-label">Waktu Tayang</label>
                        <input type="datetime-local" class="form-control w-25 mb-3" name="tayang" id="tayang" disabled>
                                                
                        <button type="submit" class="btn btn-primary" id="editnow" disabled>Edit</button>

                        <input type="hidden" name="id" id="id">
                    </form>
                </div>
            </div>
            
            <h1>List Movie</h1>
            <table class="table table-hover table-bordered " id="movies-table">
                <thead>
                  <tr>
                    <th>Screening ID</th>
                    <th>Studio ID</th>
                    <th>Movie ID</th>
                    <th>Title</th>
                    <th>Show time</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($listmovie as $movie)
                    <tr>
                        <td>{{ $movie['id'] }}</td>
                        <td>{{ $movie->studio['id'] }}</td>
                        <td>{{ $movie->movie['id'] }}</td>
                        <td>{{ $movie->movie['title'] }}</td>
                        <td>{{ $movie['starttime'] }}</td>
                        <td class="align-middle"><button type="button" class="btn btn-secondary changebtn" id="changebtn">Change</button></td>
                        <td class="align-middle">
                            <form action="/deletescreening" method="post">
                                @csrf
                                <input type="hidden" name="id" value="{{ $movie['id'] }}">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
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
            var screenid = row.find('td:eq(0)').text();
            var studioid = row.find('td:eq(1)').text();
            var movieid = row.find('td:eq(2)').text();
            var showtime = row.find('td:eq(4)').text();

            $('#movieID').prop('disabled', false);
            $('#studioID').prop('disabled', false);
            $('#tayang').prop('disabled', false);
            $('#editnow').prop('disabled', false);
            $('#id').val(screenid);
            $('#movieID').val(movieid);
            $('#studioID').val(studioid);
            $('#tayang').val(showtime);
        });
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>