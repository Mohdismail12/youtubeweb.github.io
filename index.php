<!DOCTYPE html>
<html >
<head>
     
    <title>Thapa Technical</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  
  <style> 
    @import url('https://fonts.googleapis.com/css2?family=Lora&display=swap');
    </style>
 </head>
<body>
<?php include 'menu.php'; ?>

      <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
          <li data-target="#demo" data-slide-to="0" class="active"></li>
          <li data-target="#demo" data-slide-to="1"></li>
          <li data-target="#demo" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src=" https://source.unsplash.com/random/?Pramming,coder" alt="Los Angeles" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Los Angeles</h3>
              <p>We had such a great time in LA!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="https://source.unsplash.com/random/?Ux-designer,Webtechnology" alt="Chicago" width="1100" height="500">
            <div class="carousel-caption">
              <h3>Chicago</h3>
              <p>Thank you, Chicago!</p>
            </div>   
          </div>
          <div class="carousel-item">
            <img src="<div class="card" style="width:500px">
  <img class="card-img-top" src="https://source.unsplash.com/random/?webdeveloper,coding" alt="Card image">
  <div class="card-img-overlay">
    <h4 class="card-title">John Doe</h4>
    <p class="card-text">Some example text.</p>
    <a href="#" class="btn btn-primary">See Profile</a>
  </div>
<div>" alt="New York" width="1100" height="500"</div>
            <div class="carousel-caption">
              <h3>New York</h3>
              <p>We love the Big Apple!</p>
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
<section class="my">
    <div>
        <h3 class="text-center">About Us</h3>
    </div>
    <div class="container-fluid">
        <h2> I am Thapa Technical</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem impedit nobis, facere maiores consequuntur illo tenetur fugiat blanditiis officia nulla!</p>
        <a href="about.php">Check More</a> 
    </div>
</section>
<section class="my-5">
    <div class="py-5">
        <h3 class="text-center">Our Sevices</h3>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:500px">
                <img class="card-img-top" src="https://source.unsplash.com/random/?city,night" alt="Card image">
                <div class="card-img-overlay">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:500px">
                <img class="card-img-top" src="https://source.unsplash.com/random/?city,night" alt="Card image">
                <div class="card-img-overlay">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
        </div>
        <div class="col-lg-4 col-md-4 col-12">
            <div class="card" style="width:500px">
                <img class="card-img-top" src="https://source.unsplash.com/random/?city,night" alt="Card image">
                <div class="card-img-overlay">
                  <h4 class="card-title">John Doe</h4>
                  <p class="card-text">Some example text.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div> 
        </div>
        </div>
    </div>
    </section>

    <section class="my-5">
        <div class="py-5">
            <h3 class="text-center">Our Gallery</h3>
        </div>
        <div class="container-fluid">
            <dic class="row">
                <div class="col-lg-4 col-md-4 col-12">  
                    <img src="https://source.unsplash.com/random/?natural" class="img-fluid pb-3">
                    </div>
                <div class="col-lg-4 col-md-4 col-12">  
                    <img src="https://source.unsplash.com/random/?natural" class="img-fluid pb-3">
                    </div>
                <div class="col-lg-4 col-md-4 col-12">  
                    <img src="https://source.unsplash.com/random/?natural" class="img-fluid pb-3">
                    </div>
            </div>
        </div>
    </section>


    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center">Contact Us</h3>
        </div>
       <div class="w-50 m-auto">
        <form action="userinfo.php" method="POST">
            <div class="form-group">
                <label>Username</label>
                <input type="text" name ="user" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Email Id</label>
                <input type="text" name ="email" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" name ="mobile" autocomplete="off" class="form-control">
            </div>
            <div class="form-group">
                <label>Comments</label>
                <textarea class="form-control"  name="comments"></textarea>
                <button type="submit" class="btn btn-success" >Submit</button>
            </div>

        </form>
        <div>

        </section>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
 