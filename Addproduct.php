<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./sass/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Dashboard</title>
</head>

<body class=" bodyfont">
    <div class="row" style=" height:100vh;">
        <div class="col col-lg-2  bg-success">
            <div class="text-center mt-2">
                <h1>Dashboard</h1>
                <a style="margin-left: 50%;" class="ancor" href="#">Logout</a>
            </div>
            <hr>
            <div class=" mx-2 d-flex flex-column justify-content-center">

                <a class=" ancor dashbox mt-2" style=" border: solid 1px;" href="#">
                    <div class=" text-xl-center ">Seller</div>
                </a>
                <a class=" ancor dashbox mt-2" style=" border: solid 1px;" href="#">
                    <div class=" text-xl-center ">Product</div>
                </a>
                <a class=" ancor dashbox mt-2" style=" border: solid 1px;" href="#">
                    <div class=" text-xl-center">Buyers</div>
                </a>
                <a style=" background-color:orange;" class=" ancor dashbox mt-2" style=" border: solid 1px;" href="#">
                    <div class=" text-xl-center">Add product</div>
                </a>
                <a class=" ancor dashbox mt-2" style=" border: solid 1px;" href="Admin-Dashboard.php">
                    <div class=" text-xl-center">listed product</div>
                </a>

            </div>
        </div>
        <!-- search and profile navbar -->
        <div style=" background-color:burlywood;" class="col ">
            <div class=" row">
                <div class=" mt-2 row">
                    <!-- search items -->
                    <div class="col-lg-10">
                        <form class="form-inline my-2 my-lg-0 float-sm-start  searchbar">
                            <div class="d-flex flex-row">
                                <input class="form-control mr-sm-2 h-25" type="search" placeholder="Search Product" aria-label="Search">
                                <a class="ancor mx-2 mt-2" href="#"><i class="fas fa-search"></i></a>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 d-flex flex-row">

                        <!-- profile image -->
                        <div style=" height:40px; width:40px; background-size:cover; background-image:url('https://images.pexels.com/photos/2379004/pexels-photo-2379004.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); " class=" rounded-circle"></div>
                        <div>
                            <p style=" margin-left:5px; margin-top: 10px; margin-bottom: 0px;" class=""> User name</p>
                        </div>
                    </div>
                </div>
                <hr class=" mt-2">
                <div class="row mx-2 container">
                    <div class="row">
                        <div style=" height:10vh; width:15vw; margin-bottom: 10px; " class="col bg-success">
                            <div class="d-flex flex-column">
                                <p class=" text-white text-center">Your visitors </p>
                                <p class=" text-white-50">2200</p>
                            </div>
                        </div>
                        <div style=" height:10vh; width:15vw; margin-bottom: 10px; " class="col bg-danger">
                            <div class="d-flex flex-column">
                                <p class=" text-white text-center">Total transition</p>
                                <p class=" text-white-50">3100$</p>
                            </div>
                        </div>
                        <div style=" height:10vh; width:15vw; margin-bottom: 10px; " class="col bg-info">
                            <div class="d-flex flex-column">
                                <p class=" text-white text-center">This month sale </p>
                                <p class=" text-white-50">160$</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class=" col">
<hr class=" w-100">
                <h2 class=" text-center text-black-50"> Add dish</h2>

                    <!-- item add form -->
                    <form >
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Food name</label>
                                <input type="text" class="form-control" id="" placeholder="Name..">
                            </div>

                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Food description</label>
                                <input type="text" placeholder="description" class="form-control" id="">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputcatagory">Catagory</label>
                                <select id="" class="form-control">
                                    <option selected>choose ..</option>
                                    <option>oily</option>
                                    <option>fried</option>
                                </select>
                            </div>
                            <div class="custom-file my-2">
                                <input type="file" class="custom-file-input " id="customFile">
                                <!-- <label class="custom-file-label  rounded" for="customFile">Choose Photo</label> -->
                            </div>
                        </div>
                        <button class="orderbutton">Add dish</button>
                        <!-- <button type="submit" class="btn btn-primary my-2">Add dish</button> -->
                    </form>
                </div>

            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



</html>