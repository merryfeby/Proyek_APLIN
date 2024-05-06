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
                    <a href="/addmoviekar" class="sidebar-link">
                        <i class="fa-solid fa-film"></i>
                        <span>Add movie</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/listmoviekar" class="sidebar-link">
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
                    <a href="#" class="sidebar-link">
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
            <h1>Transaction History</h1>
            <!-- <div>
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
            </div> -->
            <br>
            <table class="table table-hover ">
                <thead>
                  <tr>
                    <th>ID Nota</th>
                    <th>ID Movie</th>
                    <th>ID Kursi</th>
                    <th>ID Studio</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Date of Purchase</th>
                    <th>Payment Method</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>2</td>
                        <td>5</td>
                        <td>1</td>
                        <td>Rp. 50.000</td>
                        <td>2</td>
                        <td>Rp. 100.000</td>
                        <td>2024-04-29</td>
                        <td>Q-Ris</td>
                        
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>4</td>
                        <td>7</td>
                        <td>3</td>
                        <td>Rp. 40.000</td>
                        <td>2</td>
                        <td>Rp. 80.000</td>
                        <td>2024-04-29</td>
                        <td>Q-Ris</td>                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    

    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>