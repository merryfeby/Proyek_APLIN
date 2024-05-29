<?php
    // dd($employee);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
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
                    <a href="/admin" class="sidebar-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/beli" class="sidebar-link">
                        <i class="fa-solid fa-film"></i>
                        <span>Beli Film</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="/karyawan" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Atur Karyawan</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer">
                <a href="/" class="sidebar-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div>
            <h1>Add or Update Employee</h1>
            <div style="max-width: 400px;">
                <form action="/karyawan/insert" method="post">
                    @csrf
                    <div style="margin-bottom: 10px;">
                        <label for="username">Username:</label>
                        <input type="text" id="username" name="username">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="password">Password:</label>
                        <input type="text" id="password" name="password">
                    </div>
                    <div style="margin-bottom: 10px;">
                        <label for="name">Nama:</label>
                        <input type="text" id="name" name="name">
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
            </div>
            <br>
            <table class="table table-hover ">
                <tr>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
                    
            @foreach ($employees as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>{{ $item['username'] }}</td>
                    <td>{{ $item['password'] }}</td>
                    {{-- <td>{{ $item['status'] }}</td> --}}
                    <td>Active</td>
                    <td>
                <form action="/karyawan/update" method="post">
                    @csrf
                    @method('PATCH')
                    <input type="hidden" name="username" value="{{ $item['username'] }}">
                    <input type="text" name="name" placeholder="New Name" class="form-control" required>
                    <input type="text" name="password" placeholder="New Password" class="form-control" required>
                    <button type="submit" class="btn btn-primary mt-1">Update</button>
                </form>
            </td>
            <td>
                <form action="/karyawan/delete" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="username" value="{{ $item['username'] }}">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
            </table>
        </div>
    </div>
    
   
    <!-- <script src="script.js"></script> -->
    <script src="{{ asset('assets/js/script.js') }}"></script>

</body>

</html>