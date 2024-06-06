<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b9b5e10605.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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
                    <a href="/listfilm" class="sidebar-link">
                        <i class="fa-solid fa-video"></i>
                        <span>List movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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

            <div>
                <h1>Add New Offer</h1>
                <div class="register">
                    <form action="/addoffer/add" method="post" id="offer">
                        @csrf
                        <p>Offer code: <input type="text" name="code" id="code"  class="form-control w-25" required></p>
                        <p>Discount: <input type="number" name="discount" id="discount" class="form-control w-25" required></p>
                        <p>Maximal Transaction: <input type="number" name="max" id="max" class="form-control w-25" required></p>
                        <input type="hidden" name="id" id="id">
                        <br>
                        <button type="submit" class="btn btn-primary" id="subs">Add</button>
                    </form>
                </div>
            </div>
            <br>
            <table id="offers-table" class="table table-hover table-bordered">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Offer Code</th>
                    <th>Discount</th>
                    <th>Maximal Transaction</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($offer as $item)                  
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['code']}}</td>
                        <td>{{$item['discount']}}%</td>
                        <td>Rp. {{$item['max_trans']}}</td>
                        <td>{{$item['status']}}</td>
                        <td class="d-flex justify-content-center"><button type="button" class="btn btn-secondary change-btn" >Change</button></td>
                        <td>
                            <form action="/addoffer/delete" method="POST" class="d-flex justify-content-center">
                                @csrf
                                <input type="hidden" name="id" value="{{$item['id']}}" id="id">
                                <button type="submit" class="btn btn-danger delete-btn" >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script> --}}
    
    <script>
        $(document).ready(function() {
            $('#offers-table').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,           
            });
        });


        $('.change-btn').click(function() {
            var row = $(this).closest('tr');
            var offerId = row.find('td:eq(0)').text();
            var code = row.find('td:eq(1)').text();
            var discount = row.find('td:eq(2)').text().replace('%', ''); 
            var max = row.find('td:eq(3)').text().replace('Rp. ', '');

            $('#id').val(offerId);
            $('#code').val(code);
            $('#discount').val(parseInt(discount));
            $('#max').val(parseInt(max));
            $('#subs').html("Update")
            $('#offer').attr('action', '/addoffer/update'); 
        });

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


    </script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
