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
            <h1>List Movie</h1>
            <table class="table table-hover ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Durasi</th>
                    <th>Cast</th>
                    <th>Image</th>
                    <th>Deskripsi</th>
                    <th>Edit</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Godzilla x Kong: The New Empire (2024)</td>
                        <td>115 Minutes</td>
                        <td>Rebecca Hall, Brian Tyree Henry, Dan Stevens</td>
                        <td><img src="{{ asset('assets/img/3f6.jpeg') }}" alt="" srcset="" width="200px" height="300px"></td>
                        <td>The new installment in the Monsterverse puts the mighty Kong and the fearsome Godzilla against a colossal deadly threat hidden within our world that threatens the existence of their species and our very own, as well as diving deep into the mysteries of Skull Island and beyond. Delving straight into the origins of Hollow Earth, this film will explore the ancient Titan battle that brought man and monster together forever.</td>
                        <td><button type="button" class="btn btn-secondary">Change</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
              </table>
              <br>
              <div class="mt-5">
                  <h1>Edit Movie</h1>
                  <div class="register">
                      <p>Judul: <input type="text"></p>
                      <p>Durasi: <input type="number"></p>
                      <p>Cast: <input type="text"></p>
                      <p>Image : <input type="file"></p>
                      <p>Details: <textarea name="" id="" cols="30" rows="3"></textarea></p>
              
                      <button type="button" class="btn btn-primary">Edit</button>
                  </div>
              </div>
        </div>

    </div>
    
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>