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

      <div class="container-fluid p-5 m-5 align-content-center">
      <form>
          <div class="form-row">
            <div class="form-group col-lg-6 col-6 col-xxl-6 col-md-6">
              <label for="inputEmail4">Email</label>
              <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-lg-6 col-6 col-xxl-6 col-md-6">
              <label for="inputPassword4">Password</label>
              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
          </div>
          <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>
          <div class="form-group">
            <label for="inputAddress2">Address 2</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
          </div>
          <div class="form-row">
            <div class="form-group col-md-6">
              <label for="inputCity">City</label>
              <input type="text" class="form-control" id="inputCity">
            </div>
            <div class="form-group col-md-4">
              <label for="inputState">State</label>
              <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="form-group col-md-2">
              <label for="inputZip">Zip</label>
              <input type="text" class="form-control" id="inputZip">
            </div>
          </div>
          <div class="form-group">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck">
              <label class="form-check-label" for="gridCheck">
                Check me out
              </label>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
      </div>
  </div>
</div>


  <script src="js/bootstrap.js"></script>
</body>
</html>