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
                        <span>Add movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-clapperboard"></i>
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
            <div class="mb-5">
                <h1>Edit Movie</h1>
                <div class="register">
                    <form action="/editmovie" method="post" id="formedit">
                        <p>Judul : <input type="text" name="judul" id="judul"></p>
                        <p>Durasi : <input type="number" name="durasi" id="durasi"></p>
                        <p>Cast : <input type="text" name="cast" id="cast"></p>
                        <p>Genre : <input type="text" name="genre" id="genre"></p>
                        <p>Producer : <input type="text" name="producer" id="producer"></p>
                        <p>Director : <input type="text" name="director" id="director"></p>
                        <p>Link image : <input type="text" name="img" id="img"></p>
                        <p>Waktu Tayang : <input type="datetime-local" name="tayang" id="tayang"></p>
                        <p>Synopsis : <textarea name="detail" id="detail" cols="30" rows="3"></textarea></p>
                        <input type="hidden" name="id" id="id">
                        
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
                </div>
            </div>
            
            <h1>List Movie</h1>
            <table class="table table-hover table-bordered " id="movies-table">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Duration</th>
                    <th>Cast</th>
                    <th>Producer</th>
                    <th>Director</th>
                    <th>Genre</th>
                    <th>Deskripsi</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($listmovie as $movie)
                    <tr>
                        <td>{{ $movie['id'] }}</td>
                        <td>{{ $movie['title'] }}</td>
                        <td>{{ $movie['duration'] }}</td>
                        <td>{{ $movie['cast'] }}</td>
                        <td>{{ $movie['producer'] }}</td>
                        <td>{{ $movie['director'] }}</td>
                        <td>{{ $movie['genre'] }}</td>
                        <td>{{ $movie['synopsis'] }}</td>
                        <td><img src="{{ $movie['poster'] }}" alt="" srcset="" width="200px" height="300px"></td>
                        <td class="align-middle"><button type="button" class="btn btn-secondary" id="changebtn">Change</button></td>
                        <td class="align-middle"><button type="button" class="btn btn-danger align-middle" id="deletebtn">Delete</button></td>
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

        $('#changebtn').click(function() {
            var row = $(this).closest('tr');
            var offerId = row.find('td:eq(0)').text();
            var title = row.find('td:eq(1)').text();
            var duration = row.find('td:eq(2)').text().replace('%', ''); 
            var cast = row.find('td:eq(3)').text().replace('Rp. ', '');
            var producer = row.find('td:eq(4)').text();
            var director = row.find('td:eq(5)').text();
            var genre = row.find('td:eq(6)').text();
            var synopsis = row.find('td:eq(7)').text();

            $('#id').val(offerId);
            $('#code').val(code);
            $('#discount').val(parseInt(discount));
            $('#max').val(parseInt(max));
            $('#subs').html("Update")
            $('#offer').attr('action', '/addoffer/update'); 
        });
    </script>

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>