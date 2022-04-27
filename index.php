<?php $times = [
    "https://images.pexels.com/photos/2097090/pexels-photo-2097090.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/3186752/pexels-photo-3186752.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940",
    "https://images.pexels.com/photos/286283/pexels-photo-286283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/835814/pexels-photo-835814.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
] ?>

<?php $nodiscount = [
    "https://images.pexels.com/photos/302457/pexels-photo-302457.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/6210876/pexels-photo-6210876.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/1199957/pexels-photo-1199957.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
    "https://images.pexels.com/photos/2491273/pexels-photo-2491273.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
] ?>


<?php include("Database/database_connection.php");?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./sass/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>indexpage</title>
</head>

<body class="bodyfont">

    <!-- Registeration  modal -->
    <?php include_once('navbar.php'); ?>
    <!-- product image slider1-->


    <div id="carouselExampleDark" class="carousel carousel-dark slide carasol-height " data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner carasol-height">
            <div class="carousel-item active " data-bs-interval="10000">
                <img src="https://images.pexels.com/photos/1566837/pexels-photo-1566837.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 carasol-image" alt="...">

            </div>
            <div class="carousel-item " data-bs-interval="2000">
                <img src="https://images.pexels.com/photos/7363672/pexels-photo-7363672.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class="d-block w-100 carasol-image" alt="...">

            </div>
            <div class="carousel-item ">
                <img src="https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" class=" d-block w-100 carasol-image" alt="...">

            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Top selling -->

    <div class=" max-height: 50px; d-flex flex-row justify-content-center align-items-center">
        <div style=" margin-top: 1rem; width:80% ;">
            <div class="row">
                <div class="col-lg-6 col-sm-12 col-md-6 ">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="imagewidth1"><img style="object-fit: cover;" class="imagewidth1" src="https://images.pexels.com/photos/1855214/pexels-photo-1855214.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt=""></div>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col-md-6 ">

                    <div class="position-relative mt-sm-0 mt-lg-5">
                        <h1 class=" text-center">Top Selling!</h1>

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
                        <button class="orderbutton">ORDER NOW</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- special-disces -->
    <div class="container-fluid mt-lg-5 mt-sm-0">
        <h3 class="text-center">Today's Special</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut
            labore et dolore magna aliqua. </p>
    </div>

    <!-- Row section 1st one -->
    <div class="m-lg-5 m-sm-0 row ">
        <?php
        foreach ($times as $times) {
        ?>

            <div class="container col-sm-6 col-lg-3 d-flex  justify-content-center mt-2  ">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div id="backgrounddark" style="background-image: url(<?php echo $times ?>)" class="hovering ">

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
                            <h5 style="color: red;" class=" mt-2 text-decoration-line-through  ">$55</h5>
                            <h5 class=" mt-2  mx-2 ">$50</h5>
                        </div>
                    </div>
                </div>
            </div>




        <?php } ?>
    </div>

    <!-- discount card  section -->

    <div style="height:200px; width: 100%; background-size: cover; background-image: url('https://images.pexels.com/photos/1049626/pexels-photo-1049626.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');">
        <button class="orderbutton position-relative " style="top: 70%; left: 50%; transform: translate(-50%,-50%);">Dinner Special</button>
        <h5 class="container text-center text-white mt-lg-3 " style="text-align:justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci iusto enim natus fugiat! Quia nulla quidem ex minima esse, id laboriosam aspernatur officiis? Illo veritatis .</h5>
    </div>

    <!-- dish heading second -->
    <div class="container-fluid mt-lg-5 mt-sm-0">
        <h3 class="text-center">Other Dish</h3>
        <p class="text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut
            labore et dolore magna aliqua. </p>
    </div>
    <!-- Row section 2nd one -->
    <div class=" m-sm-0 row ">
        <?php
        foreach ($nodiscount as $nodiscount) {
        ?>

            <div class="container col-sm-6 col-lg-3 d-flex  justify-content-center mt-2  ">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <div id="backgrounddark" style="background-image: url(<?php echo $nodiscount ?>)" class="hovering ">

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
    <!-- pagination for items -->
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">
            <li class="page-item disabled">
                <a class="page-link">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
                <a class="page-link" href="#">Next</a>
            </li>
        </ul>
    </nav>
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



    <script>

        // card hover effects
        var $imagetag = document.getElementById('backgrounddark');
        var $hiddenbtn = document.getElementById('hiddenbtn');

        $imagetag.addEventListener('mouseover', () => {

            $hiddenbtn.style.visibility = 'visible';
            $hiddenbtn.style.marginTop = '3px';

        })
        $imagetag.addEventListener('mouseout', () => {

            $hiddenbtn.style.visibility = 'hidden';
            $hiddenbtn.style.marginTop = '0px';
            $hiddenbtn.style.transition = '.3s ease-out';
        })


    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>