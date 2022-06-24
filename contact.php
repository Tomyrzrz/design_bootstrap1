<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site of designers of home.">
  <meta name="author" content="Timo Ruiz">
  <meta name="keywords" content="home, design, interior">
  <title>Ecological Design</title>
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
            <a href="index.php" class="nav-link active">Home</a>
          </li>
         <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" id="dropdown-4" data-bs-toggle="dropdown" aria-expanded="false">Designs</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown-4">
              <li><a href="ecological.php" class="dropdown-item">Ecological</a></li>
              <li><a href="modern.php" class="dropdown-item">Modern</a></li>
              <li><a href="classic.php" class="dropdown-item">Classic</a></li>
              <li><a href="jounger.php" class="dropdown-item">Younger</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="projects.php" class="nav-link">Projects</a>
          </li>
          <li class="nav-item">
            <a href="about.php" class="nav-link">About</a>
          </li>
          <li class="nav-item">
            <a href="contact.php" class="nav-link">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
 <div class="container">
    <div class="bg-light p-2 m-3 rounded">

      <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
          <h1 class="display-4 fw-normal">Contact Me</h1>
          <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your 
            marketing efforts with this example based on Apple’s marketing pages.</p>
          <a class="btn btn-outline-secondary" href="#">Select this Design soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
      </div>

      <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Send me a Message</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingName" placeholder="Password">
            <label for="floatingName">Name</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingSubject" placeholder="Password">
            <label for="floatingSubject">Subject</label>
          </div>
          <div class="form-floating mb-3">
            <input type="url" class="form-control" id="floatingSite" placeholder="Password">
            <label for="floatingSite">Site</label>
          </div>
          <div class="form-floating mb-3">
            <input type="text" class="form-control text-body" id="floatingMessage" placeholder="Password">
            <label for="floatingMessage">Message</label>
          </div>
          <button class="w-100 btn btn-lg btn-primary" type="submit">Send Message</button>
          <hr class="my-4">
          <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>
  </div>
</div>


  <script src="js/bootstrap.js"></script>
</body>
</html>