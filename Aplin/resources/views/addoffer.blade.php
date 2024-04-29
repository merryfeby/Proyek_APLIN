<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /> -->
    <script src="https://kit.fontawesome.com/b9b5e10605.js" crossorigin="anonymous"></script>

    <link href="/bootstrap-5.2.3-dist/css/bootstrap.css" rel="stylesheet">
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
                    <a href="/karyawan" class="sidebar-link">
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
            <div>
                <h1>Add New Offer</h1>
                <div class="register">
                    <p>Offer code: <input type="text"></p>
                    <p>Discount: <input type="number"></p>
                    <p>Maximal Transaction: <input type="number"></p>
                    <p>Expired Date: <input type="date"></p>
                    <p>Details: <textarea name="" id="" cols="30" rows="3"></textarea></p>
                    <br>
                    <button type="button" class="btn btn-primary">Add</button>
                </div>
            </div>
            <br>
            <table class="table table-hover ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Offer Code</th>
                    <th>Discount</th>
                    <th>Maximal Transaction</th>
                    <th>Status</th>
                    <th>Expired Date</th>
                    <th>Detail</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>PM2024</td>
                        <td>20%</td>
                        <td>Rp.100.000</td>
                        <td>1</td>
                        <td>2024-06-17</td>
                        <td>Hanya berlaku untuk kota Surabaya</td>
                        <td><button type="button" class="btn btn-secondary">Change</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>PP290</td>
                        <td>20%</td>
                        <td>Rp.100.000</td>
                        <td>1</td>
                        <td>2024-06-17</td>
                        <td>Hanya berlaku untuk kota Surabaya</td>
                        <td><button type="button" class="btn btn-secondary">Change</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    
    <script src="/bootstrap-5.2.3-dist/js/bootstrap.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>