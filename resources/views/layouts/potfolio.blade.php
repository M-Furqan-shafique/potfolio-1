<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sticky Navbar with Bootstrap</title>
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
   <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
   <style>
        body {
         padding-top: 56px;
           } 
           .btna{
            background-color:cornflowerblue;
            color: white;
            float: right;
           }    
           .background{
            background-image: url(bg.jpeg);
            width: 80%;
            
            background-size: cover;
            background-repeat: no-repeat;
           }
    </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <a class="navbar-brand" href="#"></a>
    <div class="container-fluid">
      <a class="navbar-brand" href="javascript">Furqan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center " id="collapsibleNavbar">
        <ul class="navbar-nav    ">
          <li class="nav-item">
            <a class="nav-link" href="#Home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#About me">About me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#Testamonils">Testamonils</a>
          </li>

        </ul>
        <a class="btn btn-outline-secondary float-end d-block mx-atuo" href="javascript">Contact me</a>
      </div>
    </div>
  </nav>
<!--Home-->
  <div class="container" id="Home" style="margin-top: 10%;">
    <div class="row">
      <div class="col-sm-7">
        <p>Hey, I am Furqan</p>
        <h1>I Creat Product design <br>
          and brand experience
        </h1>
        <p>Lorem ipsum dolor sit amet consectetur, <br>
          adipisicing elit. Dolores ex
          fugit, excepturi <br> aliquam labore harum
          molestias eum.</p>
        <button class="btn" style="background-color:cornflowerblue ;">Get in touch</button>
      </div>
      <div class="col-sm-5">
        <div class="background">
          <img src="images/mfurqan.png" alt="" width="100%" >
        </div>  
      </div>
    </div>
    <div class="col-sm-4"></div>
    <div class="col-sm-4"></div>
  </div>
  <div class="container-fluid main">
    <div class="row">
      <div class="col-sm-4">
        <p style="margin-left: 10%;">My Skills</p>
        <h2 style="margin-left: 10%;">My Expertise</h2>
      </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-4"></div>
    </div>
  </div>
  <br>
  <div class="container">
    <div class="row ">
      <div class="col-sm-3 rounded " style="background-color: bisque;border-right: 10px solid white; padding: 15px;">
        <i class="fa-solid fa-right-to-bracket" style="background-color: white;"></i>
        <h4>Strategy & Direction</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla natus illum quisquam quae similique, obcaecati
          praesentium delectus nostrum suscipit modi. </p>
      </div>
      <div class="col-sm-3 rounded" style="background-color: bisque;border-right:10px solid white; padding: 15px;">
        <i class="fa-brands fa-slack" style="background-color: white;"></i>
        <h4>Branding & Logo</h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod vel nihil accusamus non dicta rem minima. Esse
          voluptatum adipisci consequuntur eveniet sint.</p>
      </div>
      <div class="col-sm-3 rounded" style="background-color: bisque;border-right:10px solid white;padding: 15px; ">
        <i class="fa-solid fa-pen-fancy" style="background-color: white;"></i>
        <h4>Ul & Ux Design</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe animi sequi officia, quo tenetur ad pariatur
          aspernatur quae sunt commodi praesentium.</p>
      </div>
      <div class="overflow-hidden col-sm-3 rounded"
        style="background-color: bisque;border-right:10px solid white; padding: 15px; ">
        <i class="fa-solid fa-code" style="background-color: white;"></i>
        <h4>Webflow Developments</h4>
        <p>
          Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis sunt culpa praesentium quidem inventore
          omnis consequuntur, illo id maxime sint.
        </p>
      </div>
    </div>
  </div>
  <br>
  <br>
  <!--About me-->
  <div class="container" id="About me">
    <div class="row">
      <div class="col-sm-5">
        <div class="background">
          <img src="images/mfurqan.png" alt="" width="100%" >
        </div>
      </div>
      <div class="col-sm-7" style="margin-top: 10%;">
        <p>Furqan</p>
        <h1>About me</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur unde saepe quas illo architecto optio vero?
          Provident deserunt, praesentium vitae temporibus, 
        </p>
          <br>
          <br>
          velit dignissimos suscipit officiis error rem architecto odit tempora
          <br>
          error rem architecto odit tempora.
        </p>
      </div>
    </div>
  </div>
  <!--Portfolio-->
  <div class="container" id="Portfolio">
    <div class="row">
      <div class="col-sm-12">
        <P>Furqan</P><button class="btna">Visit My Site</button>
      <h2>Portfolio</h2>
      </div>
            </div>
  </div>
  <!--Card-->
  <div class="container mt-3">
    <div class="row">
      <div class="col-sm-4 ">
        <div class="card" style="width:300px">
          <img class="card-img-top cricule" src="images/mfurqan.png" alt="Card image" style="width:80%">
          <div class="card-body">
            <h4 class="card-title">M Furqan</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-8">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="images/app.jpg" alt="Card image" style="width:80%; height: 250px; ;">
          <div class="card-body">
            <h4 class="card-title">App Dashboard</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
      <div class="col-sm-4 mt-7">
        <div class="card" style="width:300px">
          <img class="card-img-top" src="images/laptop.jpg" alt="Card image" style="width:80%">
          <div class="card-body">
            <h4 class="card-title">Easy Rent</h4>
            <p class="card-text">Some example text some example text. John Doe is an architect and engineer</p>
            <a href="#" class="btn btn-primary">See Profile</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--Testamonials-->
  <div class="container  " style="margin-top: 7%; background-color: azure;" id="Testamonils">
    <div class="row">
      <h2 style="margin-bottom: 5%;">Furqan Testamonils</h2>
      <div class="col-sm-4">
        <div class="card d-flex mx-auto ">
          <div class="card-image" style="background-color: azure;">
            <img class="img-fluid d-flex mx-auto " width="250px" height="150px" src="images/woman 1.png">
          </div>
          <div class="card-text" style="background-color: azure;">
            <div class="card-title">Ms.Fatima</div>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
            Maecenas nec odio et ante tincidunt tempus
            Duis leo. Donec sodales sagittis magna
          </div>
          <div class="footer" style="background-color: azure;">
            <span id="name">Micheal Smith<br></span>
            <span id="position ">CEO of <a href="#" style="text-align: center;"><br>Google.com</a></span>
          </div>
        </div>
      </div>
       <br>
      <div class="col-sm-4 ">
        <div class="card d-flex mx-auto">
          <div class="card-image" style="background-color:azure ;">
            <img class="img-fluid d-flex mx-auto" height="60px" width="275px" src="images/man 2.png">
          </div>
          <div class="card-text" style="background-color: azure;">
            <div class="card-title">Mr.Ahmed</div>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
            Maecenas nec odio et ante tincidunt tempus
            Duis leo. Donec sodales sagittis magna
          </div>
          <div class="footer" style="background-color: azure;">
            <span id="name">Angellia Miller<br></span>
            <span id="position">CEO of <a href="#"style="text-align: center;"><br>Facebook.com</a></span>
          </div>
        </div>
      </div>
      <br>
      <div class="col-sm-4 cricul">
        <div class="card d-flex mx-auto ">
          <div  class="card-image" style="background-color: azure;">
            <img class="img-fluid d-flex mx-auto" width="400px" height="200px" src="images/Furqan 2.png">
          </div>
          <div class="card-text" style="background-color: azure;">
            <div class="card-title">Mr.Furqan</div>
            Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
            Aenean massa. Nam quam nunc, blandit vel, luctus pulvinar, hendrerit id, lorem.
            Maecenas nec odio et ante tincidunt tempus
            Duis leo. Donec sodales sagittis magna
          </div>
          <div class="footer" style="background-color: azure;">
            <span id="name">Christina Williams<br></span>
            <span id="position">UX Designer at <a href="#"style="text-align: center;"><br>Youtube.com</a></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>