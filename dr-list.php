<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">

    <title>Hello, world!</title>
  </head>
  <body>
    

    <!-- topbar -->
    <section class="topBar">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
                <div class="container-fluid">
                  <a class="navbar-brand" href="index.html">
                    <img src="img/logo.png" class="img-fluid logo" alt="">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="dr-list.php">
                            Doctor List
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="patient-list.php">
                            Patient List
                        </a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Booking
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li><a class="dropdown-item" href="checkup.html">Regular Checkup</a></li>
                          <li><a class="dropdown-item" href="admit.html">Admit</a></li>
                        </ul>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="contact.html">
                         Contact Us
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="login-signup.html">
                         Login/Signup
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-dark" href="search.html">
                         <i class="fa fa-search"></i>
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
        </div>
    </section>
    <!-- topbar -->


    <!-- cards -->
    <section class="py-4">
        <div class="container">
            <div class="text-center">
                <h3 class="fw-bold mb-4">
                    Doctors
                </h3>
            </div>
            <div class="row mt-3">
           
            <?php
            require('php/config.php');
            $sql = "SELECT * FROM doctor";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-md-6 p-3">';
                echo '<div class="card border-0 shadow rounded">';
                echo '<div class="card-body p-4">';
                echo '<div class="row">';
                echo '<div class="col-md-3 p-2 m-auto">';
                echo '<img src="img/avatar.svg" class="img-fluid avatar" alt="">';
                echo '</div>';
                echo '<div class="col-md-9 ps-5 p-2 m-auto">';
                echo '<h4 class="fw-bold">Name: '.$row["name"].'</h4>';
                echo '<h6 class="fw-bold text-success mb-4">Specialist In: '.$row["specialist_in"].'</h6>';
                echo '<p class="">Available From: '.$row["fromm"].'- To: '.$row["too"].'</p>';
                echo '<a class="text-danger" href="tel:'.$row["contact"].'">Make a Call</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            } else {
            echo "0 results";
            }
            ?>
            </div>
        </div>
    </section>
    <!-- cards -->
    

    <!-- footer  -->
    <section class="footer py-4">
        <div class="container">
            <div class="card border-0 bg-dark">
                <div class="card-body p-4">
                    <div class="text-center">
                        <a href="" class="">
                            <img src="img/logo.png" class="img-fluid logo" alt="">
                        </a>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Explore Services
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Checkup
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        Admit
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Useful Links
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Contact Us
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                       <i class="fab fa-facebook"></i> Facebook
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                       <i class="fab fa-twitter"></i> Twitter
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                      <i class="fab fa-youtube"></i>  Youtube
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Listings
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li>
                                    <a href="" class="text-white">
                                        Doctor List
                                    </a>
                                </li>
                                <li>
                                    <a href="" class="text-white">
                                        Patient List
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3 p-3">
                            <p class="fs-20 text-white fw-bold">
                                Location
                            </p>
                            <ul class="list-unstyled m-0 p-0">
                                <li class="text-white">
                                    Patuakhali Science & Technology University
                                </li>
                                <li class="text-white">
                                   Dumki, Patuakhali
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer  -->


    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- main js -->
    <script src="js/main.js"></script>
  </body>
</html>