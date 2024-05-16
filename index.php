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
        <a class="nav-link" href="#services">Services</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<!-- carousel -->
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/images2.jpg" alt="Los Angeles" width="1500" height="500">
      <div class="carousel-caption">
        <h3>Space Odyssey</h3>
        <p>We had such a great time in zero gravity!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/images.jpg" alt="Chicago" width="1500" height="500">
      <div class="carousel-caption">
        <h3>Endless Wonders of Galaxy</h3>
        <p>Thank you, Universe</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="img/images3.jpg" alt="New York" width="1500" height="500">
      <div class="carousel-caption">
        <h3>Mesmerized</h3>
        <p>Still Awestruck!</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
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

 <section id="services" class="my-5">
  <div class="py-5">
   <h2 class="text-center">Services</h3>
  </div>

  <div class="container-fluid">
    <div class="row">
       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
         <img class="card-img-top" src="img/images2.jpg" alt="Card image">
         <div class="card-body">
            <h4 class="card-title">Front End</h4>
            <p class="card-text">Intuitive UI</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
         </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
         <img class="card-img-top" src="img/images2.jpg" alt="Card image">
         <div class="card-body">
            <h4 class="card-title">Back End</h4>
            <p class="card-text">Strong Servers</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
         </div>
       </div>

       <div class="col-lg-4 col-md-4 col-12">
         <div class="card">
         <img class="card-img-top" src="img/images2.jpg" alt="Card image">
         <div class="card-body">
            <h4 class="card-title">REST APIs</h4>
            <p class="card-text">Seamless connection</p>
            <a href="#" class="btn btn-primary">See Profile</a>
         </div>
         </div>
       </div>
    </div>
  </div>
 </section>

 <section id="contact" class="my-5">
  <div class="py-5">
   <h2 class="text-center">Contact Me</h3>
  </div>
  <div class="w-50 m-auto">
   <form action="userinfo.php" method="post">
     <div class="form-group">
        <label>Username</label>
        <input type="text" name="user" class="form-control">
     </div>
     <div class="form-group">
        <label>Email Id</label>
        <input type="text" name="email" class="form-control">
     </div>
     <div class="form-group">
        <label>Mobile No.</label>
        <input type="text" name="mobile" class="form-control">
     </div>
     <div class="form-group">
        <label>Comments</label>
        <textarea name="comment" class="form-control"></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Submit</button>
   </form>
  </div>
</section>

<footer>
 <p class="p-3 bg-dark text-white text-center">Raima's page</p>
</footer>
 
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>