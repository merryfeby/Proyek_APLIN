<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" /> -->
    <script src="https://kit.fontawesome.com/b9b5e10605.js" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="{{asset('css/style.css') }}">

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
                    <a href="Admin.html" class="sidebar-link">
                        <i class="fa-solid fa-user-tie"></i>
                        <span>Profile</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="BeliFilm.html" class="sidebar-link">
                        <i class="fa-solid fa-film"></i>
                        <span>Beli Film</span>
                    </a>
                </li>
                
                <li class="sidebar-item">
                    <a href="#" class="sidebar-link">
                        <i class="fa-solid fa-users"></i>
                        <span>Atur Karyawan</span>
                    </a>
                </li>
                
            </ul>
            <div class="sidebar-footer">
                <a href="Karyawan.html" class="sidebar-link">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>Logout</span>
                </a>
            </div>
        </aside>
        <div class="main p-3">
            <div>
                <h1>Add New Employee</h1>
                <div class="register">
                    <p>Name: <input type="text"></p>
                    <p>Username: <input type="text"></p>
                    <p>Password: <input type="text"></p>
                    <button type="button" class="btn btn-primary">Register</button>
                </div>
            </div>
            <br>
            <table class="table table-hover ">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Status</th>
                    <th>Change Status</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Darren</td>
                        <td>Darrenxyz</td>
                        <td>Darrenxyz</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-secondary">Change</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Darren2</td>
                        <td>Darrenxyz2</td>
                        <td>Darrenxyz2</td>
                        <td>1</td>
                        <td><button type="button" class="btn btn-secondary">Change</button></td>
                        <td><button type="button" class="btn btn-danger">Delete</button></td>
                    </tr>
                </tbody>
              </table>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <!-- <script src="script.js"></script> -->
    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>