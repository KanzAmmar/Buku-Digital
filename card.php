<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- bootstrap 5 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/font-awesome.min.css">
    <title>belajar_crud</title>
</head>
<body>
                <!-- Sidebar -->
                <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
                    <h3 class="w3-bar-item">Menu</h3>
                    <a href="#" class="w3-bar-item w3-button">Discover</a>
                    <a href="#" class="w3-bar-item w3-button">Browse</a>
                    <a href="#" class="w3-bar-item w3-button">Wishlist</a>
                </div>

                <!-- Page Content -->
                <div style="margin-left:15%">

                <div class="w3-container w3-light-grey">


                <div class="w3-row mt-2">
                <div class="w3-third w3-container">
                    <h2 class="mt-2">Buku Digital</h2> 
                </div>
                <div class="w3-third w3-container mt-2">
                <form class="d-flex">
                   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success" type="submit">Search</button>
                </form>     
                </div>
                <div class="w3-third w3-container">
                   <button class="w3-button w3-tiny" style="width:80%">
                   <img src="img/person6.jpg" class="w3-circle" alt="Norway" style="width:15%">
                   </button>
                  
                </div>

                </div>
                </div>

                

                <!-- gambar -->
                <div class="container mt-5 align-middle">

                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                       <div class="carousel-item active" data-bs-interval="2000">
                          <img src="img/person3.jpg" class="rounded mx-auto d-block w-50" alt="...">
                       </div>
                       <div class="carousel-item" data-bs-interval="2000">
                         <img src="img/person4.jpg" class="rounded mx-auto d-block w-50" alt="...">
                       </div>
                       <div class="carousel-item" data-bs-interval="2000">
                         <img src="img/person2.jpg" class="rounded mx-auto d-block w-50" alt="...">
                       </div>
                  </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>

                </div>
                <!-- end gambar -->



                  <div class="w3-container">
                  <h1>Judul Buku</h1>
                  <p>Ranting</p>
                  <p>Ketagori</p>
                  <p>Sinopsis</p>

                  
                </div>
                </div>
                </div>


</body>
</html>