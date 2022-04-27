
    <?php $similardish= [
        "https://images.pexels.com/photos/1824353/pexels-photo-1824353.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/3434523/pexels-photo-3434523.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/1893556/pexels-photo-1893556.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "https://images.pexels.com/photos/7497254/pexels-photo-7497254.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
    ] ?>
 
 

 
 <!doctype html>
 <html lang="en">

 <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="./sass/style.css">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <title>food description</title>
 </head>

 <body class="bodyfont">

     <?php include_once('navbar.php') ?>

     <!-- Product description -->

     <div class=" max-height: 50px; d-flex flex-row justify-content-center align-items-center">
         <div style=" margin-top: 1rem; width:80% ;">
             <div class="row">
                 <div class="col-lg-6 col-sm-12 col-md-6 ">
                     <div class="d-flex justify-content-center align-items-center">
                         <div class="imagewidth1"><img style="object-fit: cover;" class="imagewidth1" src="https://images.pexels.com/photos/699953/pexels-photo-699953.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                     </div>
                 </div>
                 <div class="col-lg-6 col-sm-12 col-md-6 ">

                     <div class="position-relative mt-sm-0 mt-lg-5">
                         <h1 class=" text-center">Dish name</h1>

                         <div class="d-flex ">
                             <h5 class=" text-decoration-line-through m-2 discounted-color ">$50</h5>
                             <h4 class="mt-discount ">$25</h4>

                         </div>
                         <div class=" d-flex justify-content-center align-items-center  " style=" text-align: justify;">
                             <p class=" parafont">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                 tempor incididunt ut
                                 labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                 ullamco
                                 laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit
                                 in
                                 voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                                 cupidatat
                                 non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                             </p>
                         </div>
                         <div class=" d-flex flex-col justify-content-between ">
                             <button class="orderbutton">ORDER NOW</button>
                             <button class="orderbutton">Add to Cart</button>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

     </div>

     <!-- detailing card section -->
     
    <div class=" my-3" style="height:200px; width: 100%; background-position: center; background-size: cover; background-image: url('https://images.pexels.com/photos/1066860/pexels-photo-1066860.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <button class="orderbutton position-relative " style="top: 70%; left: 50%; transform: translate(-50%,-50%);">Dinner Special</button>
        <h5 class="container text-center text-white mt-lg-3 " style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iusto enim natus fugiat! Quia nulla quidem ex minima esse, id laboriosam aspernatur officiis? Illo veritatis .</h5>
    </div>

       <!-- dish heading second -->
       <div class="container-fluid mt-lg-5 mt-sm-0">
        <h3 class="text-center">Similar Dishes</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut
            labore et dolore magna aliqua. </p>
    </div>


     <!-- similar dishes 
      Row section 3rd one -->
     <div class=" m-sm-0 row ">
         <?php
            foreach ($similardish as $similardish) {
            ?>

             <div class="container col-sm-6 col-lg-3 d-flex  justify-content-center mt-2  ">
                 <div class="d-flex flex-column justify-content-center align-items-center">
                     <div id="backgrounddark" style="background-image: url(<?php echo $similardish ?>)" class="hovering ">

                         <!-- object visit link -->
                         <div id="hiddenbtn" style=" top:320px; " class=" px-5 position-relative justify-content-center align-items-center upward ">
                             <div class=" d-flex flex-row justify-content-center align-items-center">

                                 <div style=" height: 50px; width: 50px;" class=" hovercart mx-1 d-flex justify-content-center align-items-center">
                                     <a href="#"> <i class=" cartitem far fa-heart fa-lg"></i> </a>
                                 </div>


                                 <div style=" height: 50px; width: 50px;" class=" hovercart mx-1 d-flex justify-content-center align-items-center">
                                     <a href="#"> <i class="cartitem far fa-eye fa-lg"></i></a>
                                 </div>


                                 <div style=" height: 50px; width: 50px;" class=" hovercart mx-1  d-flex justify-content-center align-items-center">
                                     <a href="#"> <i class="cartitem fas fa-cart-plus fa-lg"></i> </a>
                                 </div>

                             </div>
                         </div>
                         <!-- sales and ancor botton -->
                         <div style="bottom: 10%; left:4% ;" class="d-flex flex-column float-start position-relative">
                             <div class=" bg-cart m-1 "><a href="#" class="ancor  mx-3 my-2">Sale</a></div>
                             <div class=" bg-cart m-1"><a href="#" class="ancor mx-3 my-2">-7</a></div>
                         </div>

                     </div>
                     <!-- food detailing -->
                     <div>
                         <h4 class="mt-2">Food Name</h4>
                         <div class="d-flex justify-content-center">
                             <!-- <h5 style="color: red;" class=" mt-2 text-decoration-line-through  ">$55</h5> -->
                             <h5 class=" mt-2  mx-2 ">$50</h5>
                         </div>
                     </div>
                 </div>
             </div>




         <?php } ?>
     </div>

     <?php
     include_once("comment.php");
     ?>

     <!-- footer from bootstrap -->
     <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
         <div class="col-md-4 d-flex align-items-center">
             <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
                 <svg class="bi" width="30" height="24">
                     <use xlink:href="#bootstrap"></use>
                 </svg>
             </a>
             <span class="text-muted container-fluid">© 2021 tamanna22@gmail.com</span>
         </div>

         <ul class="nav col-md-4 container-fluid justify-content-end list-unstyled d-flex">
             <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30">
                         <use xlink:href="#facebook"> <i class="fa-brands  fa-facebook"></i></use>
                     </svg></a></li>
             <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30">
                         <use xlink:href="#instagram"> <i class="fa-brands fa-instagram"></i></use>
                     </svg></a></li>
             <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="30" height="30">
                         <use xlink:href="#facebook"> <i class="fa-solid fa-location-dot"></i></use>
                     </svg></a></li>
         </ul>
     </footer>


     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

 </body>

 </html>