<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site of designers of home.">
  <meta name="author" content="Timo Ruiz">
  <meta name="keywords" content="home, design, interior">
  <title>Login Design</title>
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
<body class="text-center bg-info">    
<main class="form-signin">
  <form>
    <img class="mb-4" src="./images/login.png" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal text-white">Please sign in</h1>

    <div class="form-floating mb-2">
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating mb-2">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3 text-white">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
    <p class="mt-5 mb-3 text-white">&copy; 2021-2022 By <i>Timo</i> </p>
  </form>
</main>
    
  </body>
</html>