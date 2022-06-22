<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site of designers of home.">
  <meta name="author" content="Timo Ruiz">
  <meta name="keywords" content="home, design, interior">
  <title>Home Design</title>
  <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="./images/logo.png" width="45" height="45" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-expanded="false" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="#" class="nav-link active">Home</a>
          </li>
         <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-4" data-bs-toggle="dropdown" aria-expanded="false">Designs</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown-4">
              <li><a href="ecological.php" class="dropdown-item">Ecological</a></li>
              <li><a href="#" class="dropdown-item">Modern</a></li>
              <li><a href="#" class="dropdown-item">Classic</a></li>
              <li><a href="#" class="dropdown-item">Younger</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="bg-light p-2 m-3 rounded">

      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/carousel1.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carousel2.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/carousel3.jpg" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <h1>Home Design Interior by Timo</h1>
      <p class="lead">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit consequuntur assumenda adipisci voluptates id est omnis rerum libero veritatis necessitatibus dolor eaque non debitis aliquid a, dolore expedita animi? Exercitationem?
      </p>
      <div class="row p-4 m-2">
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img src="./images/logo.png" class="card-img-top" alt="logo">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img src="./images/logo.png" class="card-img-top" alt="logo">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
          <img src="./images/logo.png" class="card-img-top" alt="logo">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>

    <div class="container col-xxl-8 px-4 py-5">
      <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
          <img src="./images/carousel1.jpg" alt="Interior design" class="d-block mx-lg-auto img-fluid" width="700" height="500" loading="lazy" />
        </div>
        <div class="col-lg-6">
          <h1 class="display-5 fw-bold lh-1 mb-3">Very Cheap Design</h1>
          <p class="lead">Quickly Design and customize your design of your home.
            The world must be known how to design your live.
            We are your best option at the best price.
          </p>
          <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button class="btn btn-primary btn-lg px-4 me-md-2">Buy</button>
            <button class="btn btn-outline-success btn-lg px-4 me-md-2">More Information</button>
          </div>
        </div>
      </div>
    </div>

    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg py-5">
        <div class="col-lg-6 text-center text-lg-start">
          <h1 class="display-4 fw-bold lh-1 mb-3">We are the most beautiful.</h1>
          <p class="col-lg-10 fs-4">Your house will be the most beautiful of the world, 
            of the town and the country. We will make you feel the best sensation when 
            you arrive at your house as well as the guests you have. </p>
        </div>
        <div class="col-10 col-sm-8 col-lg-6">
          <iframe width="500" height="315" src="https://www.youtube.com/embed/zE-a5eqvlv8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>

    <div class="b-example-divider"></div>
    <div class="bg-dark text-secondary px-4 py-5 text-center">
      <div class="py-5">
        <h1 class="display-5 fw-bold text-white">The best option.</h1>
        <div class="col-lg-6 mx-auto">
          <p class="fs-5 mb-4">We are the best option because we use the best materials in 
            construction and the best design by professionals.
            We know you want the best and we give it to you.
          </p>
          <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
            <button class="btn btn-outline-info btn-lg px-4 me-sm-3 fw-bold">Contact Me</button>
            <button class="btn btn-outline-light btn-lg px-4 ">Show More Now</button>
          </div>
        </div>
      </div>
    </div>

  
  </div>
  </div>

  <nav class="navbar fixed-bottom navbar-expand-sm navbar-dark bg-dark">
     <div class="container-fluid">
      <a href="#" class="navbar-brand">
        <img src="./images/logo.png" width="45" height="45" alt="logo">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-expanded="false" aria-controls="navbarCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a href="#" class="nav-link active">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-4" data-bs-toggle="dropdown" aria-expanded="false">Designs</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown-4">
              <li><a href="#" class="dropdown-item">Ecological</a></li>
              <li><a href="#" class="dropdown-item">Modern</a></li>
              <li><a href="#" class="dropdown-item">Classic</a></li>
              <li><a href="#" class="dropdown-item">Younger</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <script src="js/bootstrap.js"></script>
</body>
</html>