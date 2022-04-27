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
                <a class=" ancor dashbox mt-2" style=" border: solid 1px;" href="Addproduct.php">
                    <div class=" text-xl-center">Add product</div>
                </a>
                <a style=" background-color:orange;" class=" ancor dashbox mt-2" style=" border: solid 1px;" href="#">
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
                    <!-- table -->
                    <table class="table table-bordered border-success ">
                        <thead>
                            <tr>
                                <th scope="col">S.N</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">product</th>
                                <th scope="col">Catagory</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                                <td>cheese</td>
                                <td class=" btn btn-success mx-2">Edit</td>
                                <td class=" btn btn-danger mx-2">Delete</td>

                                <td class=" btn btn-danger mx-2">Discount</td>

                            </tr>

                        </tbody>
                    </table>
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

                    <!-- Message section -->
                    <p class=" text-black-50">sam add --- product in Card </p>
                </div>


            </div>
        </div>


    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>



</html>