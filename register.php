<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site of designers of home.">
  <meta name="author" content="Timo Ruiz">
  <meta name="keywords" content="home, design, interior">
  <title>LogUp Design</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/signin.css">
  <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      body{
        background-image: url("images/carousel1.jpg");
        background-repeat: no-repeat;
        background-size: 100% 100%;
      }


      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<body class="text-center">    
<main class="form-signin2">
  <form>
    <img class="mb-4" src="./images/register.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-white">Please SignUp</h1>

    <div class="row">
      <div class="form-floating col-6 mb-2">
        <input type="text" name="FistName" required class="form-control" id="floatingInputFN" placeholder="Lopez">
        <label for="floatingInputFN">First Name</label>
      </div>
      
      <div class="form-floating col-6 mb-2">
        <input type="text" name="LastName" required class="form-control" id="floatingInputLN" placeholder="Sanchez">
        <label for="floatingInputLN">Last Name</label>
      </div>
    </div>


    <div class="form-floating mb-2">
      <input type="text" name="Address" required class="form-control" id="floatingInputA" placeholder="Madero #345 Col Centro">
      <label for="floatingInputA">Address</label>
    </div>

    <div class="row">
      <div class="form-floating col-6 mb-2">
        <input type="tel" name="Cellphone" required class="form-control" id="floatingInputT" placeholder="name@example.com">
        <label for="floatingInputT">Cellphone</label>
      </div>

      <div class="form-floating col-6 mb-2">
        <input type="number" name="Edad" required class="form-control" id="floatingInputT" placeholder="name@example.com">
        <label for="floatingInputT">Edad</label>
      </div>
    </div>
    
    <div class="form-floating mb-2">
      <input type="email" name="Email" required class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>

    <div class="form-floating mb-2">
      <input type="password" name="Password" required class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    <p class="mt-5 mb-3 text-white">&copy; 2021-2022 By <i>Timo</i> </p>
  </form>
</main>
    
  </body>
</html>