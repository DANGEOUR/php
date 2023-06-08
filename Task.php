<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<style>
    .container {
        width: 50%;
        display: block;
        margin: auto;
    }
    .btn1{
        padding: 11px 30px;
        background-color: green;
        color: black;
        text-decoration: none;
        border-radius: 15px;
        font-weight: bold;
        font-size: 14px;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg bg-dark ">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Dropdown
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled text-white">Disabled</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>


    <div class="container">
        <h2 class="text-center my-5">My PHP Form With Add,Fatch,Updat,Delete</h2>
        <!--  -->
        <form action="/phpshaheer/Task.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">NAME</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="name" autocomplete="off">
                <div id="name" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">EMAIL</label>
                <input type="email" class="form-control" id="email" name="email" id="email" autocomplete="off">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DESIGNATION</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="designation" autocomplete="off">
                <div id="name" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">DEPARTMENT</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="department" autocomplete="off">
                <div id="name" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">CONTACT</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" name="contact" autocomplete="off">
                <div id="name" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" class="btn btn-success">Add RECORDE</button>
            <a href="view.html" class="btn1">View RECORDE</a>
            <a href="update.html" class="btn1">Update RECORDE</a>
            <a href="delete.html" class="btn1">Delete RECORDE</a>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>



    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'task';


    $conn = mysqli_connect($servername, $username, $password, $database);

    if ($conn) {
        // echo "done";
        echo "<br>";
    } else {
        // echo "Wronge";
    }



    $name = $_POST['name'];
    $email = $_POST['email'];
    $designation = $_POST['designation'];
    $department = $_POST['department'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO `task_table` (`S.NO`, `NAME`, `EMAIL`, `DESIGNATION`, `DEPARTMENT`, `CONTACT`) VALUES (NULL, '$name', '$email', '$designation', '$department', '$contact')";
    $query = mysqli_query($conn,$sql);


    ?>




</body>

</html>