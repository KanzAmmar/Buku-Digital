<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

     <!-- bootstrap 5 -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4e7412f975.js" crossorigin="anonymous"></script>
    <title>belajar_crud</title>

    <style>
        .slideshow {
            display: flex;
            overflow-x: auto;
            }
        
            .slideshow img {
            width: auto;
            height: 200px;
            object-fit: cover;
            margin-right: 10px;
            }
    </style>

</head>
<body>
                <!-- Sidebar -->
                <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:15%">
                    <h3 class="">
                        Menu
                    </h3>
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
                              <button  button class="btn btn-outline-success" type="submit">Search</button>
                          </form>     
                        </div>
                        <div class="w3-third w3-container">
                            <button class="w3-button w3-tiny" style="width: 60%">
                              <img src="img/images1.jpg" class="w3-circle" alt="Norway" style="width:15%">
                            </button>
                        </div>
                    </div>
                  </div>
                <!-- gambar -->
                <div class="container align-middle">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                  <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                          <img src="img/images1.jpg" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                          <img src="img/images1.jpg" class="rounded mx-auto d-block w-50" alt="...">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                          <img src="img/images1.jpg" class="rounded mx-auto d-block w-50" alt="...">
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
                <div class="w3-container mt-3">
                    <nav class="navbar navbar-light mb-3" style="background-color: #e3f2fd;">
                      <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Rekomendasi buku buat kamu</span>
                      </div>
                    </nav>
                    <div class="container">
                      <!-- coba slide gambar -->
                      <div class="slideshow">
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                      </div>
                      <!-- END coba slide gambar -->
                    </div>
                    <nav class="navbar navbar-light mb-3 mt-3" style="background-color: #e3f2fd;">
                      <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">History</span>
                      </div>
                    </nav>
                    <div class="container">
                      <!-- coba slide gambar -->
                      <div class="slideshow">
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                        </div>
                        <!-- END coba slide gambar -->
                    </div>
                    <nav class="navbar navbar-light mb-3 mt-3" style="background-color: #e3f2fd;">
                      <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Action</span>
                      </div>
                    </nav>
                    <div class="container">
                      <!-- coba slide gambar -->
                      <div class="slideshow">
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                        </div>
                        <!-- END coba slide gambar -->
                    </div>
                    <nav class="navbar navbar-light mb-3 mt-3" style="background-color: #e3f2fd;">
                      <div class="container-fluid">
                        <span class="navbar-brand mb-0 h1">Komedi</span>
                      </div>
                    </nav>
                    <div class="container">
                      <!-- coba slide gambar -->
                      <div class="slideshow">
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                          <div class="col">
                            <img src="img/images1.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h5 class="card-title">Card title</h5>
                              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                              <a href="#" class="btn btn-primary">Go somewhere</a>
                              <span><a href="#" type="button" class="btn btn-primary">
                                <i class="fa-sharp fa-solid fa-heart"></i>
                              </a></span>
                            </div>
                          </div>
                        </div>
                        <!-- END coba slide gambar -->
                    </div>
                </div>
              </div>
            </div>
</body>
</html>