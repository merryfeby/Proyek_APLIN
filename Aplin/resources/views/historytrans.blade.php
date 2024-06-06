<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">

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
                    <a href="/addoffer" class="sidebar-link">
                        <i class="fa-solid fa-tags"></i>
                        <span>Add Offer</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
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
            <h1>Transaction History</h1>

            <table id="transactionTable" class="table table-hover table-bordered">  
                <thead>
                    <tr>
                        <th>ID Nota</th>
                        <th>ID Layar</th>
                        <th>ID Promo</th>
                        <th>Customer</th>
                        <th>Employee</th>
                        <th>Subtotal</th>
                        <th>Grand total</th>
                        <th>Status</th>
                        <th>Date of Purchase</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($history as $item)
                        <tr>
                            <td>{{$item['orderNumber']}}</td>
                            <td>{{$item['screeningID']}}</td>
                            <td>{{$item['offerID'] ?? "Null"}}</td>
                            <td>{{$item['customer']}}</td>
                            <td>{{$item['employee']}}</td>
                            <td>{{$item['subtotal']}}</td>
                            <td>{{$item['grandtotal']}}</td>
                            <td>{{$item['status']}}</td>
                            <td>{{$item['created_at']}}</td>
                        </tr>              
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>

    <script src="{{ asset('assets/js/script.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#transactionTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            }); 
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
                    alert('Logout failed');
                }
            });
        });

    </script>
</body>

</html>
