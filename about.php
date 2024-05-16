<!DOCTYPE html>
<html lang="en">
<head>
   <title>php project</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&display=swap" rel="stylesheet">
  
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Raima</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="jumbotron">
  <h1>Raima Mukherjee</h1>
  <p>A passionate web developer on a journey of innovation!</p>
</div>

<section class="my-5">
  <div class="py-5">
   <h2 class="text-center">About Us</h3>
  </div>

  <!-- grid system -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12">
         <img src="img/images4.jpg" class="img-fluid aboutimg">
      </div>
      <div class="col-lg-6 col-md-6 col-12">
         <h2 class="display-4">I am Raima Mukherjee</h2>
         <p class="py-5">As a tech enthusiast, I possess a strong command over programming languages like Java, JavaScript, Python, C++. I'm well-versed in frameworks like ReactJS, Bootstrap CSS, Flask and currently focusing on learning the MERN Stack. With my expertise, I can confidently navigate the realms of full-stack web development, creating elegant and functional solutions. Coding is not just a skill but a passion for me, and I constantly strive to push the boundaries of what's possible in the world of programming.</p>
         <a href="about.php" class="btn btn-success">Check More</a>
      </div>
    </div>
  </div>
 </section>
 
 <footer>
   <p class="p-3 bg-dark text-white text-center">Raima's page</p>
 </footer>
</body>
</html>